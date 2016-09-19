@extends('layouts.principal')

@section('content')
<div class="row" style="margin-left:40px; margin-right: 40px;">
    <div class="col-md-12">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">{{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <h1>Registro de nuevos usuarios</h1>
                </div>
                <div class="col-md-4" style="margin-top: 20px;">
                    <a href="/" class="btn btn-info form-control">
                       Cancelar y regresar al mapa
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Nombre</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="{{ $errors->has('apellido-paterno') ? ' has-error' : '' }}">
                        <label for="apellido-paterno" class="control-label">Apellido paterno</label>
                        <input id="apellido-paterno" type="text" class="form-control" name="apellido-paterno" value="{{ old('apellido-paterno') }}" required>
                        @if ($errors->has('apellido-paterno'))
                            <span class="help-block">
                                <strong>{{ $errors->first('apellido-paterno') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="{{ $errors->has('apellido-materno') ? ' has-error' : '' }}">
                        <label for="apellido-materno" class="control-label">Apellido materno</label>
                        <input id="apellido-materno" type="text" class="form-control" name="apellido-materno" value="{{ old('apellido-materno') }}" required>
                        @if ($errors->has('apellido-materno'))
                            <span class="help-block">
                                <strong>{{ $errors->first('apellido-materno') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="titulo" class="control-label">Título</label>
                    <select id="titulo" class="form-control" name="titulo" value="{{old('titulo')}}">
                        <option value="Dr." @if (old('titulo') == 'Dr.') selected="selected" @endif>Dr.</option>
                        <option value="Dra." @if (old('titulo') == 'Dra.') selected="selected" @endif>Dra.</option>
                        <option value="QFB" @if (old('titulo') == 'QFB') selected="selected" @endif>QFB</option>
                        <option value="Biol." @if (old('titulo') == 'Biol.') selected="selected" @endif>Biol.</option>
                        <option value="MVZ." @if (old('titulo') == 'MVZ.') selected="selected" @endif>MVZ</option>
                        <option value="Enfermera" @if (old('titulo') == 'Enfermera') selected="selected" @endif>Enfermera</option>
                        <option value="MPSS" @if (old('titulo') == 'MPSS') selected="selected" @endif>MPSS</option>
                        <option value="MIP" @if (old('titulo') == 'MIP') selected="selected" @endif>MIP</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="licenciatura" class="control-label">Licenciatura</label>
                    <select id="licenciatura" class="form-control" name="licenciatura" value="{{old('licenciatura')}}">
                        <option value="Médico" @if (old('licenciatura') == 'Médico') selected="selected" @endif>Médico</option>
                        <option value="Enfermera" @if (old('licenciatura') == 'Enfermera') selected="selected" @endif>Enfermera</option>
                        <option value="Biólogo" @if (old('licenciatura') == 'Biólogo') selected="selected" @endif>Biólogo</option>
                        <option value="Veterinario" @if (old('licenciatura') == 'Veterinario') selected="selected" @endif>Veterinario</option>
                        <option value="Agrónomo" @if (old('licenciatura') == 'Agrónomo') selected="selected" @endif>Agrónomo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="{{ $errors->has('especialidad') ? ' has-error' : '' }}">
                        <label for="especialidad" class="control-label">Especialidad</label>
                        <input id="especialidad" type="text" class="form-control" name="especialidad" value="{{ old('especialidad') }}" required>
                        @if ($errors->has('especialidad'))
                            <span class="help-block">
                                <strong>{{ $errors->first('especialidad') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="{{ $errors->has('subespecialidad') ? ' has-error' : '' }}">
                        <label for="subespecialidad" class="control-label">Sub-Especialidad</label>
                        <input id="subespecialidad" type="text" class="form-control" name="subespecialidad" value="{{ old('subespecialidad') }}" required>
                        @if ($errors->has('subespecialidad'))
                            <span class="help-block">
                                <strong>{{ $errors->first('subespecialidad') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="{{ $errors->has('cedula') ? ' has-error' : '' }}">
                        <label for="cedula" class="control-label">Última cédula DGP</label>
                        <input id="cedula" type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" required>
                        @if ($errors->has('cedula'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cedula') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="{{ $errors->has('institucion-add') ? ' has-error' : '' }}">
                        <label for="institucion-add" class="control-label">Institución de adscripción</label>
                        <input id="institucion-add" type="text" class="form-control" name="institucion-add" value="{{ old('institucion-add') }}" required>
                        @if ($errors->has('institucion-add'))
                            <span class="help-block">
                                <strong>{{ $errors->first('institucion-add') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="ultimo-grado" class="control-label">Último grado obtenido</label>
                    <select id="ultimo-grado" class="form-control" name="ultimo-grado" value="{{old('ultimo-grado')}}">
                        <option value="Licenciatura" @if (old('ultimo-grado') == 'Licenciatura') selected="selected" @endif>Licenciatura</option>
                        <option value="Especialidad" @if (old('ultimo-grado') == 'Especialidad') selected="selected" @endif>Especialidad</option>
                        <option value="Subespecialidad" @if (old('ultimo-grado') == 'Subespecialidad') selected="selected" @endif>Subespecialidad</option>
                        <option value="Maestría" @if (old('ultimo-grado') == 'Maestría') selected="selected" @endif>Maestría</option>
                        <option value="Doctorado" @if (old('ultimo-grado') == 'Doctorado') selected="selected" @endif>Doctorado</option>
                        <option value="Post-doc" @if (old('ultimo-grado') == 'Post-doc') selected="selected" @endif>Post-doc</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="jerarquia" class="control-label">Jerarquía deseada en la plataforma</label>
                    <select id="jerarquia" class="form-control" name="jerarquia" value="{{old('jerarquia')}}">
                        <option value="Usuario moderado" @if (old('jerarquia') == 'Usuario moderado') selected="selected" @endif>Usuario moderado</option>
                        <option value="Usuario No-moderado" @if (old('jerarquia') == 'Usuario No-moderado') selected="selected" @endif>Usuario No-moderado</option>
                        <option value="Administrador" @if (old('jerarquia') == 'Administrador') selected="selected" @endif>Administrador</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="{{ $errors->has('fecha-nacimiento') ? ' has-error' : '' }}">
                        <label for="fecha-nacimiento" class="control-label">Fecha de nacimiento</label>
                        <input id="fecha-nacimiento" type="date" class="form-control" name="fecha-nacimiento" value="{{ old('fecha-nacimiento') }}" required>
                        @if ($errors->has('fecha-nacimiento'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fecha-nacimiento') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="{{ $errors->has('antiguedad') ? ' has-error' : '' }}">
                        <label for="antiguedad" class="control-label">Antigüedad</label>
                        <input id="antiguedad" type="text" class="form-control" name="antiguedad" value="{{ old('antiguedad') }}" required>
                        @if ($errors->has('antiguedad'))
                            <span class="help-block">
                                <strong>{{ $errors->first('antiguedad') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Correo</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="control-label">Confirmación de contraseña</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                   <button type="submit" class="btn btn-primary form-control">
                        Registrar
                    </button> 
                </div>
                <div class="col-md-4">
                    <a href="/" class="btn btn-info form-control">
                        Cancelar y regresar al mapa
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script src="./js/register.js"></script>  
@endsection
