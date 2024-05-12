@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Weblite</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Weblite</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Weblite</h3>
            <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add
                New</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Website Name</th>
                        <th>Website Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($website as $row)
                        <tr>
                            <td>{{ $row->website_name }}</td>
                            <td>{{ $row->website_link }}</td>
                            <td>
                                <a href="{{ route('website.edit',$row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('categories/delete/'.$row->id) }}" class="btn btn-danger" onclick="confirmation(event)" ><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Website Name</th>
                        <th>Website Link</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!--modal category-->


@endsection
