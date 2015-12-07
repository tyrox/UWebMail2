@extends('emails.dash')
@section('content')
        <!---Correo nuevo-->
@include('errors.error')
<div class="">
    
    <div class="row">
        {!!Form::open(['route'=>'mail.store','method'=>'post'])!!}
        <div class="col s12 m6 l6 ">        
            {!!Form::text('email',null,['placeholder' => 'Email'])!!}
            {!!Form::text('subject',null,['placeholder' => 'Asunto'])!!}
        </div>
        <div class="">
            {!!Form::textarea('content',null,['placeholder' => 'Mensaje'])!!}
        </div class="">
        {!!Form::submit('ENVIAR',['class'=>'btn '])!!}        
        {!!Form::close()!!}
    </div>
</div>
@endsection