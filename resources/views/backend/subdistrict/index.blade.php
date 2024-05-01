@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sub Districts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sub Districts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sub Districts Table</h3>
            <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add
                New</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Districts Name Bangla</th>
                        <th>Districts Name English</th>
                        <th>District</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sub as $row)
                        <tr>
                            <td>{{ $row->subdistrict_bn }}</td>
                            <td>{{ $row->subcategory_en }}</td>
                            <td>{{ $row->category_bn }}</td>
                            <td>
                                <a href="{{ route('subcategory.edit',$row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('subcategories/delete/'.$row->id) }}"  class="btn btn-danger" onclick="confirmation(event)"  ><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Districts Name Bangla</th>
                        <th>Districts Name English</th>
                        <th>District</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!--modal category-->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Insert New SubCategory</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('subcategory.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">SubCategory Name Bangla</label>
                            <input type="text" name="subcategory_bn"
                                class="form-control @error('subcategory_bn') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('subcategory_bn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">SubCategory Name English</label>
                            <input type="text" name="subcategory_en"
                                class="form-control @error('subcategory_en') is-invalid @enderror" id="exampleInputPassword1">
                            @error('subcategory_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Choose Category</label>
                            <select class="form-control  @error('category_id') is-invalid @enderror" name="category_id" required>
                                <option disabled selected>==Choose One==</option>
                                @foreach ( $category as $row )
                                    <option value="{{ $row->id }}">{{ $row->category_bn }} | {{ $row->category_en }}</option>
                                @endforeach

                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection


