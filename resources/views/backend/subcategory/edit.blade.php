@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">SubCategories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">SubCategories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">SubCategories Modify</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update SubCategory</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('subcategory.update',$sub->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">SubCategory Name Bangla</label>
                                <input type="text" name="category_bn"
                                    class="form-control" value="{{ $sub->subcategory_bn }}"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">SubCategory Name English</label>
                                <input type="text" name="subcategory_en"
                                    class="form-control" value="{{ $sub->subcategory_en }}" required>

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Choose Category</label>
                                <select class="form-control  @error('category_id') is-invalid @enderror" name="subcategory_id" required>
                                    <option disabled selected>==Choose One==</option>
                                    @foreach ( $category as $row )
                                        <option value="{{ $row->id }}" <?Php if($row->id == $sub->category_id) echo "selected"; ?> >{{ $row->category_bn }} | {{ $row->category_en }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
