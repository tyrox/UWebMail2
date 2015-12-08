<!DOCTYPE html>
<html lang='es'>
    <head>
        <title>
            
                WebMail
            
        </title>
        <link href='http://d1ujqdpfgkvqfi.cloudfront.net/favicon-generator/htdocs/favicons/2014-12-13/8e71e0dbba20dd1cfd38d2734623f196.ico' rel='icon' type='image/vnd.microsoft.icon'/> 
        <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body class="">
        <section>
              <nav><a  class="brand-logo"> UWebMail<i class="material-icons">mail_outline</i></a>
                    <div class="nav-wrapper">
                        
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            
                            {!!Form::open(['route'=>'user.create', 'method'=>'get'])!!}
                                
                            <li><a >{!!Form::submit('Register',['class'=>'btn '])!!}</a></li>

                            {!!Form::close()!!}
                            
                        </ul>
                    </div>
                </nav>
                @section('errors')
                <div class="container"> 
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m8">
                                <div>
                                    <h5>Login</h5>                            
                                </div>
                                <div class="card-panel teal"> 
                                <!-- resources/views/auth/login.blade.php -->
                                    @yield('content')  
                                
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
                                                                                        