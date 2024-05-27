@extends('layouts.app')
@section('title', $comic->title)

@section('content')
<section class="container bg-white mt-4 ">
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4 my-3" >
            <img src="{{$comic->thumb}}" class="img-fluid" alt="{{$comic->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$comic->description!!}</p>
            <h6>
                Tipo: {{$comic->type}}
            </h6>
            <h6>
                Prezzo: {{$comic->price}}
            </h6>
            <h6>
                Data: {{$comic->sale_date}}
            </h6>
            <h6>
                Serie: {{$comic->series}}
            </h6>
        </div>
    </div>
</section>
@endSection