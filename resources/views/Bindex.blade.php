<!DOCTYPE html>
<html lang='es'>
    <head>
        <title>
            @section('titulo')
                UWebMail
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
    <body class="card-panel">
        <section>            
            <div class="card-panel teal lighten-4">                
                    <h5 class=""> Login <b>UWebMail</b></h5>

                {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {!!Form::label('correo','Correo:')!!}   
                        {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('contrasena','Contraseña:')!!}   
                        {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
                    </div>
                    {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}                     
            </div>
            @yield('contenido')   
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
                                                                                        