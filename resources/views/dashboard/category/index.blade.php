@extends('dashboard.master')
@section('content')

<a class="btn btn-success mt-3 mb-3" href="{{ route('category.create') }}">
    Crear
</a>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Acciones</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('category.show',$category->id) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary">Actualizar</a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}
@endsection