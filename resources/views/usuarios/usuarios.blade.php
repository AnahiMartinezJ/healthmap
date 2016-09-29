@extends('layouts.principal')

@section('content')
<div class="row" style="margin-left:40px; margin-right: 40px;">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h1>Listado de usuarios</h1>
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <a href="/" class="btn btn-info form-control">
                   Regresar al mapa
                </a>
            </div>
        </div>
        <div class="row" style="margin-top:10px; margin-bottom: 30px;">
            <div class="col-md-12">
                <table id="h-tabla-usuarios" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Título</th>
                            <th>Ultima cédula DGP</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            @if($usuario->id != Auth::User()->id)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->apellido_paterno }}</td>
                                    <td>{{ $usuario->apellido_materno }}</td>
                                    <td>{{ $usuario->titulo }}</td>
                                    <td>{{ $usuario->cedula }}</td>
                                    <td>
                                        <span style="display: none;">{{ $usuario->id }}</span> 
                                        @if ($usuario->autorizado == 1)
                                            <a id="h-estado-usuario{{$usuario->id}}" class="h-estado-usuario" style="cursor: pointer;" title="Ver Perfil"><i class="glyphicon glyphicon-check"></i>&nbsp;Perfil Autorizado</a>
                                        @else
                                            <a id="h-estado-usuario{{$usuario->id}}" class="h-estado-usuario" style="cursor: pointer; color: red;" title="Perfil Pendiente"><i class="glyphicon glyphicon-unchecked"></i>&nbsp;Perfil Pendiente</a> 
                                        @endif 
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div style="display: none;" id="h-modal-ver-perfil">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                            <label for="name" class="control-label">Nombre</label>
                            <input id="name" type="text" class="form-control" name="name" value="" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="apellido-paterno" class="control-label">Apellido paterno</label>
                        <input id="apellido-paterno" type="text" class="form-control" name="apellido-paterno" value="" disabled>
                    </div>
                    <div class="col-md-4">
                            <label for="apellido-materno" class="control-label">Apellido materno</label>
                            <input id="apellido-materno" type="text" class="form-control" name="apellido-materno" value="" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="titulo" class="control-label">Título</label>
                        <select id="titulo" class="form-control" name="titulo" value="" disabled>
                            <option value="Dr.">Dr.</option>
                            <option value="Dra.">Dra.</option>
                            <option value="QFB">QFB</option>
                            <option value="Biol.">Biol.</option>
                            <option value="MVZ.">MVZ</option>
                            <option value="Enfermera">Enfermera</option>
                            <option value="MPSS">MPSS</option>
                            <option value="MIP">MIP</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="licenciatura" class="control-label">Licenciatura</label>
                        <select id="licenciatura" class="form-control" name="licenciatura" value="" disabled>
                            <option value="Médico">Médico</option>
                            <option value="Enfermera">Enfermera</option>
                            <option value="Biólogo">Biólogo</option>
                            <option value="Veterinario">Veterinario</option>
                            <option value="Agrónomo">Agrónomo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="especialidad" class="control-label">Especialidad</label>
                        <input id="especialidad" type="text" class="form-control" name="especialidad" value="" disabled>  
                    </div>
                    <div class="col-md-6">
                        <label for="subespecialidad" class="control-label">Sub-Especialidad</label>
                        <input id="subespecialidad" type="text" class="form-control" name="subespecialidad" value="" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="cedula" class="control-label">Última cédula DGP</label>
                        <input id="cedula" type="text" class="form-control" name="cedula" value="" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="institucion-add" class="control-label">Institución de adscripción</label>
                        <input id="institucion-add" type="text" class="form-control" name="institucion-add" value="" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="ultimo-grado" class="control-label">Último grado obtenido</label>
                        <select id="ultimo-grado" class="form-control" name="ultimo-grado" value="" disabled>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Especialidad">Especialidad</option>
                            <option value="Subespecialidad">Subespecialidad</option>
                            <option value="Maestría">Maestría</option>
                            <option value="Doctorado">Doctorado</option>
                            <option value="Post-doc">Post-doc</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha-nacimiento" class="control-label">Fecha de nacimiento</label>
                        <input id="fecha-nacimiento" type="date" class="form-control" name="fecha-nacimiento" value="" disabled>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                            <label for="antiguedad" class="control-label">Antigüedad</label>
                            <input id="antiguedad" type="text" class="form-control" name="antiguedad" value="" disabled>
                    </div>
                    <div class="col-md-6">
                            <label for="email" class="control-label">Correo</label>
                            <input id="email" type="email" class="form-control" name="email" value="" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="jerarquia" class="control-label">Jerarquía deseada en la plataforma</label>
                        @if((Auth::User()->jerarquia == 'Administrador' || Auth::User()->jerarquia == 'Root') && Auth::User()->autorizado == 1)
                            <select id="jerarquia" class="form-control" name="jerarquia">
                                <option value="Usuario moderado">Usuario moderado</option>
                                <option value="Usuario No-moderado">Usuario No-moderado</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        @else
                            <select id="jerarquia" class="form-control" name="jerarquia" disabled>
                                <option value="Usuario moderado">Usuario moderado</option>
                                <option value="Usuario No-moderado">Usuario No-moderado</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="boton-cambiar-jerarquia" class="control-label">&nbsp;</label>
                        @if((Auth::User()->jerarquia == 'Administrador' || Auth::User()->jerarquia == 'Root') && Auth::User()->autorizado == 1)
                            <a id="boton-cambiar-jerarquia" href="#" class="btn btn-danger form-control" name="boton-cambiar-jerarquia">Cambiar jerarquía</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>         
</div>
@endsection

@section('scripts')
<script src="./js/usuarios.js"></script>
@endsection
