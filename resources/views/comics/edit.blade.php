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
            <input type="text" class="form-control  @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="titleHelp" name="title"
              value="{{$comic->title}}">

              {{-- con funzione no request folder --}}
              {{-- @if($errors->has('title'))
                <div class ="alert alert-danger">{{$errors->first('title')}}</div>
             </div>
            @endif --}}
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="titleHelp" class="form-text">Inserisci titolo</div>
         </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">
                {{$comic->description}}
            </textarea>
            {{-- @if($errors->has('description'))
                <div class ="alert alert-danger">{{$errors->first('description')}}</div>
            @endif --}}
            @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="image" name="thumb" value="{{$comic->thumb}}">
            {{-- @if($errors->has('thumb'))
                <div class ="alert alert-danger">{{$errors->first('thumb')}}</div>
            @endif --}}
            @error('thumb')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
         <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="weight" name="price"  value="{{$comic->price}}">
            {{-- @if($errors->has('price'))
                <div class ="alert alert-danger">{{$errors->first('price')}}</div>
            @endif --}}
            @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="cooking_time"  name="series"  value="{{$comic->series}}">
            {{-- @if($errors->has('series'))
                <div class ="alert alert-danger">{{$errors->first('series')}}</div>
            @endif --}}
            @error('series')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
         <div class="mb-3">
            <label for="scale_date" class="form-label">Scale date</label>
            <input type="date" class="form-control @error('scale_date') is-invalid @enderror" id="cooking_time"  name="sale_date"  value="{{$comic->sale_date}}">
            {{-- @if($errors->has('scale_date'))
                <div class ="alert alert-danger">{{$errors->first('scale_date')}}</div>
            @endif --}}
            @error('scale_date')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-control @error('type') is-invalid @enderror" id="type"  name="type" value="{{$comic->type}}" >
              <option  value="comic book" {{$comic->type === 'comic book' ? 'selected' : ''}}>comic book</option>
              <option value="graphic novel"  {{$comic->type === 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
              <option value="other" {{$comic->type === 'other' ? 'selected' : ''}}>other</option>
            </select>
            {{-- @if($errors->has('type'))
                <div class ="alert alert-danger">{{$errors->first('type')}}</div>
            @endif --}}
            @error('type')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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