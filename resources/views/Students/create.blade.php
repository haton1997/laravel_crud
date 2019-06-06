@extends('layouts/master')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" name="category" action="{{url('students')}}" method="post">
                {{ csrf_field() }}

                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" value="{{old('name')}}"class="form-control" id="exampleInputEmail1"
                               placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="text" name="age" value="{{old('age')}}" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter age">
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
@endsection