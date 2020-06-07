@extends('layouts.admin')

    @section('title')
        Add Subject
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                Add a new Subject
            </h3>
                <form action="{{route('store-subject')}}" method="post">
                    @csrf    
                    {{-- {{ csrf_token() }} --}}
                    
                        <div class="form-group col-md-6">
                            <label class="c" for="code">Code</label>
                            <input type="text" class="form-control" id="code" name="code">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        
                        <div class="form-group col-md-6 ">
                            <label class="c" for="des">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="level">Level</label>
                            <input type="number" class="form-control" id="level" name="level">
                        </div>
                    
                    
                    <input type="submit" style="margin:2px 2px 10px 14px;" class="btn btn-primary text-center" value="Save Subject">
                    {{-- <a href="#" class="btn btn-primary text-center" style="margin-top:10px;">Save User</a> --}}
                </form>
            </div>
    </section>
    @stop