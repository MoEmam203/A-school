@extends('layouts.parent')
@section('title')
	Complaints And Suggestions
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
						<li class="nav-item active">
							<a class="nav-link" href="ComplaintsAndSuggestions.html">Complaints and Suggestions</a>
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
  <!-- Start Complaints And Suggestion Section -->
  <section class="comp-and-sugg">
    <div class="container">
      <h3 class="text-center"> You Have A Problem Or An Suggestion?! <br> <span> Don't Hesitate </span> </h3>
	  <form action="{{route('store-complaint')}}" method="post">
		@csrf

	  	<p style="color:white">{{Session('mssg')}}</p>

		 <input  name="user_id" type="hidden" value="{{Auth()->User()->id}}">
		 {{-- {{ Form::hidden('id', $user->u_id) }} --}}
        <textarea name="complaints-and-suggestions"></textarea>
        <input type="submit" name='content' value="send" class="text-uppercase">
      </form>
    </div>
  </section>
  <!-- End Complaints And Suggestion Section -->
@endsection
