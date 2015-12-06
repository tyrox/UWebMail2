<!DOCTYPE html>
<html lang='es'>
    <head>
        <title>
            @section('titulo')
                Register
            @show
        </title>  
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>      
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">        
        @yield('head')
    </head>
    <body class="">
        
        <section>  
            <nav>
                    <div class="nav-wrapper">
                        <a  class="brand-logo"> UWebMail</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            
                            {!!Form::open(['route'=>'home.index', 'method'=>'/'])!!}
                                
                            <li><a >{!!Form::submit('Inicio',['class'=>'btn '])!!}</a></li>

                            {!!Form::close()!!}
                            
                        </ul>
                    </div>
                </nav>       
            <div class="">                                                
                    <!--Registrarse--> 
                    
                    <div class="container">
                        
                        <div class="container">
                            <h5 class="">Crea tu cuenta</h5>
                            <div class="row">
                            
                                <div class="col s12 m8 ">
                                    <div class="card-panel teal">
                                        {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                                        <div class="">
                                            {!!Form::label('usuario','Usuario:')!!}   
                                            {!!Form::text('user',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu usuario'])!!}
                                            {!!Form::label('nombre','Nombre:')!!} 
                                            {!!Form::text('name',null,['placeholder' => 'Ingresa tu nombre'])!!}
                                            {!!Form::label('correo','Correo:')!!}
                                            {!!Form::email('email',null,['placeholder' => 'Ingresa tu correo'])!!}
                                            {!!Form::label('contrasenna','Contraseña:')!!}
                                            {!!Form::password('contrasenna',null,['placeholder' => 'Ingresa la contraseña'])!!}
                                            {!!Form::label('contrasenna2','Contraseña:')!!}
                                            {!!Form::password('password2',null,['placeholder' => 'Confirmar la contraseña'])!!}
                                        </div>
                                        {!!Form::submit('OK',['class'=>'btn btn-primary'])!!}
                                        {!!Form::close()!!}
                                    </div>
                                </div> 
                            </div>
                        </div>                        
                    </div> 
            </div>
               
        </section>
        
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="css/materialize/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.button-collapse').sideNav();
            $('.tooltipped').tooltip({delay: 50});
    });
    </script>
    </body>
</html>
                                                                                        