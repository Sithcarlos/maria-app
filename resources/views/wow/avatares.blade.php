@extends('layouts.wow')
@section('content')
<div class="row">
    <div class="col text-center">
        <h3>Avatares</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>Agregar nuevo avatar</p>
        <form>
            <div class="mb-3">
                <label for="InputNombre1" class="form-label">Nombre del avatar</label>
                <input type="text" class="form-control" id="InputNombre1" aria-describedby="NombreHelp">
                <div id="NombreHelp" class="form-text">We'll never share your Nombre with anyone else.</div>
            </div>
            <div class="mb-3">

                <select class="form-select" aria-label="Default select">
                    <option selected>Open this select menu</option>
                    <option value="1">One - d</option>
                    <option value="2">Two - -</option>
                    <option value="3">Three - -</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col">
        <p>Listado de avatares</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Clase</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Guild</th>
                    <th scope="col">Main</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Propietario</th>
                    <th scope="col">Rango</th>
                    <th scope="col">Raza</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($avatares as $avatar)
                <tr>
                    <td>{{ $avatar->clase }}</td>
                    <td>{{ $avatar->comentario }}</td>
                    <td>{{ $avatar->guild }}</td>
                    <td>{{ $avatar->main }}</td>
                    <td>{{ $avatar->nombre }}</td>
                    <td>{{ $avatar->propietario }}</td>
                    <td>{{ $avatar->rango }}</td>
                    <td>{{ $avatar->raza }}</td>
                </tr>
                @empty
                <tr>
                    <th colspan="8" class="text-center">sin datos aún</th>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>
    <div class="col">

    </div>
</div>
@endsection