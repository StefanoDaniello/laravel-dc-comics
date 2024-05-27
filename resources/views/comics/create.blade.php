@extends('layouts.app')
@section('title', 'create')

@section('content')
<section class="container ">
<h1>Create</h1>
    <form action="{{route('comics.store')}}" method="POST">
    <!-- è un token di sicurezza per far 
    in modo che i dati in post arrivano solo da questo form  -->
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="titleHelp" name="title" required>
            <div id="titleHelp" class="form-text">bhoo</div>
         </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="text" class="form-control" id="image" name="image">
         </div>
         <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="text" class="form-control" id="weight" name="weight" required>
         </div>
         <div class="mb-3">
            <label for="cooking_time" class="form-label">Cooking Time</label>
            <input type="text" class="form-control" id="cooking_time"  name="cooking_time" required>
         </div>
         <div class="mb-3">
            <label for="type" class="from-label">Tipo</label>
            <select name="type" id="type" class="form-control" required>
                <option value="">Seleziona</option>
                <option value="1">Comic book</option>
                <option value="2">Secondo</option>
                <option value="3">Contorno</option>
            </select>
         </div>

        <div class="text-center my-3">
            <button type="submit" class="btn btn-danger">annulla</button>
            <button type="submit" class="btn btn-primary">crea</button>
        </div>
        
    </form>
</section>
@endSection