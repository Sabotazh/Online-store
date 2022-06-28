@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded" alt="Game image">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded"  alt="Safe image">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded"  alt="Submarine image">
        </div>
    </div>
@endsection