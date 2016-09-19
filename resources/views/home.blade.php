@extends('layouts.principal')

@section('estilos')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="map-container" style="height: 450px;"></div>
            @if (Auth::guest())
                <a href="{{ url('/login') }}" style="position:absolute; top: 10px; left: 880px; color: black; background-color: rgba(255, 255, 255, 1);">Iniciar sesión</a>
                <a href="{{ url('/register') }}"  style="position:absolute; top: 10px; left: 975px; color: black; background-color: rgba(255, 255, 255, 1);">Registro</a>
            @else
                <li class="dropdown" style="list-style-type:none; position:absolute; top: 10px; left: 880px; background-color: rgba(255, 255, 255, 1);">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black;">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/perfil') }}">
                                Mi perfil
                            </a>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            <div class="dropdown" style="position:absolute; top: 10px; left: 25px;">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    MENÚ&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-align-justify"></span>
                </button>
                <ul class="dropdown-menu" role="menu" style="background-color: rgba(255, 255, 255, 1);">
                    <li><a href="usuarios">Listado de usuarios</a></li>
                    <li><a href="nuevo_caso">Reportar nuevo caso</a></li>
                    <li><a href="origen">Posible origen del virus</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="./js/mapa.js"></script>    
@endsection
