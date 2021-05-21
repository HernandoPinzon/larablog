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
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->categoty_id }}</td>
                
                <td>
                    <a href="{{ route('category.show',$category->id) }}" class="btn btn-primary">Ver</a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ raute(category.create)}}" class="btn btn-succes mt-3 mb-3">
    crear
</a>

{{$categories->links()}}

@endsection