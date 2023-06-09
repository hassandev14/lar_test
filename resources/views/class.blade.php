@extends('layouts.default')

@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Class Data</h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">
 @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
                        <div class="container-fluid">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-b-30 m-t-0">Class</h4>

                                            <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Class Name</th>
                                                        <th>Fee</th>
                                                        <th>Total Subject</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                        @foreach($data as $dat)
                                                    <tr>
                                                        <td>{{$dat->id}}</td>
                                                        <td>{{$dat->class_name}}</td>
                                                       
                                                        <td>{{$dat->class_fee}}</td>
                                                        <td><a href = "subject?my_classes_id={{$dat->id}}">{{$dat->total_subjects}}</a></td>
                                                        <td>
                                                      <a href="edit_class/{{$dat->id}}"><i class= "fas fa-edit"></i></a> 
                                                      <a href="delete_class/{{$dat->id}}"><i class="fas fa-trash"></i></a> 
                                                      <a href="add_class_fee/{{$dat->id}}"><i></i>Add Class Fee</a><br>
                                                      <a href="class_fee_history/{{$dat->id}}"><i></i>See Class Fee History</a> <br>
                                                      <a href="add_exam/{{$dat->id}}"><i></i>Add Exam Shedule</a> 
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div> <!-- End Row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->
@stop

