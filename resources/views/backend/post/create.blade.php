@extends('backend.layouts.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Post Insert Panel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post Insert Panel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Post Insert Panel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Title Bangla</label>
                                        <input type="text" name="title_bn" class="form-control" id="exampleInputEmail1"
                                            placeholder="Type Here Bangla">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Title English</label>
                                        <input type="text" name="title_en" class="form-control"
                                            id="exampleInputPassword1" placeholder="Type Here English">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="cat_id" class="form-control">
                                            <option selected disabled">==Choose One==</option>
                                            @foreach ($category as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->category_bn }}|{{ $row->category_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Subcategory</label>
                                        <select name="subcat_id" class="form-control" id="subcat_id">
                                            <option selected disabled">==Choose One==</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">District</label>
                                        <select name="dist_id" class="form-control">
                                            <option selected disabled">==Choose One==</option>
                                            @foreach ($district as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->district_bn }}|{{ $row->district_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Sub District</label>
                                        <select name="subdist_id" class="form-control">
                                            <option selected disabled">==Choose One==</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Tags Bangla</label>
                                        <input type="text" name="tags_bn" class="form-control" id="exampleInputEmail1"
                                            placeholder="Type Here Bangla">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Tags English</label>
                                        <input type="text" name="tags_en" class="form-control" id="exampleInputPassword1"
                                            placeholder="Type Here English">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Details Bangla</label>
                                    <textarea class="summernote" name="details_bn">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Details English</label>
                                    <textarea class="summernote" name="details_en">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>

                                <hr>
                                <h4 class="text-center text-success">Extra Option</h4>
                                <hr>

                                <div class="row ">

                                    <div class="form-check col-md-6">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="headline"value="1">
                                        <label class="form-check-label" for="exampleCheck1">Headline</label>
                                    </div>

                                    <div class="form-check col-md-6">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bigthumbnail"value="1">
                                        <label class="form-check-label" for="exampleCheck1">General Big Thumbnail</label>
                                    </div>

                                    <div class="form-check col-md-6">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="first_section" value="1">
                                        <label class="form-check-label" for="exampleCheck1">First Section</label>
                                    </div>

                                    <div class="form-check col-md-6">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                         name="first_section_thumbnail" value="1">
                                        <label class="form-check-label" for="exampleCheck1">First Section Big
                                            Thumbnail</label>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="cat_id"]').on('change',function(){
                var cat_id = $(this).val();
                if(cat_id){
                    $.ajax({
                        url:"{{ url('/get/subcat/') }}/"+cat_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data){
                            $("#subcat_id").empty();
                              $.each(data,function(key,value){
                                $("#subcat_id").append('<option value="'+value.id+'">'+value.subcategory_bn+'</option>');
                              });

                        },
                    });
                }else{
                    alert('danger');
                }
            });
        });
    </script>
@endsection
