@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Videos Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Videos Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Videos Gallery</h3>
            <button class="btn btn-danger btn-sm" style="float:right" data-toggle="modal" data-target="#modal-default">Add
                New</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $row)
                        <tr>
                            <td>{{ $row->title }}</td>
                            <td>
                                @if ($row->type==1)
                                    <span class="badge badge-success">Big Video</span>
                                @else
                                    <span class="badge badge-info">Small Video</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('video.edit',$row->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('photo/delete/'.$row->id) }}" class="btn btn-danger" onclick="confirmation(event)" ><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
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
                    <h4 class="modal-title">Insert New Video</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('video.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Embed Code</label>
                            <input type="text" name="embed_code"
                                class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Type</label>
                           <select class="from-control" name="type" id="exampleInputPassword1">
                                <option value="1">Big Video</option>
                                <option value="0">Small Video</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection

