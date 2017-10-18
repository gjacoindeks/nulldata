@extends('usuarios.master')

@section('contenido')

<form method="POST" action="{{ route('usuarios.store') }}">
	{{ csrf_field() }}
	

	<div class="form-group">



		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
		{{$errors->first('nombre')}}
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
		{{$errors->first('email')}}
	</div>
	<label for="fnac">Fecha de Nacimiento</label>
	<div id="datetimepicker" class="input-append date">
		<input type="text" name="fnac"></input>
		<span class="add-on">
			<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
		</span>
		
	</div>
	<div>
		<label for="domic">Domicilio</label>
		<input type="text" class="form-control" id="domicilio" name="domicilio1" value="{{old('domicilio1')}}">
		{{$errors->first('domicilio1')}}
		<label for="alias">Alias</label>
		<select name="alias">
			<option value="casa">Casa</option>
			<option value="oficina">Oficina</option>
			<option value="departamento">Departamento</option>
		</select>
		<label for="domic">Agrega otro Domicilio</label>
		<div class="field_wrapper">
			<div>
				<input type="text" name="domicilio[]" value=""/>
				<a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{asset('images/add-icon.png')}}"/></a>
			</div>
		</div>
	</div>


	<button type="submit" class="btn btn-default">Enviar</button>
</form>

@stop