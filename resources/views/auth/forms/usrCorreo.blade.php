<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>	
    <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
</head>
<body>
	<div class="card-panel teal lighten-2">
	<p>Welcome.</p>
	<br>
	<p></p>
	<p>Data.</p>
	<p><stron>User: </stron>{!!$user!!}</p>
	<p><stron>Name:</stron>{!!$name!!}</p>
	<p>Link: 
		<a href="http://localhost:8000/user/authenticate/{{$_token}}">
			<button class="btn">Confirm</button>
		</a>

	</p>
	<br>	
	<p>Thank you.</p>
	</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

</body>
</html>