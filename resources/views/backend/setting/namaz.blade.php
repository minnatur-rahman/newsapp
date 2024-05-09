@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Prayer Time</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Prayer Time<</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Prayer Time<</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Prayer Time<</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('social.update',$namaz->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fojor</label>
                                <input type="text" name="fojor"
                                    class="form-control" value="{{ $namaz->fojor }}"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Johor</label>
                                <input type="text" name="johor"
                                    class="form-control" value="{{ $namaz->johor }}"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Asor</label>
                                <input type="text" name="fojor"
                                    class="form-control" value="{{ $namaz->fojor }}"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Magrib</label>
                                <input type="text" name="fojor"
                                    class="form-control" value="{{ $namaz->fojor }}"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Magrib</label>
                                <input type="text" name="fojor"
                                    class="form-control" value="{{ $namaz->fojor }}"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Easha</label>
                                <input type="text" name="fojor"
                                    class="form-control" value="{{ $namaz->fojor }}"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumah</label>
                                <input type="text" name="fojor"
                                    class="form-control" value="{{ $namaz->fojor }}"
                                    aria-describedby="emailHelp">
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


