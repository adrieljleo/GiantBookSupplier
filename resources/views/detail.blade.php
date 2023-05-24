@extends('templates/temp')

@section('title', 'home')

@section('content')
<div class="min-vh-100">
    <div class="row m-2">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-white d-flex align-items-center" style="background-color:gray">
            <h1 class="p-0 m-0">Book Detail</h1>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <img src="{{ asset('CoverBook/'.$book->image.'.jpg') }}" class="card-img-top" alt="book Image">
            <div class="card-body">
                <h5 class="card-title">Title : {{ $book->title }}</h5>
                <br>
                <p class="card-text">Author : {{ $book->author }}</p>
                <p class="card-text">Publisher : {{ $book->publisher->name }}</p>
                <p>Synopsis:</p>
                <p class="card-text">{{ $book->synopsis }}</p>
            </div>
        </div>
        <div class="col-md-3"></div>
        </div>
</div>
@endsection