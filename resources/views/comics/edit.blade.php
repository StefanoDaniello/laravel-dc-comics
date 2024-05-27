@extends('layouts.app')
@section('title', $comic->title)

@section('content')
    <h1>{{ $comic->title }}</h1>
    <h2>edit</h2>
@endSection