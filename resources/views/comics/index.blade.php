@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="bg-black">
    <div class="button-blue d-flex justify-content-center align-items-center">
        <h2>CURRENT SERIES</h2>
    </div>
    <div class="container">
        <section class="container mt-4" id="products">
        <form action="{{route('comics.index')}}" method="GET" id="search-form">
        <select name="search" id="search" class="form-control w-25" required>
            <option selected value="">Seleziona</option>
            <option value="">Tutti</option>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
            <option value="other">other</option>
        </select>
        <!-- <button type="submit" class="btn btn-primary mt-3">Cerca</button> -->
        </form>
        <div class="row">
            @foreach ($comics as $comic) 
                <div  class="col-12 col-sm-6 col-md-4 my-3">
                    <div class="card">
                            <img src="{{$comic->thumb}}"  alt="{{$comic->title}}">
                        <div class="card-body">
                            <h6 class="card-title">{{$comic->title}}</h6>
                            <p class="card-text">{{$comic->series}}</p>
                            <p class="card-text">{{$comic->price}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Scopri!</a>
                            <a href="{{route('comics.edit', $comic->id )}}" class="btn btn-primary ms-3">Modifica</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
    
@endsection

<style lang="scss" scoped>
   
   .card{
       height: 700px !important;
       background-color: black;
       color: white;
       img{
        height: 500px;
    }
    }

   .button-blue{
       width: 300px;
       height: 80px;
       color: white;
       background-color: #0282F9;
       border: 2px solid white;
       border-radius: 10px;
       transform: translate(50%, -50%);
   }
</style>