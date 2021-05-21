@extends('dashboard.master')
@section('content')




<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Categoria</td>
            
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
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route(category.create)}}" class="btn btn-succes mt-3 mb-3">
    crear
</a>

{{$categories->links()}}

@endsection