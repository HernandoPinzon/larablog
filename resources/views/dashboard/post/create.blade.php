{{-- Llamamos la vista de la cual herdaremos la estructura --}}
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route('post.store')}}" method="post">
    @csrf
    {{-- fila 1 --}}
    <div class="row">
        <div class="form-group">
            <label for="name">
                <input class="form-control" type="text" name="name" id="name">
            </label>
        </div>
    </div>
    {{-- fila 2 --}}
    <div class="row">
        <label for="description">Contenido</label>
        <textarea class="form-control" name="description" id="descrition" rows="10"></textarea>
    </div>
    {{-- fila 3 --}}
    <div class="row center">
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Publicar</button>
            <button class="btn btn-danger btn-sm">cancelar</button>
        </div>
    </div>
</form>
@endsection