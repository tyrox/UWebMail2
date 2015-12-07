@extends('mail.dash')
@section('content')
        <!---Correo nuevo-->
@include('errors.error')
<div class="">
    
    <div class="row">
        {!!Form::open(['route'=>'mail.store','method'=>'post'])!!}
        @include('mail.form.mail')
        {!!Form::submit('ENVIAR',['class'=>'btn '])!!}        
        {!!Form::close()!!}
    </div>
</div>
@endsection