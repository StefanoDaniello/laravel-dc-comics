@extends('layouts.app')
@section('title', $comic->title)

@section('content')
<section class="container">
    <h1 class="text-center">{{ $comic->title }}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="titleHelp" name="title"
             required value="{{$comic->title}}">
            <div id="titleHelp" class="form-text">Inserisci titolo</div>
         </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                {{$comic->description}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">image</label>
            <input type="text" class="form-control" id="image" name="thumb" value="{{$comic->thumb}}">
         </div>
         <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="weight" name="price" required value="{{$comic->price}}">
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="cooking_time"  name="series" required value="{{$comic->series}}">
         </div>
         <div class="mb-3">
            <label for="scale_date" class="form-label">Scale date</label>
            <input type="date" class="form-control" id="cooking_time"  name="sale_date" required value="{{$comic->sale_date}}">
         </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-control" id="type"  name="type" value="{{$comic->type}}" required>
              <option  value="corta" {{$comic->type === 'comic book' ? 'selected' : ''}}>comic book</option>
              <option value="lunga"  {{$comic->type === 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
              <option value="cortissima" {{$comic->type === 'other' ? 'selected' : ''}}>other</option>
            </select>
          </div>
        <div class="container text-center my-5">
          <button type="submit" class="btn btn-primary mx-4">Modifica</button>
          <button type="reset" class="btn btn-danger">
            <a href="{{route('comics.index')}}" class="text-white">Annulla</a>
          </button>
        </div>
        
    </form>
</section>
    
@endSection