@extends('layouts.admin')


    
    @section('title')
        Exam Schedules
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
   <section class="exam-table">
		<div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0; text-align:center;" >All Exam Schedules</h2>

            <h3 class="c" >Level 1</h3>
            <table class="table table-striped table-dark">
				<thead>
					<tr class="text-uppercase text-center">
						<th scope="col">#</th>
						<th scope="col"> date </th>
						<th scope="col">day</th>
						<th scope="col">exam committee</th>
						{{-- <th scope="col">seat number</th> --}}
						<th scope="col">time</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($s as $s)											
						<tr>
							<th scope="row"> {{$s->examSubject->name}} </th>
							<td> {{$s->date}} </td>
							<td> {{$s->day}} </td>
							<td> {{$s->committee}} </td>
							{{-- <td> {{$s->seat_number}} </td> --}}
							<td> {{$s->time}} </td>
						</tr>
					@endforeach
				</tbody>
            </table>

            <hr>

            <h3 class="c">Level 2</h3>
            <table class="table table-striped table-dark">
				<thead>
					<tr class="text-uppercase text-center">
						<th scope="col">#</th>
						<th scope="col"> date </th>
						<th scope="col">day</th>
						<th scope="col">exam committee</th>
						{{-- <th scope="col">seat number</th> --}}
						<th scope="col">time</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($a as $s)											
						<tr>
							<th scope="row"> {{$s->examSubject->name}} </th>
							<td> {{$s->date}} </td>
							<td> {{$s->day}} </td>
							<td> {{$s->committee}} </td>
							{{-- <td> {{$s->seat_number}} </td> --}}
							<td> {{$s->time}} </td>
						</tr>
					@endforeach
				</tbody>
            </table>
            
            <hr>

            <h3 class="c" >Level 3</h3>
            <table class="table table-striped table-dark">
				<thead>
					<tr class="text-uppercase text-center">
						<th scope="col">#</th>
						<th scope="col"> date </th>
						<th scope="col">day</th>
						<th scope="col">exam committee</th>
						{{-- <th scope="col">seat number</th> --}}
						<th scope="col">time</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($b as $s)											
						<tr>
							<th scope="row"> {{$s->examSubject->name}} </th>
							<td> {{$s->date}} </td>
							<td> {{$s->day}} </td>
							<td> {{$s->committee}} </td>
							{{-- <td> {{$s->seat_number}} </td> --}}
							<td> {{$s->time}} </td>
						</tr>
					@endforeach
				</tbody>
            </table>

            <hr>

            <h3 class="c">Level 4</h3>
            <table class="table table-striped table-dark">
				<thead>
					<tr class="text-uppercase text-center">
						<th scope="col">#</th>
						<th scope="col"> date </th>
						<th scope="col">day</th>
						<th scope="col">exam committee</th>
						{{-- <th scope="col">seat number</th> --}}
						<th scope="col">time</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($c as $s)											
						<tr>
							<th scope="row"> {{$s->examSubject->name}} </th>
							<td> {{$s->date}} </td>
							<td> {{$s->day}} </td>
							<td> {{$s->committee}} </td>
							{{-- <td> {{$s->seat_number}} </td> --}}
							<td> {{$s->time}} </td>
						</tr>
					@endforeach
				</tbody>
            </table>
            
            <hr>

            <h3 class="c" >Level 5</h3>
            <table class="table table-striped table-dark">
				<thead>
					<tr class="text-uppercase text-center">
						<th scope="col">#</th>
						<th scope="col"> date </th>
						<th scope="col">day</th>
						<th scope="col">exam committee</th>
						{{-- <th scope="col">seat number</th> --}}
						<th scope="col">time</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($d as $s)											
						<tr>
							<th scope="row"> {{$s->examSubject->name}} </th>
							<td> {{$s->date}} </td>
							<td> {{$s->day}} </td>
							<td> {{$s->committee}} </td>
							{{-- <td> {{$s->seat_number}} </td> --}}
							<td> {{$s->time}} </td>
						</tr>
					@endforeach
				</tbody>
            </table>

            <hr>

            <h3 class="c">Level 6</h3>
            <table class="table table-striped table-dark">
				<thead>
					<tr class="text-uppercase text-center">
						<th scope="col">#</th>
						<th scope="col"> date </th>
						<th scope="col">day</th>
						<th scope="col">exam committee</th>
						{{-- <th scope="col">seat number</th> --}}
						<th scope="col">time</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($e as $s)											
						<tr>
							<th scope="row"> {{$s->examSubject->name}} </th>
							<td> {{$s->date}} </td>
							<td> {{$s->day}} </td>
							<td> {{$s->committee}} </td>
							{{-- <td> {{$s->seat_number}} </td> --}}
							<td> {{$s->time}} </td>
						</tr>
					@endforeach
				</tbody>
			</table>
        </div>
    </section>
    <!-- End Complaints And Suggestion Section -->
    @stop
