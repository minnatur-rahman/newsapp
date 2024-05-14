@extends('backend.layouts.layout')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Photo Update Panel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Photo Update Panel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Photo Update Panel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('photo.update',$photo->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="title" value="{{ $photo->title }}" class="form-control" id="exampleInputEmail1"
                                            placeholder="Type Here Bangla">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Type</label>
                                        <select class="from-control"  value="{{ $photo->type }}"  name="type" id="exampleInputPassword1">
                                            <option value="1">Big Photo</option>
                                            <option value="0">Small Photo</option>
                                       </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleInputFile">Old Photo</label><br>
                                        <img src="{{ URL::to($photo->photo) }}" style="height: 50px; width: 70px;" alt="">
                                        <input type="hidden" name="oldPhoto" value="{{ $photo->photo }}">
                                    </div>
                                </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
