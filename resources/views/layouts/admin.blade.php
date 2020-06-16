<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('app/css/parent/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('app/css/student/studentStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>
		@yield('title')
	</title>
	<style>
		body {
 			background-color: #212427;
			font-family: 'Noto Sans' , 'arial' , 'sans';
		}
		.c{color:  #A9D7E4;}
		.toast-success{background-color:#51A351}
		.toast-error{background-color:#BD362F}
		.toast-info{background-color:#2F96B4}
		.toast-warning{background-color:#F89406}

		.p{padding:20px 0;}

		
}
	</style>
</head>
<body>
    <section class="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#"> <span>A+</span><span> School </span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Users
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('students')}}">All Students</a>
								<a class="dropdown-item" href="{{route('parents')}}">All Parents</a>
								<a class="dropdown-item" href="{{route('add-user')}}">Add New User</a>
							</div>
                        </li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Subjects
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('subjects')}}">All Subjects</a>
								<a class="dropdown-item" href="{{route('add-subject')}}">Add New Subject</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Schedule
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('schedules')}}">All Study Schedule</a>
								<a class="dropdown-item" href="{{route('exam-schedules')}}">All Exams Schedule</a>
								<a class="dropdown-item" href="{{route('add-schedule')}}">Add New Study Schedule</a>
								<a class="dropdown-item" href="{{route('add-exam-schedule')}}">Add New Exam Schedule</a>
								<a class="dropdown-item" href="{{route('all-edit')}}">Edit Study Schedule</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Result
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								
								<a class="dropdown-item" href="{{route('add-result')}}">Add New result</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Report
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								
								<a class="dropdown-item" href="{{route('add-report')}}">Add New report</a>
							</div>
						</li>

						<li class="nav-item">
								<a class="nav-link" href="{{route('complaints')}}">C & S</a>
							</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    </section>
    

   @yield('content')

	
    <hr>
    @if($errors->any())
		<div class="alert alert-danger">
			<ul class="list-group">
				@foreach ($errors->all() as $error)
					<li class="list-group-item text-danger">
						{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
	@endif



	<!-- Scripts -->
	<script src="{{asset('app/js/jquery.js')}}"></script>
	<script src="{{asset('app/js/popper.js')}}"></script>
	<script src="{{asset('app/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('app/js/main.js')}}"></script>
	<script src="{{asset('js/toastr.min.js')}}"></script>
	<script>

      @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
	  @endif

	  @if(Session::has('warning'))
        toastr.warning("{{Session::get('warning')}}")
	  @endif

	  @if(Session::has('error'))
        toastr.error("{{Session::get('error')}}")
	  @endif
	  
	  @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
	  @endif

	</script>
</body>
</html>