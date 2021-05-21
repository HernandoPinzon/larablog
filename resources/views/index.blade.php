@extends('dashboard.master')
@section('content')
<a href="{{ route('post.create') }}" class="btn btn-succes mt-3 mb-3">
    Crear
</a>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Categoria</td>
            <td>Estado ublicacion</td>
            <td>Creacion</td>
            <td>Actualizacion</td>
            <td>Acciones</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->categoty_id }}</td>
                <td>{{ $post->posted }}</td>
                <td>{{ $post->created_at->format('d-m-Y') }}</td>
                <td>{{ $post->created_at->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('post.show',$post->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Actualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
