@extends('dashboard.master')
@section('content')
    <h6>Editar Publicacion</h6>

    <form action="{{route('post.update')}}" method="POST" >
        @include('dashboard.post.form')
</form>

@endsection