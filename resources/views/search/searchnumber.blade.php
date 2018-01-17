@extends('welcome')
@section('content')
    <div class="search">
        <label>Mobile No.:</label>
        <input type="text" size="30" onkeyup="showUser(this.value)" placeholder="Search By Mobile No" >
    </div>
@endsection