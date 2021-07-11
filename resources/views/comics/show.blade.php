@extends('layout.app')

@section('title','Comic | DC'.' '.$comic['series'])

@section('content')

<div class="comic_main">
    <div class="blue_line">
        <div class="container md_cnt">
            <div class="">
                <img src="{{$comic['thumb']}}" class="" alt="...">
            </div>              
        </div>
    </div>
    <div class="comic py-5">
        <div class="container md_cnt row">
            <div class="details col-7 px-0">
                <h3 class="text-uppercase font-weight-bold">{{$comic['title']}}</h3>
                <div class="green_bar d-flex row my-3">
                    <div class="col-8 d-flex justify-content-between py-2">
                        <span class="text-white-50">U.S Price: <strong class="text-white">{{' '.$comic['price']}}</strong></span>
                        <span class="text-white-50">AVAILABLE</span>
                    </div>
                    <div class="col text-center py-2">
                        <span class="text-white">Check Availability&nbsp; <i style="font-size: .7rem" class="fas fa-caret-down"></i></span>
                    </div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="col adv">
                <span>ADVERTISEMENT</span>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection