@extends('layout.app')

@section('title','Comics | DC')

@section('content')

<main>
    <div class="comics_container py-5">
        <div class="container">
            <div class="comics row">
            @foreach ($comics as $comic)
            <div class="col-2" style="height: max-content;">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div id="card_body">
                  <h6 class="card-text text-white">{{$comic['series']}}</h6>
                </div>
            </div>
            @endforeach
            </div>                
        </div>
    </div>
</main>
@endsection