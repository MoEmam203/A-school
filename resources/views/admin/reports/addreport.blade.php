@extends('layouts.admin')

    @section('title')
        Add report
    @stop

    
    @section('content')
    <section class="comp-and-sugg">
        <div class="container">
            <h3 class="text-center" style="color: #A9D7E4; padding:20px 0;">
                Add a new rport
            </h3>
                <form action="{{route('store-report')}}" method="post">
                    @csrf    
                    {{-- {{ csrf_token() }} --}}
                    

                        <div class="form-group col-md-6">
                            <label class="c" for="user_id">User id</label>
                            <input type="number" class="form-control" id="user_id" name="user_id">
                        </div>

                         <div class="form-group col-md-6">
                            <label class="c" for="absent"> Absent Report</label>
                            <input type="text"  class="form-control" id="absent" name="absent">
                        </div>
                        
                         <div class="form-group col-md-6">
                            <label class="c" for="notes"> General Notes </label>
                            <input type="text" class="form-control" id="notes" name="notes">
                        </div>
                        {{-- <div class="form-group col-md-6">
                        <label class="c" for="absent"> Absent Report</label>
                        <textarea name="absent" style="width: 350px; height:250px"></textarea>
                        </div>
                        <hr>

                        <label class="c" for="notes"> General Notes </label>
                        <textarea name="notes"></textarea> --}}
                    
                    <input type="submit" style="margin:2px 2px 10px 14px;" class="btn btn-primary text-center" value="Save Report">
                    {{-- <a href="#" class="btn btn-primary text-center" style="margin-top:10px;">Save User</a> --}}
                </form>
            </div>
    </section>
    @stop