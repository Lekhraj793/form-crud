@extends('welcome')
@section('content')
    <div class="container">

        <form method="post" action="/form" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group col-sm-6">
                <label><span class="glyphicon glyphicon-user"></span>First Name:</label>
                <input type="text" name="fname" class="form-control glyphicon glyphicon-user"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Last Name:</label>
                <i class="fa fa-user"></i><input type="text" name="lname" class="form-control"></span>
                <br>
            </div>
            <div class="form-group col-sm-6">
                <label>Email:</label>
                <input type="email" name="email" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Mobile:</label>
                <input type="text" name="mobile" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Date of Birth:</label>
                <input type="date" name="dob" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Address:</label>
                <input type="text" name="address" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>City:</label>
                <input type="text" name="city" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>State:</label>
                <input type="text" name="state" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Pin No.:</label>
                <input type="text" name="pin" class="form-control"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Image:</label>
                <input type="file" name="image" class="form-control"><br>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="float: left; margin-left: 190px; width: 200px;">
        </form>
    </div>
@endsection