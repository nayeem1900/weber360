@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <img src="{{url('public/frontend/images/Mirpur Buildings.jpg')}}" class="d-block w-100" width="" alt="">
        <div class="row">
            <div class="col-sm"><a href="">Services</a> </div>
            <div class="col-sm">Consultants</div>
            <div class="col-sm">Committee</div>
            <div class="col-sm">Gallery</div>
            <div class="col-sm">About Us</div>
            <div class="col-sm">Contact US</div>

        </div>
        <strong>Welcome To Islami Bank Hospital,Mirpur, Dhaka.</strong>
        <p style="text-align: justify">Islami Bank Hospital Mirpur is a largest and fast growing Hospital in Dhaka. </p>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Center of Excellence</th>
                <th scope="col">Clinical Department</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td> Critical Care</td>
                <td>Anaesthesiology</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>  Mother & Child</td>
                <td> Urology</td>

            </tr>


            </tbody>
        </table>

        <div class="card" style="width: 18rem;">
            <br class="card-body">
                <h5 class="card-title">Contact Us</h5>

                <br class="card-text">Plot No- 31, Main Road -03, Block- D, Section-11,
                    Mirpur Dhaka -1216

                    Hospital TNT Number: 02 – 58 05 05 92-4</br>
                Hospital Serial Number: +8801992 34 66 32- 4</br>
                    Information Number: +8801992 34 66 31

                </p>

            </div>
        </div>

    </div>

@endsection