@extends('layouts.admin')

    @section('title')
        All Subjects
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                All Subjects
            </h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th class="c" scope="col">Id</th>
                            <th class="c" scope="col">Code</th>
                            <th class="c" scope="col">Name</th>
                            <th class="c" scope="col">Description</th>
                            <th class="c" scope="col">Level</th>                                                                                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sub as $s)
                            <tr>
                                <th scope="col">{{$s->id}}</th>
                                <th scope="col">{{$s->code}}</th>
                                <th scope="col">{{$s->name}}</th>
                                <th scope="col">{{$s->description}}</th>
                                <th scope="col">{{$s->level}}</th>                               
                            </tr>
                        @endforeach
                        
                    </tbody>
            </table>
            </div>
    </section>
    @stop