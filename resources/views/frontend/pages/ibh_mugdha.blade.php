@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <img src="{{url('public/frontend/images/mugdhahospital.jpg')}}" class="d-block w-100" width="" alt="">
    <div class="row">
        <div class="col-sm"><a href="">Services</a> </div>
        <div class="col-sm">Consultants</div>
        <div class="col-sm">Committee</div>
        <div class="col-sm">Gallery</div>
        <div class="col-sm">About Us</div>
        <div class="col-sm">Contact US</div>

    </div>
    <strong>Welcome To Islami Bank Hospital,Mugdha, Dhaka.</strong>
    <p style="text-align: justify">Islami Bank Hospital,Mugdha is a largest and fast growing Hospital in Dhaka. </p>

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
        <div class="card-body">
            <h5 class="card-title">Contact Us</h5>

            <p class="card-text">Islami Bank Hospital,Mugdha
                1/24/B,Dokhkin Mugda para,Dhaka-1214
                Phone:+(02) 7274200,7274201
                Mobile:+01724008677, 01771571518

              </p>

        </div>
    </div>

</div>

  @endsection