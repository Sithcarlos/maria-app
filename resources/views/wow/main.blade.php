@extends('layouts.wow')
@section('content')
    <div class="row">
        <div class="col text-center">
            <h3>datos</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Listado de usuarios</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <th col="2">no data</th>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
        <div class="col">
            <p>Listado de guilds</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">GM</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($guilds as $guild)
                        <tr>
                            <td>{{ $guild->gm }}</td>
                            <td>{{ $guild->nombre }}</td>
                        </tr>
                    @empty
                        <tr>
                            <th col="2">no data</th>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
        <div class="col">
            <p>Listado de avatares</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Propietario</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($avatares as $avatar)
                        <tr>
                            <td>{{ $avatar->nombre }}</td>
                            <td>{{ $avatar->clase }}</td>
                            <td>{{ $avatar->propietario }}</td>
                        </tr>
                    @empty
                        <tr>
                            <th col="2">no data</th>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>
@endsection
