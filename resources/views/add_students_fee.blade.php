@extends('layouts.default')

@section('content')
<!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Student Fees </h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">
                   
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                        <div class="card-body">
                                            <h4 class="m-t-0 m-b-30"> Add Student Fees</h4>

                                            <form action="{{url('student_fee_save_paid')}}" class="form-horizontal" role="form" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="Address">Select Date</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control hassaan" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name="submit_date" required>
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label">Class</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name='class_id' id="class_id" required>
                                                        <option value="" >Select Class</option>
                                                            @foreach($classes as $cal)
                                                            <option value="{{$cal->id}}">{{$cal->class_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex flex-row-reverse">
                                                    <div class="col-sm-10 ">
                                                    <input type="button" value="Add student fees"  class='btn btn-primary' onClick="get_students_for_fee()"> 
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex flex-row-reverse">
                                                    <div class="col-sm-10 ">
                                                <div id="std_div"></div>
                                                </div>
                                                </div> 
                                                
                                            </form>
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                                </div> <!-- col -->
                            </div> 



                        </div><!-- container-fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->
            @stop      