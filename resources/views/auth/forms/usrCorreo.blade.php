<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Welcome.</p>
	<br>
	<p></p>
	<p>Data.</p>
	<p><stron>User: </stron>{!!$user!!}</p>
	<p><stron>Name:</stron>{!!$name!!}</p>
	<p>link: 
		<a href="http://localhost:8000/user/authenticate/{{$user['remember_token']}}">
			<button class="btn waves-effect waves-light">Confirm</button>
		</a>

	</p>
	<br>	
	<p>Thank you.</p>
</body>
</html>