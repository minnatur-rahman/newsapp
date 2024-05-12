@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Weblites</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Weblites</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Weblites Modify</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Weblites</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('website.update',$website->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Weblite Name </label>
                                <input type="text" name="website_name"
                                    class="form-control" value="{{ $website->website_name }}"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Weblite link</label>
                                <input type="text" name="website_link"
                                    class="form-control" value="{{ $website->website_link }}" required>

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
