@extends('dashboard.master')
@section('content')
    <h6>Crear Publicacion</h6>
    <form action="{{ route('post.store') }}" method="POST"> 
            @include('dashboard.category._form')
    </form>
@endsection