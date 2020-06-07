@extends('layouts.admin')

    @section('title')
        Complaints & Suggestion
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
    <section class="comp-and-sugg">
        <div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0;  text-align:center">All Complaints & Suggestion</h2>
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th class="c" scope="col">Id</th>
                            <th class="c" scope="col">content</th>
                            <th class="c" scope="col">User_id</th>
                            <th class="c" scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($c as $c)
                            <tr>
                                <th scope="col">{{$c->id}}</th>
                                <th scope="col">{{$c->content}}</th>
                                <th scope="col">{{$c->user_id}}</th>  
                                <th scope="col">
                                    <form action="{{route('destroy-complaint',['id'=>$c->id])}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                   </form>
                                </th>
                            </tr>
                        @endforeach
                        
                    </tbody>
            </table>
        </div>
    </section>
    <!-- End Complaints And Suggestion Section -->
    @stop


