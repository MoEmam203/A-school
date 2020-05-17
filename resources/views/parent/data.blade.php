@extends('layouts.parent')
@section('title')
	Data
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
						<li class="nav-item active">
							<a class="nav-link" href="data.html"> Data <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tables
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="studyTable.html">Study Table</a>
								<a class="dropdown-item" href="exameTable.html">Exams Table</a>
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
						<li class="nav-item">
							<a class="nav-link" href="ComplaintsAndSuggestions.html">Complaints and Suggestions</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="changePassword.html">Change Password</a>
								<a class="dropdown-item" href="#">Log Out</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!-- End Nav Bar -->
	<!-- Start Data Section -->
	<section class="data">
		<div class="card">
			<div class="card-body">
				<img src="../../pics/parentAndStudent/avatar.png" class="card-img-top" alt="avatar">
				<ul class="list-unstyled">
					<li> <i class="fas fa-pen"></i> <span>Name: </span> Mahmoud Siliman </li>
					<li> <i class="fas fa-address-card"></i> <span>ID: </span> 225861 </li>
					<li> <i class="fas fa-birthday-cake"></i> <span>Date Of Birth: </span> 4 / 5 / 1998 </li>
					<li> <i class="fas fa-map-marker-alt"></i> <span>Address: </span> El-Galaa St. mansourah  </li>
					<li> <i class="fas fa-graduation-cap"></i> <span>Level: </span> 4 </li>
					<li> <i class="fas fa-tint"></i> <span>Blood Type: </span> A+ </li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Data Section -->
@endsection