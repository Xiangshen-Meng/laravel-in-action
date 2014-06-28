<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		Shalery
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{ HTML::style('asset/css/bootstrap.css'); }}

	{{ HTML::script('asset/js/jquery-2.1.1.min.js'); }}
	{{ HTML::script('asset/js/bootstrap.min.js'); }}

</head>
<body style="padding-top:50px">
	@include('navbar')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>