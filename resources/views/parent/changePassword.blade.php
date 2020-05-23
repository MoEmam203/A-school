@extends('layouts.parent')
@section('title')
	Change Password
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
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item active" href="changePassword.html">Change Password</a>
								<a class="dropdown-item" href="#">Log Out</a>
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
      <form action="" method="">
        <label> Old Password </label>
        <input type="password">
        <label> New Password </label>
        <input type="password">
        <label> Confirm Password </label>
        <input type="password">
        <input type="submit" class="text-uppercase">
      </form>
    </div>
  </section>
  <!-- End Change Password Section -->
	<!-- Scripts -->
@endsection