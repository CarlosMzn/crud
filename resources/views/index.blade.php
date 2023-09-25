@extends('layout/template')

@section('pageTitle', 'CRUD')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3 justify-content-md-end">
                <div class="col-sm-2 text-center float-end">
                    <p>
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            Agregar usuario <span class="fas fa-user-plus"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
                <table id="crud-table" class="table table-bordered  table-hover" style="width:100%">
                    <thead class="table-light">
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de nacimiento</th>
                        <th>Género</th>
                        <th>Correo electrónico </th>
                        <th>Teléfono</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->gender == 'M' ? 'Hombre' : 'Mujer' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->number }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <form action="{{ route('user.edit', $user->id) }}" method="GET">
                                                <button class="btn btn-primary btn-sm-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Editar usuario">
                                                    <span class="fas fa-user-edit"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <form action="{{ route('user.show', $user->id) }}" method="GET">
                                                <button class="btn btn-danger btn-sm-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Eliminar usuario">
                                                    <span class="fas fa-user-times"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
