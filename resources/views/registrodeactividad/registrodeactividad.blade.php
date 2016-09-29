@extends('layouts.principal')

@section('content')

<div class="row" style="margin-left:40px; margin-right: 40px;">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h1>Registro de actividad</h1>
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <a href="/" class="btn btn-info form-control">
                   Ver mapa
                </a>
            </div>
        </div>
        <div class="row" style="margin-top:10px; margin-bottom: 30px;">
            <div class="col-md-12">
                <table id="h-tabla-log" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Realiz&oacute;</th>
                            <th>El&nbsp;d&iacute;a</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrodeactividad as $reg)
                            <tr>
                                <td>{{ $reg->name}}&nbsp{{$reg->apellido_paterno}}&nbsp{{$reg->apellido_materno}}</td>
                                <td>{{ $reg->accion}}</td>
                                <td>{{  date('F - d - Y', strtotime($reg->created_at))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="./js/regact.js"></script>
@endsection