 <!DOCTYPE html>
<html lang='es'>
<head>
    @yield('head')
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

<body >

    <section>
    <nav>
        <a  class="brand-logo"> UWebMail<i class="material-icons">mail_outline</i></a>

        <div class="nav-wrapper">
                
            <ul  class="right hide-on-med-and-down">
                <li>
                    <i class="material-icons">account_circle</i>
                </li>
                
                <li>
                    <a >
                    {!!Auth::user()->name!!}
                    </a>
                </li>        
                <li>                    
                    <a href="/logout"><i class="material-icons" >highlight_off</i></a> 

                </li>
            </ul>
        </div>
        
    </nav>

    </section>
    <section>
        <div class="collection">
            <div class=" ">
                <div class="row">
                    <div class="col s12 m4 l3 ">
                        <br>

                        <strong>Bandeja</strong>
                        <div class="collection">
                        
                            <a  href="{!!URL::to('/mail')!!}" class="collapsible-header active" >SALIDA
                                <i class="material-icons">backup</i>
                            </a>
                        <!--Let browser know website is optimized for mobile
                        {!!Form::open(['route'=>'mail.index', 'method'=>'get'])!!}
                            <a  class="collection-item">
                            {!!Form::submit('Enviados',['class'=>'btn'])!!}</a>
                        {!!Form::close()!!}
                        -->
                            <a  href="{!!URL::to('/mail/sent')!!}" class="collapsible-header active">ENVIADOS
                                <i class="material-icons">done_all</i>
                            </a>
                        </div>
                        {!!Form::open(['route'=>'mail.create', 'method'=>'get'])!!}
                        <a class="tooltipped" data-position="button" data-delay="50" data-tooltip="Crear un nuevo correo">
                            {!!Form::submit('Nuevo',['class'=>'btn '])!!}</a>
                        {!!Form::close()!!}

                    </div>

                    <div class="col s12 m8 l9  ">
                        <br>
                        <strong>Correos</strong>
                        @section('content')

                        <div class="collection teal lighten-2">
                           
                        </div>
                       @show
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </section>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
{!!Html::script('js/script.js')!!}
    
<script>
    $(document).ready(function(){
        $('.button-collapse').sideNav();
        $('.tooltipped').tooltip({delay: 50});
    });
    $(".button-collapse").sideNav();
    // Show sideNav
$('.button-collapse').sideNav('show');
// Hide sideNav
$('.button-collapse').sideNav('hide');

</script>
</body>
</html>
