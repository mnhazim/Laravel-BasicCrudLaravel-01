<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	@include('layout.navbar')

	<div class="container">
		<div class="py-2">
			@include('alert')
			@yield('content')
		</div>
	</div>

</body>
</html>