@extends('layouts.parent')
@section('title')
	Monthly Report
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
								<a class="dropdown-item" href="{{route('general')}}">General Scores</a>
							</div>
						</li>
						<li class="nav-item active">
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
  <!-- Start Monthly Report Section -->
  <section class="monthly-report">
    <div class="container">
      <div class="row">
      <!-- Start Card -->
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center text-uppercase">month quez</h3>
            <!-- Start Month Scores Section -->
            <section class="month-score">
              <div class="container">
                <table class="table table-striped table-dark text-center">
                  <thead>
                    <tr class="text-uppercase">
                      <th scope="col"> subject name </th>
                      <th scope="col"> degree </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($s as $s)
                        
                    
                    <tr>
                      <th scope="row"> {{$s->subject->name}} </th>
                      <td>
                        <p> {{$s->mid}} </p>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </section>
            <!-- End Month Score Section -->
          </div>
        </div>
      </div>
      <!-- End Card -->
        <!-- Start Card -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center text-uppercase">absent</h3>
              <p class="card-text"> {{$r->absent}}</p>
            </div>
          </div>
        </div>
        <!-- End Card -->
        <!-- Start Card -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center text-uppercase">general notes</h3>
              <p class="card-text"> {{$r->notes}} </p>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
  </section>
  <!-- End Monthly REport Section -->
@stop