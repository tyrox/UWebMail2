@extends('mail.dash')
@section('content')
        <!---Correo nuevo-->
@include('errors.error')
<?php $message = Session::get('message') ?>

@if($message == 'delete')
<!DOCTYPE html>
<html>
<head>  
</head>
<body onload="Materialize.toast('Correo eliminado', 4000)">    
</body>
</html>

@endif
<div class="">
    <table>
        <thead>
            <th>Email</th>
            <th>Subject</th>
            <th>Content</th>
            <th>Options</th>
        </thead>
        @foreach($correos as $correo)
        <tbody>
        @if($correo->user == (Auth::user()->id))
            @if($correo->status == '1')
            <td>{{$correo->email}}</td>
            <td>{{$correo->subject}}</td>
            <td>{{$correo->content}}</td>
            <td>

                {!!Form::open(['route'=>['mail.destroy', $correo->id],'method'=>'DELETE'])!!}        
                {!!Form::submit('delete',['class'=>'btn red'])!!}        
                {!!Form::close()!!}
                
            </td>
            @endif
        @endif
        </tbody>
        @endforeach
    </table> 
    

</div>
@endsection