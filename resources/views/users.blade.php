@extends('welcome')
@section('content')

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <form method="post" class="navbar-form navbar-left" action="/form/edit">
                {{csrf_field()}}

                {{--<select name="forma"  style="margin-left: 323px;margin-top: 20px;background-color:--}}
                 {{--burlywood;font-size: 17px; "onchange="location = this.value;" class="btn btn-primary dropdown-toggle">--}}
                    {{--<option value="">::Searching Panel::.</option>--}}
                    {{--<option value="/search/searchnumber">1.Search By Mobile No</option>--}}
                    {{--<option value="/search/searchuserid.php">2.Search By Id</option>--}}
                    {{--<option value="/search/searchcity">3.Search District</option>--}}
                    {{--<option value="/search/searchdistic.php">4.Select Didtrict Wise</option>--}}
                    {{--<option value="/search/ajax_pagination/index.php">5.Search By Any Keyword</option>--}}
                {{--</select>--}}
                    <input type="text" name="search" class="form-control" placeholder="Search" style="float: left; margin-left: 900px;">
                    <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>
    </nav>
    <table class="table">

        <a href="/form/insert" class="btn btn-primary">Create User</a>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">city</th>
        </tr>
        </thead>

        @foreach($students as $student)
        <tbody>
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td><img src="<?php echo asset("/images/images/".$student->id.".jpeg")?>"
                     alt="Product image cap" class="img-thumbnail rounded mx-auto d-block" style="display:block;
                          width: 150px; height: 150px" ></td>
            <td>{{$student->fname." ".$student->lname}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->city}}</td>
            <td><a href="/form/edit/{{$student->id}}" class="btn btn-primary">Edit</a></td>
            <td><a href="/delete/{{$student->id}}" class="btn btn-danger">Delete</a></td>
        </tr>

        </tbody>
        @endforeach
    </table>
