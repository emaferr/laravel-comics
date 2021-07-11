@extends('layout.app')

@section('title','Comics | DC')

@section('content')

    <div class="comics_container pt-5">
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
        <div class="text-center pb-3">
            <button class="load_more text-white font-weight-bold">LOAD MORE</button>
        </div>
    </div>
    <div class="main_list">
        @foreach ($mainList as $item)
        <img src="{{$item['img']}}" alt="">
        <span class="pr-5 mr-4 pl-2">{{$item['name']}}</span>    
        @endforeach
    </div>
    
@endsection