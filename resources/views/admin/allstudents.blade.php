@extends('layouts.admin')

    @section('title')
        Students
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
    <section class="comp-and-sugg">
        <div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0;">All Students</h2>
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th class="c" scope="col">Id</th>
                            <th class="c" scope="col">Img</th>
                            <th class="c" scope="col">Name</th>
                            <th class="c" scope="col">Email</th>
                            <th class="c" scope="col">Level</th>
                            <th class="c" scope="col">Age</th> 
                            <th class="c" scope="col">Address</th>
                            <th class="c" scope="col">Blood Type</th>
                            <th class="c" scope="col">All Info</th>
                            <th class="c" scope="col">Edit</th>
                            <th class="c" scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="col">{{$user->id}}</th>
                                <th scope="col">Img</th>
                                <th scope="col">{{$user->name}}</th>
                                <th scope="col">{{$user->email}}</th>
                                <th scope="col">{{$user->level}}</th>
                                <th scope="col">{{$user->age}}</th>
                                <th scope="col">{{$user->address}}</th>
                                <th scope="col">{{$user->blood_type}}</th>
                                <th scope="col"><a href="" class="btn btn-success btn-sm">Info</a></th>
                                <th scope="col"><a href="" class="btn btn-info btn-sm">Edit</a></th>
                                <th scope="col"><a href="" class="btn btn-danger btn-sm">Delete</a></th>
                            </tr>
                        @endforeach
                        
                    </tbody>
            </table>
        </div>
    </section>
    <!-- End Complaints And Suggestion Section -->
    @stop


