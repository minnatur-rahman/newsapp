@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Notice Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Notice Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Notice Setting</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Notice Setting</h4>
                        @if ($notice->status==1)
                            <a class="btn btn-danger" style="float: right" href="{{ route('notice.deactive',$notice->id) }}">Deactive</a>
                        @else
                            <a class="btn btn-success" style="float: right" href="{{ route('notice.active',$notice->id) }}">Active</a>
                        @endif
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('notice.update',$notice->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Notice</label>
                                <textarea type="text" name="notice" class="form-control" aria-describedby="emailHelp" required>
                                    {{ $notice->notice }}
                                </textarea>
                                @if ($notice->status==1)
                                     <small class="text-success">Now Notice are Active</small>
                                @else
                                     <small class="text-danger">Now Notice are Deactive</small>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <!--modal category-->


@endsection


