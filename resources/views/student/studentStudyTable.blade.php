@extends('layouts.student')
@section('title')
	Student Study Table
@stop
@section('content')
	<!-- Start Nav Bar -->
	<section class="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#"> <span>A+</span><span> School </span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="studentData.html"> Data <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tables
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item active" href="studentStudyTable.html">Study Table</a>
								<a class="dropdown-item" href="studentExamsTable.html">Exams Table</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Scores
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="studentTermScores.html">Term Scores</a>
								<a class="dropdown-item" href="studentGeneralScores.html">General Scores</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="studentMonthlyReport.html">Monthly Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link hidde-exam" href="studentExam.html">Exam</a>
						</li>
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
						<th scope="row"> SAT </th>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> SUM </th>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> MON </th>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> TUE </th>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> WED </th>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> THU </th>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<!-- End Study Table Section -->
	<!-- Scripts -->
@stop