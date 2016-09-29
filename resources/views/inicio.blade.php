@extends('layouts.principal')

@section('estilos')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="map-container" style="height: 400px;">
            </div>
            <a href="{{ url('/login') }}" class="btn btn-mini btn-primary" type="button" style="position:absolute; top: 10px; left: 835px; background-color: rgba(0,0,255,.3);">Iniciar sesión</a>
            <a href="{{ url('/register') }}" class="btn btn-mini btn-primary" type="button" style="position:absolute; top: 10px; left: 950px; background-color: rgba(0,0,255,.3);">Registro</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="./js/mapa.js"></script>    
@endsection