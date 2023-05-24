@extends('templates/temp')

@section('title', 'home')

@section('content')
<div class="min-vh-100">
    <div class="row m-2">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-white d-flex align-items-center" style="background-color:gray">
            <h1 class="p-0 m-0">Book List</h1>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @php $count = 0; @endphp
            @foreach($books as $book)
                @if($count % 4 === 0)
                <div class="row">
                @endif
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="{{ asset('CoverBook/'.$book->image.'.jpg') }}" class="card-img-top" alt="book Image" style="height:350px;width:100%">
                        <div class="card-body" style="height:200px;">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p>by</p>
                        <p class="card-text">{{ $book->author }}</p>
                        <a href="{{  route('detail', $book->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @if($count % 4 === 0 || $loop->last)
                </div>
                @endif
            @endforeach
        </div>
        <div class="col-md-2"></div>
        </div>
</div>
@endsection
