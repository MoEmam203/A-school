@extends('layouts.student')
@section('title')
	Student Exam
@stop
@section('content')
	<!-- Start Nav Bar -->
	<section class="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href={{route('data')}}> <span>A+</span><span> School </span></a>
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
								<a class="dropdown-item" href="studentStudyTable.html">Study Table</a>
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
						<li class="nav-item active">
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
  <!-- Start Exam Section -->
  <div class="exam">
    <div class="container">
      <form action="" method="">
        <div class="info">
          <div class="row">
            <div class="logo col-5 ml-auto">
              <span>A+</span><span> School </span>
            </div>
            <div class="info-box col-7 mr-auto">
              <div class="row">
                <div class="col-7">
                  <span class="text-uppercase"> Subject Name: </span> <span> ---- </span> <br><br>
                  <span class="text-uppercase"> Student Name: </span> <span> ---- </span> <br><br>
                  <span class="title text-uppercase"> Student ID: </span> <span> ---- </span>
                </div>
                <div class="col-5">
                  <span class="text-uppercase"> Exam Duration: </span> <span> ---- </span> <br><br>
                  <span class="title text-uppercase"> Remaining Time: </span> <span> ---- </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="questions">
          <div class="singl-question">
            <p> (1) Question 1</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question1" id="1"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question1" id="1"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question1" id="1"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question1" id="1"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (2) Question 2</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question2" id="2"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question2" id="2"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question2" id="2"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question2" id="2"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (3) Question 3</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question3" id="3"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question3" id="3"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question3" id="3"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question3" id="3"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (4) Question 4</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question4" id="4"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question4" id="4"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question4" id="4"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question4" id="4"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (5) Question 5</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question5" id="5"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question5" id="5"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question5" id="5"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question5" id="5"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (6) Question 6</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question6" id="6"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question6" id="6"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question6" id="6"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question6" id="6"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (7) Question 7</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question7" id="7"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question7" id="7"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question7" id="7"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question7" id="7"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (8) Question 8</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question8" id="8"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question8" id="8"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question8" id="8"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question8" id="8"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (9) Question 9</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question9" id="9"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question9" id="9"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question9" id="9"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question9" id="9"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="singl-question">
            <p> (10) Question 10</p>
            <div class="radio-container">
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question10" id="10"> <span class="answer"> Answer 1 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question10" id="10"> <span class="answer"> Answer 2 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question10" id="10"> <span class="answer"> Answer 3 </span>
                  <span class="circle"></span>
                </label>
              </div>
              <div class="radio-group">
                <label class="radio">
                  <input type="radio" name="question10" id="10"> <span class="answer"> Answer 4 </span>
                  <span class="circle"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="confirm answers" class="text-uppercase"> 
      </form>
    </div>
  </div>
  <!-- End Exam Section -->
@stop