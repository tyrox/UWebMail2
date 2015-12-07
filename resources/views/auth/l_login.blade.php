@extends('auth.login')

	@section('content')
    @include('errors.error')
    @if(Session::has('message-error'))
    <div>
        {{Session::get('message-error')}}
    </div>
    @endif
	{!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
                                        
    {!!Form::label('usuario','User:')!!}   
    {!!Form::text('user',null,['class'=>'form-control', 'placeholder'=>''])!!}    
    {!!Form::label('contrasenna','Password:')!!}
    {!!Form::password('password',null,['placeholder' => 'Password'])!!}
                                        
    {!!Form::submit('OK',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
	@endsection