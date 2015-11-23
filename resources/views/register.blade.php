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
    <body class="card-panel">
        
        <section>            
            <div class="card-panel teal lighten-4">                                                
                    <!--Registrarse--> 
                    
                    <div class="container">
                        
                        <div class="container">
                            <h5 class=""> Create your Account</h5>
                            <div class="row s card-panel container">
                            
                                <div class="col s12">
                                    <div class="contact-form">
             {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                        <div class="col-md-6 contact-left">
                            {!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
                            {!!Form::text('email',null,['placeholder' => 'Email'])!!}
                        </div>
                        <div class="col-md-6 contact-right">
                            {!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
                        </div>
                        {!!Form::submit('SEND')!!}
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
                                                                                        