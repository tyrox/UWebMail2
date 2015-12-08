<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
</head>
<body>
	<p>Welcome.</p>
	<br>
	<p></p>
	<p>Data.</p>
	<p><stron>User: </stron>{!!$user!!}</p>
	<p><stron>Name:</stron>{!!$name!!}</p>
	<p>link: 
		<a href="http://localhost:8000/user/authenticate/{{$_token}}">
			<button class="btn ">Confirm</button>
		</a>

	</p>
	<br>	
	<p>Thank you.</p>

</body>
</html>