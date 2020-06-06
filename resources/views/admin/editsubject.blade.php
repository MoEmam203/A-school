@extends('layouts.admin')

    @section('title')
        Edit Subject
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                Edit Subject
            </h3>
                <form action="{{route('update-subject',['id'=>$sub->id])}}" method="post">
                    @csrf    
                    {{-- {{ csrf_token() }} --}}
                    {{method_field('PUT')}}
                        <div class="form-group col-md-6">
                            <label class="c" for="code">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{$sub->code}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$sub->name}}">
                        </div>
                        
                        <div class="form-group col-md-6 ">
                            <label class="c" for="des">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$sub->description}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="level">Level</label>
                            <input type="number" class="form-control" id="level" name="level" value="{{$sub->level}}">
                        </div>
                    
                    
                    <input type="submit" style="margin:2px 2px 10px 14px;" class="btn btn-primary text-center" value="Save Subject">
                    {{-- <a href="#" class="btn btn-primary text-center" style="margin-top:10px;">Save User</a> --}}
                </form>
            </div>
    </section>
    @stop