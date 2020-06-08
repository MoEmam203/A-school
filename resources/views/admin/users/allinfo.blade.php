@extends('layouts.admin')

    @section('title')
        All Information
    @stop

    
    @section('content')
        <!-- Start Complaints And Suggestion Section -->
    <section class="comp-and-sugg">
        <div class="container">
            <h2 style="color: #A9D7E4; padding:20px 0; text-align:center">All Information</h2>
            <div class="media" >
                <img src ="{{asset($user->img)}}" class="align-self-start mr-3" style="margin-left: 135px;" >
                <div class="media-body" style="margin-left: 55px; font-size:20px;">
                    <label class="c" for="id">Id: {{$user->id}}</label>
                    <br>
                    <label class="c" for="name">Name: {{$user->name}}</label>
                    <br>
                    <label class="c" for="email">Email: {{$user->email}}</label>
                    <br>
                    <label class="c" for="is_admin">Is_admin: {{$user->is_admin}}</label>
                    <br>
                    @if($user->is_admin=='student')
                    <label class="c" for="level">Level: {{$user->level}}</label>
                    <br>
                    <label class="c" for="parent_id">Parent_id: {{$user->parent_id}}</label>
                    <br>
                    @endif
                    <label class="c" for="address">Address: {{$user->address}}</label>
                    <br>
                    <label class="c" for="dob">Dob: {{$user->dob}}</label>
                    <br>
                    <label class="c" for="blood_type">Blood_type: {{$user->blood_type}}</label>
                    <br>
                    @if($user->is_admin=='parent')
                    <label class="c" for="job">Job: {{$user->job}}</label>
                    <br> 
                    @endif
                    <label class="c" for="type">Type: {{$user->type}}</label>
                    <br> 
                    <label class="c" for="age">Age: {{$user->age}}</label>
                    <br>
                    <div class="button-raper" style="display: flex;">                    
                        <a href="{{route('edit-user',['id'=>$user->id])}}" class="btn btn-info" style="font-size:20px; margin:20px 10px 0px 0px; padding:7px 48px; ">Edit</a>

                        <form action="{{route('destroy-user',['id'=>$user->id])}}" method="post" >
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-sm btn-danger" style="margin:20px 10px 0px 0px; padding:8px 41px; font-size:20px;">Delete</button>
                        </form>
                    </div>
                    {{-- <a href="" class="btn btn-danger" style="margin:20px 0px 0px 0px;">Delete</a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Complaints And Suggestion Section -->
    @stop


