@extends('welcome')
@section('content')
    <div class="search">
        <label>City:</label>
        <input type="text" size="30" onkeyup="showUser(this.value)" placeholder="Search By City Name" >
    </div>
@endsection