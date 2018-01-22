@extends('welcome')
@section('content')

    <div class="container">
        <form method="post" action="/update" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" hidden name="id" value="{{$student->id}}">

            <div class="form-group col-sm-6">
                <label>First Name:</label>
                <input type="text" name="fname" class="form-control" value="{{$student->fname}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Last Name:</label>
                <input type="text" name="lname" class="form-control" value="{{$student->lname}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="{{$student->email}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Mobile:</label>
                <input type="text" name="mobile" class="form-control" value="{{$student->mobile}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Date of Birth:</label>
                <input type="date" name="dob" class="form-control" value="{{$student->dob}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Address:</label>
                <input type="text" name="address" class="form-control" value="{{$student->address}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>City:</label>
                <input type="text" name="city" class="form-control" value="{{$student->city}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>State:</label>
                <input type="text" name="state" class="form-control" value="{{$student->state}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Pin No.:</label>
                <input type="text" name="pin" class="form-control" value="{{$student->pin}}"><br>
            </div>
            <div class="form-group col-sm-6">
                <label>Image:</label>
                <input type="file" name="image" class="form-control" value="{{$student->image}}"><br>
            </div>

            <input type="submit" name="submit" value="update" class="btn btn-primary" style="float: left; margin-left: 190px; width: 200px;">
        </form>
    </div>
@endsection
