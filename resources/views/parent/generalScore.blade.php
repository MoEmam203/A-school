@extends('layouts.parent')
@section('title')
	General Scores
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
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Scores
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('term')}}">Term Scores</a>
								<a class="dropdown-item" href="{{route('general')}}">General Scores</a>
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
	<!-- Start General Scores Section -->
	<section class="general-score">
		<div class="container">
      <!-- Start Table -->
			<table class="table table-striped table-dark text-center">
				<thead>
          <tr> 
            <th class="term-name" colspan="4"> First Term </th>
          </tr>
					<tr class="text-uppercase">
						<th scope="col"> subject name </th>
						<th scope="col"> degree in details </th>
						<th scope="col"> degree </th>
						<th scope="col"> grade </th>
					</tr>
				</thead>
				<tbody>
					@foreach ($r as $r)					
						<tr>
							<th scope="row"> {{$r->subject->name}} </th>
							<td>
								<p> Final : &nbsp; <span> {{$r->final}} </span></p>
								<p> Midterm : &nbsp; <span> {{$r->mid}}  </span></p>
								<p> Oral: &nbsp; <span> {{$r->oral}}  </span></p>
								@if ($r->pract)
									<p> Practical : &nbsp; <span> {{$r->pract}}  </span></p>
								@endif
								 
							</td>
							<td> {{$r->result}}  </td>
							<td> {{$r->degree}}  </td>
						</tr>
					@endforeach
				</tbody>
      </table>
      <!-- End Table -->
      <!-- Start Table -->
      <table class="table table-striped table-dark text-center">
				<thead>
          <tr> 
            <th class="term-name" colspan="4"> "Term Name" Scores </th>
          </tr>
					<tr class="text-uppercase">
						<th scope="col"> subject name </th>
						<th scope="col"> degree in details </th>
						<th scope="col"> degree </th>
						<th scope="col"> grade </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"> Subj 1 </th>
						<td>
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 2 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 3 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 4 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 5 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 6 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
          </tr>
          <tr>
						<th scope="row"> Subj 7 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
          </tr>
				</tbody>
      </table>
      <!-- End Table -->
      <!-- Start Table -->
      <table class="table table-striped table-dark text-center">
				<thead>
          <tr> 
            <th class="term-name" colspan="4"> "Term Name" Scores </th>
          </tr>
					<tr class="text-uppercase">
						<th scope="col"> subject name </th>
						<th scope="col"> degree in details </th>
						<th scope="col"> degree </th>
						<th scope="col"> grade </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"> Subj 1 </th>
						<td>
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 2 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 3 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 4 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 5 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
					</tr>
					<tr>
						<th scope="row"> Subj 6 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
          </tr>
          <tr>
						<th scope="row"> Subj 7 </th>
						<td> 
              <p> Detai l: &nbsp; <span> --- </span></p>
              <p> Detai 2: &nbsp; <span> --- </span></p>
              <p> Detai 3: &nbsp; <span> --- </span></p>
              <p> Detai 4: &nbsp; <span> --- </span></p> 
            </td>
						<td> --- </td>
						<td> --- </td>
          </tr>
				</tbody>
      </table>
      <!-- End Table -->
		</div>
	</section>
	<!-- End General Score Section -->
@stop