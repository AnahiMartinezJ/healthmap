@extends('layouts.principal')

@section('content')
<div class="row" style="margin-left:40px; margin-right: 40px;">
	<div class="col-md-12">
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/casos') }}">{{ csrf_field() }}
			<div class="row">
				<div class="col-md-8">
					<h1>Reportar un caso</h1>
				</div>
				<div class="col-md-4" style="margin-top: 20px;">
					<a href="/" class="btn btn-info form-control">
						Ver mapa
					</a>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">Resumen</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row"> 
								<div class="col-md-8">
									<div class="{{ $errors->has('titulo') ? ' has-error' : '' }}">
										<label for="titulo" class="control-label">T&iacutetulo del reporte</label>
										<input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>
										@if ($errors->has('titulo'))
										<span class="help-block">
											<strong>{{ $errors->first('titulo') }}</strong>
										</span>
										@endif
									</div>				
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('descripcion') ? ' has-error' : '' }}">
										<label for="descripcion" class="control-label">Descripci&oacuten</label>
										<textarea class="form-control" value="{{ old('descripcion') }}" name="descripcion" rows="2" id="descripcion" required autofocus ></textarea>
										@if ($errors->has('descripcion'))
										<span class="help-block">
											<strong>{{ $errors->first('descripcion') }}</strong>
										</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="responsable" class="control-label">Responsable de reporte</label>
									<input id="responsable" type="text" class="form-control" name="responsable" value="{{Auth::user()->titulo}} {{ Auth::user()->name }} {{ Auth::user()->apellido_paterno }} {{ Auth::user()->apellido_materno}}" required autofocus disabled>
									
									<!--@if ($errors->has('responsable'))
									<span class="help-block">
										<strong>{{ $errors->first('responsable') }}</strong>
									</span>
									@endif-->
								</div>
								<div class="col-md-6">
									<label for="t-reporte" class="control-label">Tipo de reporte</label>
									<select id="t-reporte" class="form-control" name="t-reporte" value="{{old('t-reporte')}}">
										<option value="Activo" @if (old('titulo') == 'Activo') selected="selected" @endif>Activo</option>
										<option value="Inactivo" @if (old('titulo') == 'Inactivo') selected="selected" @endif>Inactivo</option>
										<option value="Reactivado" @if (old('titulo') == 'Reactivado') selected="selected" @endif>Reactivado</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">Georeferencia</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								
								<div class="col-md-6">
									<div class="{{ $errors->has('institucion') ? ' has-error' : '' }}">
										<label for="institucion" class="control-label">Instituci&oacuten en que se reporta(n) caso(s)</label>
										<input id="institucion" type="text" class="form-control" name="institucion" value="{{ old('institucion') }}" required autofocus>
										@if ($errors->has('institucion'))
										<span class="help-block">
											<strong>{{ $errors->first('institucion') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="{{ $errors->has('direccion') ? ' has-error' : '' }}">
										<label for="direccion" class="control-label">Localidad, Municipio y Estado donde ocurri&oacute caso</label>
										<input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>
										@if ($errors->has('direccion'))
										<span class="help-block">
											<strong>{{ $errors->first('direccion') }}</strong>
										</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="{{ $errors->has('longitud') ? ' has-error' : '' }}">
										<label for="longitud" class="control-label">Longitud</label>
										<input id="longitud" type="number"  class="form-control" name="longitud" value="{{ old('longitud') }}" required autofocus>
										@if ($errors->has('longitud'))
										<span class="help-block">
											<strong>{{ $errors->first('longitud') }}</strong>
										</span>
										@endif				
									</div>
								</div>
								<div class="col-md-4">
									<div class="{{ $errors->has('latitud') ? ' has-error' : '' }}">
										<label for="latitud" class="control-label">Latitud</label>
										<input id="latitud" type="number" class="form-control" name="latitud" value="{{ old('latitud') }}" required autofocus>
										@if ($errors->has('latitud'))
										<span class="help-block">
											<strong>{{ $errors->first('latitud') }}</strong>
										</span>
										@endif				
									</div>
								</div>
								<div class="col-md-4">
									<div class="{{ $errors->has('altitud') ? ' has-error' : '' }}">
										<label for="altitud" class="control-label">Altitud</label>
										<input id="altitud" type="number" class="form-control" name="altitud" value="{{ old('altitud') }}" required autofocus>
										@if ($errors->has('altitud'))
										<span class="help-block">
											<strong>{{ $errors->first('altitud') }}</strong>
										</span>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">Informaci&oacuten detallada</div>
				<div class="panel-body">
					<div class="row"> <!--Aquí e-->
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('agente') ? ' has-error' : '' }}">
										<label for="agente" class="control-label">Agente causal</label>
										<input id="agente" type="text" class="form-control" name="agente" value="{{ old('agente') }}" required autofocus>
										@if ($errors->has('agente'))
										<span class="help-block">
											<strong>{{ $errors->first('agente') }}</strong>
										</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('laboratorio') ? ' has-error' : '' }}">
										<label for="laboratorio" class="control-label">Laboratorio que confirma casos</label>
										<input id="laboratorio" type="text" class="form-control" name="laboratorio" value="{{ old('laboratorio') }}" required autofocus>
										@if ($errors->has('laboratorio'))
										<span class="help-block">
											<strong>{{ $errors->first('laboratorio') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="distribucion" class="control-label">Distribuci&oacuten de casos por sexo</label>
									<select id="distribucion" class="form-control" name="distribucion" value="{{old('distribucion')}}">
										<option value="Masculino" @if (old('distribucion') == 'Masulino') selected="selected" @endif>Predominantemente masculinos</option>
										<option value="Femenino" @if (old('distribucion') == 'Femenino') selected="selected" @endif>Predominantemente femeninos</option>
										<option value="Ambos" @if (old('distribucion') == 'Ambos') selected="selected" @endif>Ambos sexos</option>
										<option value="Desconocido" @if (old('distribucion') == 'Desconocido') selected="selected" @endif>Desconocido</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('incubacion') ? ' has-error' : '' }}">
										<label for="d-incubacion" class="control-label">Duraci&oacuten promedio de incubaci&oacuten (horas o d&iacuteas)</label>
										<input id="d-incubacion" type="text" class="form-control" name="d-incubacion" value="{{ old('d-incubacion') }}" required autofocus>
										@if ($errors->has('d-incubacion'))
										<span class="help-block">
											<strong>{{ $errors->first('d-incubacion') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('d-enfermedad') ? ' has-error' : '' }}">
										<label for="d-enfermedad" class="control-label">Duraci&oacuten promedio de enfermedad (horas o d&iacuteas)</label>
										<input id="d-enfermedad" type="text" class="form-control" name="d-enfermedad" value="{{ old('d-enfermedad') }}" required autofocus>
										@if ($errors->has('d-enfermedad'))
										<span class="help-block">
											<strong>{{ $errors->first('d-enfermedad') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="{{ $errors->has('signos') ? ' has-error' : '' }}">
										<label for="signos" class="control-label">S&iacutegnos y s&iacutentomas presentes</label>
										<input id="signos" type="text" class="form-control" name="signos" value="{{ old('signos') }}" required autofocus>
										@if ($errors->has('signos'))
										<span class="help-block">
											<strong>{{ $errors->first('signos') }}</strong>
										</span>
										@endif				
									</div>
								</div>
								<div class="col-md-4">
									<label for="transmision" class="control-label"> Modo de transmisi&oacuten </label>
									<select id="transmision" class="form-control" name="transmision" value="{{old('transmision')}}">
										<option value="Alimenticia" @if (old('transmision') == 'Alimenticia') selected="selected" @endif>Alimenticia</option>
										<option value="Agua" @if (old('transmision') == 'Agua') selected="selected" @endif>Agua</option>
										<option value="Contacto-animal" @if (old('transmision') == 'Contacto-Animal') selected="selected" @endif>Contacto animal</option>
										<option value="Persona-persona" @if (old('transmision') == 'Persona-persona') selected="selected" @endif>Persona a persona</option>
										<option value="Ambiental" @if (old('transmision') == 'Ambiental') selected="selected" @endif>Ambiental</option>
										<option value="Otra" @if (old('transmision') == 'Otra') selected="selected" @endif>Otra</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="{{ $errors->has('detectado') ? ' has-error' : '' }}">
										Fecha en que paciente &iacutendice fue detectado
										<input id="detectado" type="date" class="form-control" name="detectado" value="{{ old('detectado') }}" required>
										@if ($errors->has('detectado'))
										<span class="help-block">
											<strong>{{ $errors->first('detectado') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="{{ $errors->has('reportado') ? ' has-error' : '' }}">
										<h7>Fecha en que &uacuteltimo paciente fue reportado</h7>
										<input id="reportado" type="date" class="form-control" name="reportado" value="{{ old('reportado') }}" required>
										@if ($errors->has('reportado'))
										<span class="help-block">
											<strong>{{ $errors->first('reportado') }}</strong>
										</span>
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('num-sospechosos') ? ' has-error' : '' }}">
										<label for="num-sospechosos" class="control-label">N&uacutemero de casos sospechosos</label>
										<input id="num-sospechosos" type="number" min="1" step="1" class="form-control" name="num-sospechosos" value="" required autofocus>
										@if ($errors->has('num-sospechosos'))
										<span class="help-block">
											<strong>{{ $errors->first('num-sospechosos') }}</strong>
										</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('num-probables') ? ' has-error' : '' }}">
										<label for="num-probables" class="control-label">N&uacutemero de casos probables</label>
										<input id="num-probables" type="number" min="1" step="1" class="form-control" name="num-probables" value="" required autofocus>
										@if ($errors->has('num-probables'))
										<span class="help-block">
											<strong>{{ $errors->first('num-probables') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('num-confirmados') ? ' has-error' : '' }}">
										<label for="num-confirmados" class="control-label">N&uacutemero de casos confirmados</label>
										<input id="num-confirmados" type="number" min="1" step="1" class="form-control" name="num-confirmados" value="" required autofocus>
										@if ($errors->has('num-confirmados'))
										<span class="help-block">
											<strong>{{ $errors->first('num-confirmados') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="num-casos" class="control-label">N&uacutemero de casos totales</label>
									<input id="num-casos" type="number" min="1" step="1" class="form-control" name="num-casos" value="" disabled required autofocus>
									@if ($errors->has('num-casos'))
									<span class="help-block">
										<strong>{{ $errors->first('num-casos') }}</strong>
									</span>
									@endif

								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('num-hospitalizados') ? ' has-error' : '' }}">
										<label for="num-hospitalizados" class="control-label">N&uacutemero de casos hospitalizados</label>
										<input id="num-hospitalizados" type="number" min="1" step="1" class="form-control" name="num-hospitalizados" value="{{ old('num-hospitalizados') }}" required autofocus>
										@if ($errors->has('num-hospitalizados'))
										<span class="help-block">
											<strong>{{ $errors->first('num-hospitalizados') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('num-muertos') ? ' has-error' : '' }}">
										<label for="num-muertos" class="control-label">N&uacutemero de muertos</label>
										<input id="num-muertos" type="number" min="1" step="1" class="form-control" name="num-muertos" value="{{ old('num-muertos') }}" required autofocus>
										@if ($errors->has('num-muertos'))
										<span class="help-block">
											<strong>{{ $errors->first('num-muertos') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="{{ $errors->has('num-intensivos') ? ' has-error' : '' }}">
										N&uacutemero de casos en cuidados intensivos
										<input id="num-intensivos" type="number" min="1" step="1" class="form-control" name="num-intensivos" value="{{ old('num-intensivos') }}" required autofocus>
										@if ($errors->has('num-intensivos'))
										<span class="help-block">
											<strong>{{ $errors->first('num-intensivos') }}</strong>
										</span>
										@endif				
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:20px;">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<button type="submit" class="btn btn-primary form-control">
						Registrar caso
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
<script src="./js/casos.js"></script>
@endsection