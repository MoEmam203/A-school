@extends('layouts.admin')

    @section('title')
        Study Schedules
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
    <section class="comp-and-sugg">
        <div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0; text-align:center;" >All  Study Schedules</h2>
            
            <h3 class="c">Level 1</h3>
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
            
            <hr>

            <h3 class="c">Level 2</h3>
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
						@foreach ($f1 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>SUN</th>
						@foreach ($f2 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>MON</th>
						@foreach ($f3 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>TUE</th>
						@foreach ($f4 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>WED</th>
						@foreach ($f5 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>THR</th>
						@foreach ($f6 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>

				</tbody>
            </table>
            
            <hr>

            <h3 class="c">Level 3</h3>
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
						@foreach ($a1 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>SUN</th>
						@foreach ($a2 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>MON</th>
						@foreach ($a3 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>TUE</th>
						@foreach ($a4 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>WED</th>
						@foreach ($a5 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>THR</th>
						@foreach ($a6 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>

				</tbody>
            </table>
            
            <hr>

            {{-- <h3 class="c">Level 4</h3>
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
						@foreach ($b1 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>SUN</th>
						@foreach ($b2 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>MON</th>
						@foreach ($b3 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>TUE</th>
						@foreach ($b4 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>WED</th>
						@foreach ($b5 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>THR</th>
						@foreach ($b6 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>

				</tbody>
            </table>
            
            <hr>

            <h3 class="c">Level 5</h3>
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
						@foreach ($c1 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>SUN</th>
						@foreach ($c2 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>MON</th>
						@foreach ($c3 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>TUE</th>
						@foreach ($c4 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>WED</th>
						@foreach ($c5 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>THR</th>
						@foreach ($c6 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>

				</tbody>
            </table>
            
            <hr>

            <h3 class="c">Level 6</h3>
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
						@foreach ($z1 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>SUN</th>
						@foreach ($z2 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>MON</th>
						@foreach ($z3 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>TUE</th>
						@foreach ($z4 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>WED</th>
						@foreach ($z5 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>
					<tr>
						<th>THR</th>
						@foreach ($z6 as $s)
							<td> {{$s->subject->name}} </td>						
						@endforeach
					</tr>

				</tbody>
			</table> --}}
        </div>
    </section>
    <!-- End Complaints And Suggestion Section -->
    @stop


