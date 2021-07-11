@extends('layout.app')

@section('title','Comic | DC'.''.$comic['series'])

@section('content')

<main>
    <div class="blue_line">
        <div class="container">
            <div class="">
                <img src="{{$comic['thumb']}}" class="" alt="...">
            </div>              
    
        </div>

    </div>
</main>
@endsection