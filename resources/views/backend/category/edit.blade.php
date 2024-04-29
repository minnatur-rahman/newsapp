@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories Modify</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Category</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Category Name Bangla</label>
                                <input type="text" name="category_bn"
                                    class="form-control" value="{{ $category->category_bn }}"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category Name English</label>
                                <input type="text" name="category_en"
                                    class="form-control" value="{{ $category->category_en }}" required>

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
