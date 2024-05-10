@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Live TV Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Live TV  Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Live TV  Setting</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Live TV Setting</h4>
                        <a class="btn btn-success" style="float: right" href="">Active</a>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('seo.update',$tv->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Embed Code</label>
                                <textarea type="text" name="embed_code" class="form-control" aria-describedby="emailHelp" required>
                                    {{ $tv->embed_code }}
                                </textarea>
                                <small class="text-danger">Now Live Tv are deactive</small>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <!--modal category-->


@endsection


