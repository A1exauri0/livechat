@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan Pérez</td>
                <td>juan.perez@example.com</td>
                <td>
                    <select class="form-select" aria-label="Rol">
                        <option value="admin" selected>Admin</option>
                        <option value="soporte">Soporte</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </td>
                <td>
                    <button class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>María Gómez</td>
                <td>maria.gomez@example.com</td>
                <td>
                    <select class="form-select" aria-label="Rol">
                        <option value="admin">Admin</option>
                        <option value="soporte" selected>Soporte</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </td>
                <td>
                    <button class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Carlos López</td>
                <td>carlos.lopez@example.com</td>
                <td>
                    <select class="form-select" aria-label="Rol">
                        <option value="admin">Admin</option>
                        <option value="soporte">Soporte</option>
                        <option value="cliente" selected>Cliente</option>
                    </select>
                </td>
                <td>
                    <button class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
