@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <strong>Workflow Automation And Data Engineering</strong>
                <p style="text-align: justify">
                    {{ $wde->desc }}

                </p>

            </div>
            <div class="col-4">

                @foreach($wde_img as $wdeimg)

                    <img src="{{(!empty($wdeimg->image))?url('public/upload/image/'.$wdeimg->image):url('upload/no_img.png')}}" style="width:100%"  alt="no image">

                @endforeach


            </div>

        </div>
    </div>


@endsection