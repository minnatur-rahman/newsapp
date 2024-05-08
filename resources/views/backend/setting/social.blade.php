@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Socials Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Socials Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Socials Setting</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Socials Setting</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('social.update',$social->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                <input type="text" name="facebook"
                                    class="form-control" value="{{ $social->facebook }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                <input type="text" name="twitter"
                                    class="form-control" value="{{ $social->twitter }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Youtube</label>
                                <input type="text" name="youtube"
                                    class="form-control" value="{{ $social->youtube }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                <input type="text" name="instagram"
                                    class="form-control" value="{{ $social->instagram }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Linkedin</label>
                                <input type="text" name="linkedin"
                                    class="form-control" value="{{ $social->linkedin }}"
                                    aria-describedby="emailHelp" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <!--modal category-->


@endsection

