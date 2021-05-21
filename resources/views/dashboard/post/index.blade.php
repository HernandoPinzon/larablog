@extends('dashboard.master')
@section('content')

<a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">
    Crear
</a>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Creacion</td>
            <td>Actualizacion</td>
            <td>Acciones</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->created_at->format('d-m-Y') }}</td>
                <td>{{ $post->created_at->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('post.show',$post->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Actualizar</a>
                    <button 
                        data-toggle="modal" 
                        data-target="#deleteModal" 
                        data-id="{{ $post->id }}"
                        class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
@endsection