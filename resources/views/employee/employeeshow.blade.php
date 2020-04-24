@extends('layouts.app')

@section('title','Employee Info')

@section('content')
<h1>Employee Details</h1>
<div>
<a href="/employeelist" class="btn btn-primary">Go Back</a><br>
</div><br>
<Strong>Profile Picture</Strong>
<p><img src="{{asset('storage').'/'.$employee->image}}" width="300" height="300"></p>
<Strong>First Name</Strong>
<p>{{$employee->fname}}</p>
<Strong>Middle Name</Strong>
<p>{{$employee->mname}}</p>
<Strong>Last Name</Strong>
<p>{{$employee->lname}}</p>
<Strong>Contact Number</Strong>
<p>{{$employee->contact_number}}</p>
<Strong>Gender</Strong>
<p>{{$employee->gender}}</p>
<Strong>Position</Strong>
<p>{{$employee->position}}</p>
<Strong>Address</Strong>
<p>{{$employee->address}}</p>
<Strong>Age</Strong>
<p>{{$employee->age}}</p>
<br>
<div>
<a href="/employeeshow/{{$employee->id}}/employeeedit" class="btn btn-warning">Edit</a>

<form action="/employeedelete/{{$employee->id}}" method="post">
        @method('DELETE')
        @csrf

        <button class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection