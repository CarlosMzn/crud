@extends('layout/template')

@section('pageTitle', 'Agregar un nuevo usuario')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Actualizar usuario</h5>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Nombre</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" placeholder="Nombre (Agregar solo letras)" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Apellido</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="last_name" name="last_name" class="form-control"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" placeholder="Apellido (Agregar solo letras)" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Fecha de nacimiento</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="date" id="birthday" name="birthday" class="form-control" min="1900-01-01" max="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Género</label>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="gender" name="gender"
                                required>
                                <option value="M">Hombre</option>
                                <option value="F">Mujer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Correo electrónico</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Correo electrónico" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">
                            <label>Número de teléfono</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="number" name="number" class="form-control" minlength="7"
                                maxlength="10" pattern="[0-9]{10}"
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
