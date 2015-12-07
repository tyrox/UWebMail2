@extends('mail.dash')
@section('content')
@include('errors.error')
<div class="">
    
    <div class="row">
        {!!Form::model($correo, ['route'=>['mail.update', $correo->id], 'method'=>'PUT'])!!}
        @include('mail.form.mail')
        {!!Form::submit('OK',['class'=>'btn blue'])!!}        
        {!!Form::close()!!}

        {!!Form::open(['route'=>['mail.destroy', $correo->id],'method'=>'DELETE'])!!}        
        {!!Form::submit('delete',['class'=>'btn red'])!!}        
        {!!Form::close()!!}
         
    </div>
</div>
@stop