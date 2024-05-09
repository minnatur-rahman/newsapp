@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Seo Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Seo Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Seo Setting</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Seo Setting</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('seo.update',$seo->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Author</label>
                                <input type="text" name="meta_author"
                                    class="form-control" value="{{ $seo->meta_author }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title"
                                    class="form-control" value="{{ $seo->meta_title }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Meta Keyword</label>
                                <input type="text" name="meta_keyword"
                                    class="form-control" value="{{ $seo->meta_keyword }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Meta Discription</label>
                                <input type="text" name="meta_description"
                                    class="form-control" value="{{ $seo->meta_description }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Google Analytics </label>
                                <input type="text" name="google_analytics"
                                    class="form-control" value="{{ $seo->google_analytics }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Google Verification </label>
                                <input type="text" name="google_verification"
                                    class="form-control" value="{{ $seo->google_verification }}"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alexa Analytics</label>
                                <input type="text" name="alexa_analytics"
                                    class="form-control" value="{{ $seo->alexa_analytics }}"
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

