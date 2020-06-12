@extends('layouts.parent')
@section('title')
	Change Password
@stop
@section('content')
	<!-- Start Nav Bar -->
	<section class="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="{{route('data')}}"> <span>A+</span><span> School </span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{route('data')}}"> Data <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tables
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('study')}}">Study Table</a>
								<a class="dropdown-item" href="{{route('exam-table')}}">Exams Table</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Scores
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('term')}}">Term Scores</a>
								{{-- <a class="dropdown-item" href="{{route('general')}}">General Scores</a> --}}
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('report')}}">Monthly Report</a>
						</li>
						@if (Auth()->User()->is_admin == 'parent')
							<li class="nav-item">
								<a class="nav-link" href="{{route('create-complaint')}}">Complaints and Suggestions</a>
							</li>
						@endif
						
						{{-- @if (Auth()->User()->is_admin == 'student')
							<li class="nav-item">
								<a class="nav-link hidde-exam" href="studentExam.html">Exam</a>
							</li>
						@endif --}}
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item active" href="{{url('change-password')}}">Change Password</a>
								<a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!-- End Nav Bar -->
  <!-- Start Change Password Section -->
  <section class="change-pass">
    <div class="container">
      <form method="POST" action="{{ route('change.password') }}">
		@csrf 

		@foreach ($errors->all() as $error)

		<p class="text-danger">{{ $error }}</p>

		@endforeach 

        <label> Old Password </label>
		<input name="current_password" type="password">
		
        <label> New Password </label>
        <input name="new_password" type="password">
		
		<label> Confirm Password </label>
		<input name="new_confirm_password" type="password">
		
		<input type="submit" class="text-uppercase">
      </form>
    </div>
  </section>
  <!-- End Change Password Section -->
	<!-- Scripts -->
@endsection