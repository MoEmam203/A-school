@extends('layouts.admin')

    @section('title')
        All Schedules subjects
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                All Study Schedules Subjects
            </h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th class="c" scope="col">Id</th>
                            <th class="c" scope="col">Sub_id</th>
                            <th class="c" scope="col">Day_order</th>
                            <th class="c" scope="col">Class_order</th>
                            <th class="c" scope="col">Level</th>   
                            <th class="c" scope="col">Edit</th>
                            <th class="c" scope="col">Delete</th>                                                                                 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($s as $s)
                            <tr>
                                <th scope="col">{{$s->id}}</th>
                                <th scope="col">{{$s->subject->code}}</th>
                                <th scope="col">{{$s->day_order}}</th>
                                <th scope="col">{{$s->class_order}}</th>
                                <th scope="col">{{$s->level}}</th>  
                                <th scope="col">
                                    <a href="{{route('edit-schedule',['id'=>$s->id])}}" class="btn btn-info btn-sm">Edit</a>
                                </th>
                                <th scope="col">                                   
                                    <form action="{{route('destroy-schedule',['id'=>$s->id])}}" method="post">
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
    @stop