@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Carrier</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Carrier</li>
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
                                <h3>Add Department

                                    <a class="btn btn-success float-right btn-sm" href="{{route('carriers.view')}}"><i class="fa fa-list"></i>Carrier List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="POST" action="{{route('carriers.store')}}"enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')
                                    <div class="form-group row">
                                        <label for="Date" class="col-md-4 col-form-label text-md-right"> Start Date</label>
                                        <div class="col-md-4">
                                            <input type="date" name="t_date" class="form-control"id="t_date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Deadline" class="col-md-4 col-form-label text-md-right">Deadline</label>
                                        <div class="col-md-4">
                                            <input type="date" name="deadline" class="form-control"id="deadline">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Carrier Name" class="col-md-4 col-form-label text-md-right">Carrier Name</label>
                                        <div class="col-md-4">
                                            <input type="title" name="title" class="form-control"id="title">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-4">
                                            <input type="file" name="t_download" class="form-control"id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                        <img id="showImage" src="{{url('public/upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
                                    </div>




                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
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