@extends('layouts.app')
@section('title', $comic->title)

@section('content')
<section class="container bg-white mt-4 ">
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="row my-3">
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

            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Modifica</a>

            {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="mx-3">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina" class="btn btn-danger">
            </form> --}}

            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi davvero eliminare questo prodotto?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{$comic->title}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="mx-3">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimina" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endSection