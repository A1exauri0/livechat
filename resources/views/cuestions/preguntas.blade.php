@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Preguntas</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Categoría</th>
                <th>Vistas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>¿Cómo puedo cambiar mi contraseña?</td>
                <td>Para cambiar tu contraseña, ve a la sección de perfil y selecciona "Cambiar contraseña".</td>
                <td>
                    <select class="form-select" aria-label="Categoría">
                        <option value="soporte">Soporte</option>
                        <option value="general" selected>General</option>
                        <option value="técnico">Técnico</option>
                    </select>
                </td>
                <td>25</td>
                <td>
                    <button class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>¿Cómo crear una cuenta?</td>
                <td>Para crear una cuenta, dirígete al formulario de registro y completa los datos solicitados.</td>
                <td>
                    <select class="form-select" aria-label="Categoría">
                        <option value="soporte">Soporte</option>
                        <option value="general" selected>General</option>
                        <option value="técnico">Técnico</option>
                    </select>
                </td>
                <td>18</td>
                <td>
                    <button class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>¿Cómo puedo resetear mi contraseña?</td>
                <td>Si olvidaste tu contraseña, puedes hacer clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión.</td>
                <td>
                    <select class="form-select" aria-label="Categoría">
                        <option value="soporte" selected>Soporte</option>
                        <option value="general">General</option>
                        <option value="técnico">Técnico</option>
                    </select>
                </td>
                <td>35</td>
                <td>
                    <button class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
