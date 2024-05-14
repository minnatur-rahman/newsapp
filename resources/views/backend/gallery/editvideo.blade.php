@extends('backend.layouts.layout')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Video Update Panel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Video Update Panel</li>
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
                            <h3 class="card-title">Video Update Panel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('video.update',$video->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="title" value="{{ $video->title }}" class="form-control" id="exampleInputEmail1"
                                            placeholder="Type Here Bangla">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Type</label>
                                        <select class="from-control"  value="{{ $video->type }}"  name="type" id="exampleInputPassword1">
                                            <option value="1">Big Photo</option>
                                            <option value="0">Small Photo</option>
                                       </select>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Embed Code</label>
                                        <input type="text" name="embed_code" value="{{ $video->embed_code }}"
                                            class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" required>
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
