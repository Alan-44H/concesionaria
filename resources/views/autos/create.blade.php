@extends('layout/template')

@section('title', 'Registrar Auto | Cochera')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Registrar auto</h2>

        @if ($errors->any())

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


        @endif

        <form action="{{ url('autos') }}" method="post">

        @csrf

            <div class="mb-3 row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="modelo" id="modelo" value="{{old('modelo') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="placa" class="col-sm-2 col-form-label">Placa:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="placa" id="placa" value="{{old('placa') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="motor" class="col-sm-2 col-form-label">Motor:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="motor" id="motor" value="{{old('motor') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="año_fabricasion" class="col-sm-2 col-form-label">Año de fabricasion:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="año_fabricasion" id="año_fabricasion" value="{{old('año_fabricasion') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" id="email" value="{{old('email') }}" required>
                </div>
            </div>

            <a href="{{ url('autos')}}" class="btn btn-secondary">Regresar</a>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
