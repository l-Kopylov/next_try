@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input name="title" id="txtTitle"
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title') }}">
            @error('title')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" row="3"
                      class="form-control @error('content') is-invalid @enderror"
                      value="{{ old('content') }}"
                      ></textarea>
            @error('content')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <input name="price" id="txtPrice"
                   class="form-control @error('price') is-invalid @enderror"
                   value="{{ old('price') }}">
            @error('price')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection