@extends('layouts.admin')

    @section('title')
        Parents
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
    <section class="comp-and-sugg">
        <div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0;">All Parents</h2>
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Img</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Job</th>
                            <th scope="col">Address</th>
                            <th scope="col">Blood Type</th>
                            <th scope="col">All Info</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="col">{{$user->id}}</th>
                                <th scope="col">Img</th>
                                <th scope="col">{{$user->name}}</th>
                                <th scope="col">{{$user->email}}</th>
                                <th scope="col">{{$user->age}}</th>
                                <th scope="col">{{$user->job}}</th>
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


