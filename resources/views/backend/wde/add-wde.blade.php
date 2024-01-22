@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage WDE</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">WDE</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                @if(isset($editData))
                                    <h3> Edit WDE
                                        @else
                                            Add WDE
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('wdes.view')}}"><i class="fa fa-list"></i>WDE List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{(@$editData)?route('weds.update',$editData->id):route('wdes.store')}}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group row">
                                        <label>Description</label>
                                        <div class="col-md-8">
                                            <input type="text" name="desc" value="{{@$editData->desc}}" class="form-control"id="desc">

                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label>Wde Image</label>
                                        <div class="col-md-4">
                                            <input type="file" name="image" value="{{@$editData->image}}" class="form-control"id="image">

                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                        <img id="showImage" src="{{url('public/upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">

                                                {{(@$editData)?'Update':'Submit'}}

                                            </button>

                                        </div>
                                    </div>
                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>






@endsection