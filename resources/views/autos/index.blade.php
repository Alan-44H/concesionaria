@extends('layout/template')

@section('title', 'Autos | Cochera')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de autos</h2>

        <a href="{{ url('autos/create') }} " class="btn btn-primary btn-sm">Nuevo registro</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Motor</th>
                    <th>Año de fabricación</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($autos as $auto)
                <tr>
                    <td>{{ $auto->id }}</td>
                    <td>{{ $auto->modelo }}</td>
                    <td>{{ $auto->placa }}</td>
                    <td>{{ $auto->motor }}</td>
                    <td>{{ $auto->año_fabricasion }}</td>
                    <td>{{ $auto->email }}</td>
                    <td><a href="{{ url('autos/'.$auto->id.'/edit' ) }}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ url('autos/'.$auto->id) }}" method="post">
                            @method("DELETE")
                            @csrf 
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</main>