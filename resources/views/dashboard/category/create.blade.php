@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route('category.store') }}" method="post">
    @csrf

    {{--form:post--}}
    <div class="row">
        <div class="form-group">
            <label for="name">Categoria</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
    </div>

    <div class="row">
        <div class="row form-group">
            <label for="description">Descripcion</label>
            <textarea rows="10" class="form-control" name="description" id="description">
        </div>
    </div>

    <div class="row center">
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Publicar</button>
            <button class="btn btn-danger brn-sm">Cancelar</button>
        </div>
    </div>
</form>
@endsection