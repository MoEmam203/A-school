@extends('layouts.admin')

    @section('title')
        Edit User
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center">
                Edit User
            </h3>
                <form action="{{route('update-user',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                    @csrf    
                    {{method_field('PUT')}}
                    {{-- {{ csrf_token() }} --}}
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="c" for="id">Id</label>
                            <input type="number" class="form-control" id="id" name="id" value="{{$user->id}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label class="c" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="c" for="is_admin">Is_Admin</label>
                            <select class="form-control" id="is_admin" name="is_admin" >
                                <option selected>Select a type ..</option>
                                <option value="admin" >Admin</option>
                                <option value="student" >Student</option>
                                <option value="parent" >Parent</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="dob">DOB</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{$user->dob}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="image">Image</label>
                            <input type="file" class="form-control-file" style="color:  #A9D7E4;" id="image" name="image">
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label class="c" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="c" for="level">Level</label>
                            <input type="number" class="form-control" id="level" name="level" value="{{$user->level}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="parent_id">Parent_id</label>
                            <input type="number" class="form-control" id="parent_id" name="parent_id" value="{{$user->parent_id}}">
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label class="c" for="type">Type</label>
                            <select class="form-control" id="type" name="type" >
                                <option selected>Select a type ..</option>
                                <option value="male" >Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{$user->age}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="c" for="job">Job</label>
                            <input type="text" class="form-control" id="job" name="job" value="{{$user->job}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="c" for="blood_type">Blood_Type</label>
                            <select class="form-control" id="type" name="blood_type">
                                <option selected>Select a blood type ..</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>                       
                    </div>
                    <input type="submit" class="btn btn-primary text-center" value="Save User">
                    {{-- <a href="#" class="btn btn-primary text-center" style="margin-top:10px;">Save User</a> --}}
                </form>
            </div>
    </section>
    @stop