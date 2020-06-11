@extends('layouts.admin')

    @section('title')
        Add result
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                Add a new result
            </h3>
                <form action="{{route('store-result')}}" method="post">
                    @csrf    
                    {{-- {{ csrf_token() }} --}}
                    
                         {{-- <div class="form-group col-md-6">
                            <label class="c" for="sub_name">Sub Name</label>
                            <input type="text" class="form-control" id="sub_name" name="sub_name">
                        </div> --}}

                        <div class="form-group col-md-6">
                            <label class="c" for="user_id">User id</label>
                            <input type="number" class="form-control" id="user_id" name="user_id">
                        </div>

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
                            <label class="c" for="result">Result</label>
                            <input type="number" class="form-control" id="result" name="result">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="degree">Degree</label>
                            <input type="text" class="form-control" id="degree" name="degree">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="c" for="final">Final</label>
                            <input type="number" class="form-control" id="final" name="final">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="mid">Midterm</label>
                            <input type="number" class="form-control" id="mid" name="mid">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="c" for="oral">Oral</label>
                            <input type="number" class="form-control" id="oral" name="oral">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="c" for="pract">Practical</label>
                            <input type="number" class="form-control" id="pract" name="pract">
                        </div>

                        
                        <div class="form-group col-md-3">
                            <label class="c" for="type">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option selected>Select a type ..</option>
                                <option value="first" >First</option>
                                <option value="second">Second</option>
                            </select>
                        </div>
                    
                    <input type="submit" style="margin:2px 2px 10px 14px;" class="btn btn-primary text-center" value="Save Result">
                    {{-- <a href="#" class="btn btn-primary text-center" style="margin-top:10px;">Save User</a> --}}
                </form>
            </div>
    </section>
    @stop