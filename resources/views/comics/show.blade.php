@extends('layout.app')

@section('title','Comics | DC')

@section('content')

<main>
    <h1>Fumetto singolo</h1>
    <div class="comics_container py-5">
        <div class="container">
            <div class="comics row">
            <div class="col-2 py-3" style="height: max-content;">
                <div class="crop">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                </div>
                <div id="card_body">
                  <h6 class="card-text text-white">{{$comic['series']}}</h6>
                </div>
            </div>
            </div>                
        </div>
    </div>
</main>
@endsection