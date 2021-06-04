<html>
<head>
<title>User Login</title>
</head>
<body>
	<center>
	<form action="{{ route('products.store') }}" method="POST">
			
			<h3 align="center">Admin Login</h3>
			<div  class="message" >
			
			</div>
			 Username:<br>
			 <input type="text" name="userName" size = "30" placeholder = "USER NAME" required >
			 <br>
			 Password:<br>
			<input type="password" name="password"  size = "30" placeholder = "Password" required >
			<br><br>
			<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> LOGIN</a>

</div>
</div>
<tr><strong><h4><a href="/home">Go Home NOW</a></h1></strong>
		</form>

	</center>
		</body>
</html>
