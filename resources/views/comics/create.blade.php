@extends('layouts.app')
@section('title', 'create')

@section('content')
    <section class="container">
        <h1>Create</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            <!-- è un token di sicurezza per far
            in modo che i dati in post arrivano solo da questo form -->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label ">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="titleHelp" name="title"
                    value="{{old('title')}}">
                    @if($errors->has('title'))
                        <div class ="alert alert-danger">{{$errors->first('title')}}</div>
                    @endif
                <div id="titleHelp" class="form-text">Inserisci titolo</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label ">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                @if($errors->has('description'))
                    <div class ="alert alert-danger">{{$errors->first('description')}}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label ">image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="image" name="thumb" value="{{old('thumb')}}">
                @if($errors->has('thumb'))
                    <div class ="alert alert-danger">{{$errors->first('thumb')}}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="price" class="form-label ">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="weight" name="price" value="{{old('price')}}">
                @if($errors->has('price'))
                    <div class ="alert alert-danger">{{$errors->first('price')}}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="series" class="form-label ">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="cooking_time" name="series" value="{{old('series')}}">
                @if($errors->has('series'))
                    <div class ="alert alert-danger">{{$errors->first('series')}}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="scale_date" class="form-label ">Scale date</label>
                <input type="date" class="form-control @error('scale_date') is-invalid @enderror" id="cooking_time" name="sale_date" value="{{old('sale_date')}}">
                @if($errors->has('scale_date'))
                    <div class ="alert alert-danger">{{$errors->first('scale_date')}}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="type" class="from-label">Tipo</label>
                <select name="type" id="type" class="form-control  @error('type') is-invalid @enderror" value="{{old('type')}}">
                    <option value="">Seleziona</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">graphic novel</option>
                    <option value="other">Other</option>
                </select>
                @if($errors->has('type'))
                    <div class ="alert alert-danger">{{$errors->first('type')}}</div>
                @endif
            </div>

            <div class="text-center my-3">
                <button type="submit" class="btn btn-danger"><a href="{{route('comics.index')}}" class="text-white">Annulla</a></button>
                <button type="submit" class="btn btn-primary">crea</button>
            </div>
        </form>
    </section>
@endSection
