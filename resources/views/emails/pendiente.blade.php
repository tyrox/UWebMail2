@extends('emails.dash')
@section('content')
        <!---Correo nuevo-->
@include('errors.error')
<div class="">
    <table>
        <thead>
            <th>Email</th>
            <th>Subject</th>
            <th>Options</th>
        </thead>
        @foreach($correos as $correo)
        <tbody>
            <td>{{$correo->email}}</td>
            <td>{{$correo->subject}}</td>
            <td></td>
        </tbody>
        @endforeach
    </table>  

</div>
@endsection