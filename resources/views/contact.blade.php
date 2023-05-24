@extends('templates/temp')

@section('title', 'home')

@section('content')
<div class="min-vh-100">
    <div class="row m-2">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-white d-flex align-items-center" style="background-color:gray">
            <h1 class="p-0 m-0">Contact</h1>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Store Address :</h2>
            <p>Jalan Pembangunan Raya,<br>
                Kompleks Pertokoan Emeral Blok III/12 <br>
                Bintaro, Tangeran Selatan <br>
                Indonesia
            </p>
            <h2>Open Daily :</h2>
            <p>08.00-20.00</p>
            <h2>Contact :</h2>
            <p>Phone : 021-08899776655 <br>
            Email : happybookstore@happy.com
            </p>
        </div>
        <div class="col-md-3"></div>
        </div>
</div>
@endsection
