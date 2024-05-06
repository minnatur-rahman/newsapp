@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">All Posts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Posts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Posts Table</h3>
            <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add
                New</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $row)
                        <tr>
                            <td>{{ $row->category_bn }}</td>
                            <td>{{ $row->subcategory_bn }}</td>
                            <td>{{ $row->title_bn }}</td>
                            <td><img src="{{ URL::to($row->image) }}" style="height: 80px; width: 80px;"></td>
                            <td>{{ $row->post_date }}</td>
                            <td>
                                <a href="{{ route('subcategory.edit',$row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('subcategories/delete/'.$row->id) }}"  class="btn btn-danger" onclick="confirmation(event)"  ><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!--modal category-->


@endsection

