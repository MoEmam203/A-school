@extends('layouts.parent')
@section('title')
	Study Table
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
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tables
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item active" href="{{route('study')}}">Study Table</a>
								<a class="dropdown-item" href="{{route('exam-table')}}">Exams Table</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Scores
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="termScore.html">Term Scores</a>
								<a class="dropdown-item" href="generalScore.html">General Scores</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="monthlyReport.html">Monthly Report</a>
						</li>
						@if (Auth()->User()->is_admin == 'parent')
							<li class="nav-item">
								<a class="nav-link" href="{{route('create-complaint')}}">Complaints and Suggestions</a>
							</li>
						@endif
						
						@if (Auth()->User()->is_admin == 'student')
							<li class="nav-item">
								<a class="nav-link hidde-exam" href="studentExam.html">Exam</a>
							</li>
						@endif
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{url('change-password')}}">Change Password</a>
								<a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!-- End Nav Bar -->
	<!-- Start Study Table Section -->
	<section class="study-table">
		<div class="container">
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">8 : 9 </th>
						<th scope="col">9 : 10</th>
						<th scope="col">10 : 11</th>
						<th scope="col">11 : 12</th>
						<th scope="col">12 : 1</th>
						<th scope="col">1 : 2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>SAT</th>
						@foreach ($s1 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>SUN</th>
						@foreach ($s2 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>MON</th>
						@foreach ($s3 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>TUE</th>
						@foreach ($s4 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>WED</th>
						@foreach ($s5 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>THR</th>
						@foreach ($s6 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>

				</tbody>
			</table>
		</div>
	</section>
	<!-- End Study Table Section -->
@stop