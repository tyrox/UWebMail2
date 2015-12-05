@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
				<div class="">
			<div class="">
				<div class="logo">
					<a href="index.html"></a>
					<p>Movie Theater</p>
				</div>
				<div class=""></div>
			</div>
			<div class="">
				<h1>BIG HERO 6</h1>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('User','user:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
		</div>
	@endsection	