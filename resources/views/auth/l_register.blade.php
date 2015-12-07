 @extends('auth.register')
@section('content')            
@if(count($errors)>0)

<div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{!!$error!!}</li>
        @endforeach
    </ul>
</div>
@endif
 {!!Form::open(['route'=>'user.store','method'=>'POST'])!!}
                                        
    {!!Form::label('usuario','User:')!!}   
    {!!Form::text('user',null,['class'=>'form-control', 'placeholder'=>'User name'])!!}
    {!!Form::label('nombre','Name:')!!} 
    {!!Form::text('name',null,['placeholder' => 'Your name'])!!}
    {!!Form::label('correo','Email:')!!}
    {!!Form::email('email',null,['placeholder' => 'E-mail'])!!}
    {!!Form::label('contrasenna','Password:')!!}
    {!!Form::password('password',null,['placeholder' => 'Password'])!!}
                                        
    {!!Form::submit('OK',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection