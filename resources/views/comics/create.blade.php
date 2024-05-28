@extends('layouts.app')
@section('title', 'create')

@section('content')
<section class="container">
    <h1>Create</h1>
    <form action="{{route('comics.store')}}" method="POST">
    <!-- è un token di sicurezza per far 
    in modo che i dati in post arrivano solo da questo form -->
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="titleHelp" name="title" required>
            <div id="titleHelp" class="form-text">Inserisci titolo</div>
         </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">image</label>
            <input type="text" class="form-control" id="image" name="thumb">
         </div>
         <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="weight" name="price" required>
         </div>
         <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="cooking_time"  name="series" required>
         </div>
         <div class="mb-3">
            <label for="scale_date" class="form-label">Scale date</label>
            <input type="date" class="form-control" id="cooking_time"  name="sale_date" required>
         </div>
         <div class="mb-3">
            <label for="type" class="from-label">Tipo</label>
            <select name="type" id="type" class="form-control" required>
                <option value="">Seleziona</option>
                <option value="comic book">Comic book</option>
                <option value="graphic novel">graphic novel</option>
                <option value="other">Other</option>
            </select>
         </div>

        <div class="text-center my-3">
            <button type="submit" class="btn btn-danger">annulla</button>
            <button type="submit" class="btn btn-primary">crea</button>
        </div>
    </form>
</section>
@endSection