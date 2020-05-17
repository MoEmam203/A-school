<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('app/css/parent/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('app/css/student/studentStyle.css')}}">
	<title>
		@yield('title')
	</title>
</head>
<body>
    @yield('content')
	<!-- Scripts -->
	<script src="{{asset('app/js/jquery.js')}}"></script>
	<script src="{{asset('app/js/popper.js')}}"></script>
	<script src="{{asset('app/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('app/js/main.js')}}"></script>
</body>
</html>