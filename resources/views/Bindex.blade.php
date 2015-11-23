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
                <div class="row card-panel  container">
                    <!--Datos del login-->
                    <div class="">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="user" type="text" class="validate">
                                    <label for="user">User</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                                <div clas="row s3">
                                    <br>
                                    
                                    <div class="input-field col s2">
                                        <div class="center">
                                            <button class="btn waves-effect waves-light" type="submit" name="enter">Enter                                            
                                                <a href="dash.php"></a>
                                            </button>                                        
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="input-field col s1">
                                        <div class="center">
                                            <button class="btn waves-effect waves-light" type="submit" name="register">Register                                            
                                                <a href="dash.php"></a>
                                            </button>                                        
                                        </div>                                    
                                    </div>
                    </div>
                </div>                     
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
                                                                                        