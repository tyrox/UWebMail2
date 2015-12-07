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

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">


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
                            
                            {!!Form::open(['route'=>'index.index', 'method'=>'get'])!!}
                                
                            <li><a >{!!Form::submit('Login',['class'=>'btn '])!!}</a></li>

                            {!!Form::close()!!}
                            
                        </ul>
                    </div>
                </nav>       
            <div class="">    
            @section('errors')                                            
                    <!--Registrarse--> 
                    <div class="container">
                        
                        <div class="container">
                            <h5 class="">New Account</h5>
                            <div class="row">
                            
                                <div class="col s12 m8 ">
                                    <div class="card-panel teal">
                                        <div class="">
                                            @yield('content') 
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>                        
                    </div> 
                    
                  
            
            </div>
               
        </section>
        
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.button-collapse').sideNav();
            $('.tooltipped').tooltip({delay: 50});
    });
    </script>
    </body>
</html>
                                                                                        