@extends('layouts.principal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <h1>Inicio de sesión</h1>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<div class="row" style="margin-left:40px; margin-right: 40px;">
    <div class="col-md-12">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Correo</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Recordar datos
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">
                            Iniciar sesión
                        </button>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            ¿Has olvidado tu contraseña?
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

