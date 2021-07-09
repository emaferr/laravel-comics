@extends('layout.app')

@section('title','Comics | DC')

@section('content')

<main>
    <div class="comics_container py-5">
        <div class="container">
            <h2 class="int text-white">CURRENT SERIES</h2>
            <div class="comics row">
            @foreach ($comics as $index => $comic)
            <div class="col-2 py-3" style="height: max-content;">
                <a href="{{route('comic',['id' => $index])}}">
                    <div class="crop">
                        <img src="{{$comic['thumb']}}" class="card-img-top rounded-0" alt="...">
                    </div>
                    <div id="card_body">
                      <h6 class="card-text text-white">{{$comic['series']}}</h6>
                    </div>
                </a>
            </div>
            @endforeach
            </div>                
        </div>
    </div>
</main>
@endsection