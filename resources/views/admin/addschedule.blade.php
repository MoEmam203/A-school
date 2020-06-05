@extends('layouts.admin')

    @section('title')
        Add Schedule
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                Add a new Schedule
            </h3>
                <form action="{{route('store-schedule')}}" method="post">
                    @csrf    
                    {{-- {{ csrf_token() }} --}}
                    
                        <div class="form-group col-md-6">
                            <label class="c" for="level">Level</label>
                            <input type="number" class="form-control" id="level" name="level">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="day_order">Day_order</label>
                            <input type="number" class="form-control" id="day_order" name="day_order">
                        </div>
                        
                        <div class="form-group col-md-6 ">
                            <label class="c" for="class_order">class_order</label>
                            <input type="number" class="form-control" id="class_order" name="class_order">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="sub_id">Sub_id</label>
                            <input type="number" class="form-control" id="sub_id" name="sub_id">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="c" for="exam_id">Exam_id</label>
                            <input type="number" class="form-control" id="exam_id" name="e_id">
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