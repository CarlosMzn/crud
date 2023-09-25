@extends('layout/template')

@section('pageTitle', 'Actualizar usuario')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Actualizar usuario</h5>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Nombre</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ $user->name }}" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                placeholder="Nombre (Agregar solo letras)" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Apellido</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="last_name" name="last_name" class="form-control"
                                value="{{ $user->last_name }}" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                placeholder="Apellido (Agregar solo letras)" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Fecha de nacimiento</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="date" id="birthday" name="birthday" class="form-control" min="1900-01-01" max="{{ date('Y-m-d') }}" required
                                value="{{ $user->birthday }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Género</label>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="gender" name="gender"
                                required>
                                <option value="M" {{ $user->gender == 'M' ? 'selected' : '' }}>Hombre</option>
                                <option value="F" {{ $user->gender == 'F' ? 'selected' : '' }}>Mujer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Correo electrónico</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ $user->email }}" placeholder="Correo electrónico" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Número de teléfono</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="number" name="number" class="form-control" minlength="7"
                                maxlength="10" value="{{ $user->number }}" pattern="[0-9]{10}"
                                placeholder="Número de teléfono (Solo números)" required>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-md-end">
                        <div class="col-sm-auto">
                            <a href="{{ route('user.index') }}" class="btn btn-danger float-end">
                                <span class="fas fa-times"></span> Cancelar
                            </a>
                        </div>
                        <div class="col-sm-auto">
                            <button class="btn btn-primary float-end"><span class="fas fa-save"></span> Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
