@extends('layout/template')

@section('pageTitle', 'Eliminar usuario')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Eliminar usuario</h5>
            <div class="card-body">
                <div class="container">
                    <p class="card-text">
                    <div class="alert alert-danger" role="alert">
                        ¿Estás seguro de eliminar al usuario {{ $user->name }} {{ $user->last_name }}?
                    </div>
                    </p>
                </div>
                <div class="container">
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row mt-3 justify-content-md-end">
                            <div class="col-sm-auto">
                                <a href="{{ route('user.index') }}" class="btn btn-danger float-end">
                                    <span class="fas fa-times"></span> Cancelar
                                </a>
                            </div>
                            <div class="col-sm-auto">
                                <button class="btn btn-danger float-end">
                                    <span class="fas fa-trash-alt"></span> Eliminar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
