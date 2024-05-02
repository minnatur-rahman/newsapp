@extends('backend.layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Subdistricts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Subdistricts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Subdistricts Modify</h3>
        </div>
        <!-- /.card-header -->
        <div class="col-6">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Subdistricts</h4>

                    </div>
                    <div class="modal-body">

                        <form action="{{ route('subcategory.update',$sub->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subdistrict Name Bangla</label>
                                <input type="text" name="subdistrict_bn"
                                    class="form-control" value="{{ $sub->subdistrict_bn }}"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Subdistricts Name English</label>
                                <input type="text" name="subdistrict_en"
                                    class="form-control" value="{{ $sub->subdistrict_en }}" required>

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Choose District</label>
                                <select class="form-control" name="district_id" required>
                                    <option disabled selected>==Choose One==</option>
                                    @foreach ( $district as $row )
                                        <option value="{{ $row->id }}" <?Php if($row->id == $sub->district_id) echo "selected"; ?> >{{ $row->district_bn }} | {{ $row->district_en }}</option>
                                    @endforeach

                                </select>

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
