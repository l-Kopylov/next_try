@extends('layouts.base')
@section('title', $bb->title)
@section('main')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }} руб.</p>
    <p><a href="{{ route('index') }}">На перечень объявлений</a></p>
@endsection('main')