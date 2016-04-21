<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SkateLister 2.0</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	@include('partials.header')

	<div class="container">
		@yield('content')
	</div>

	@include('partials.footer')
</body>
</html>