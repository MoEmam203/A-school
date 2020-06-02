@extends('layouts.admin')

    @section('title')
        Complaints & Suggestion
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
    <section class="comp-and-sugg">
        <div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0;">All Complaints & Suggestion</h2>
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">content</th>
                            <th scope="col">User_id</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($c as $c)
                            <tr>
                                <th scope="col">{{$c->id}}</th>
                                <th scope="col">{{$c->content}}</th>
                                <th scope="col">{{$c->user_id}}</th>  
                                <th scope="col"><a href="" class="btn btn-danger btn-sm">Delete</a></th>
                            </tr>
                        @endforeach
                        
                    </tbody>
            </table>
        </div>
    </section>
    <!-- End Complaints And Suggestion Section -->
    @stop


