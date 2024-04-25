
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
      <h3 class="card-title">Categories Table</h3>
      <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Category Name Bangla</th>
          <th>Category Name English</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($category as $row )
        <tr>
            <td>{{ $row->category_bn }}</td>
            <td>{{ $row->category_en }}</td>
            <td>
                <a href="" class="btn btn-info"><i class="fa fa-pencil">Edit</i></a>
                <a href="" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
            </td>

          </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Category Name Bangla</th>
            <th>Category Name English</th>
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
              <h4 class="modal-title">Insert New Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            </div>

          </div>

        </div>

      </div>

@endsection
