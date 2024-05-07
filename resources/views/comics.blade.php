@extends('layouts.app')

@section('content')

<div class="container p-5">
    <h1>Comics</h1>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection