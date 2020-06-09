@extends('layouts.admin')

    @section('title')
        Add Exam Schedule
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                Add a new Exam Schedule
            </h3>
                <form action="{{route('store-exam-schedule')}}" method="post">
                    @csrf    
                    {{-- {{ csrf_token() }} --}}
                    
                         {{-- <div class="form-group col-md-6">
                            <label class="c" for="sub_name">Sub Name</label>
                            <input type="text" class="form-control" id="sub_name" name="sub_name">
                        </div> --}}


                         <div class="form-group col-md-6">
                            <label class="c" for="sub_id">Subject Code</label>
                            <select class="form-control" id="sub_id" name="sub_id" >
                                <option selected>Select a subject ..</option>
                                @foreach ($s as $s)
                                    <option value="{{$s->id}}" >{{$s->code}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="level">Level</label>
                            <input type="number" class="form-control" id="level" name="level">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="user_id">User Id</label>
                            <input type="text" class="form-control" id="user_id" name="user_id">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="day">Day</label>
                            <input type="text" class="form-control" id="day" name="day">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label class="c" for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="committee">Exam Committe</label>
                            <input type="text" class="form-control" id="committee" name="committee">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="seat">Seat Number</label>
                            <input type="number" class="form-control" id="seat" name="seat">
                        </div>

                         <div class="form-group col-md-6">
                            <label class="c" for="time">Time</label>
                            <input type="text" class="form-control" id="time" name="time">
                        </div>


                        
                        <div class="form-group col-md-3">
                            <label class="c" for="type">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option selected>Select a type ..</option>
                                <option value="first" >First</option>
                                <option value="second">Second</option>
                            </select>
                        </div>
                    
                    <input type="submit" style="margin:2px 2px 10px 14px;" class="btn btn-primary text-center" value="Save Schedule">
                    {{-- <a href="#" class="btn btn-primary text-center" style="margin-top:10px;">Save User</a> --}}
                </form>
            </div>
    </section>
    @stop