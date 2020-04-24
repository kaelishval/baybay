@extends('layouts.app')

@section('title','Student Info')

@section('content')
<h1>Student Details</h1>
<div>
<a href="/studentlist" class="btn btn-primary">Go Back</a><br>
</div><br>
<Strong>Profile Picture</Strong>
<p><img src="{{asset('storage').'/'.$student->image}}" width="300" height="300"></p>
<Strong>First Name</Strong>
<p>{{$student->fname}}</p>
<Strong>Middle Name</Strong>
<p>{{$student->mname}}</p>
<Strong>Last Name</Strong>
<p>{{$student->lname}}</p>
<Strong>Gender</Strong>
<p>{{$student->gender}}</p>
<Strong>Contact Number</Strong>
<p>{{$student->contact_number}}</p>
<Strong>Mother Name</Strong>
<p>{{$student->mothername}}</p>
<Strong>Mother Contact Number</Strong>
<p>{{$student->mother_cnumber}}</p>
<Strong>Father Name</Strong>
<p>{{$student->fathername}}</p>
<Strong>Father Contact Number</Strong>
<p>{{$student->father_cnumber}}</p>
<Strong>Address</Strong>
<p>{{$student->address}}</p>
<br>
<div>
<a href="/studentshow/{{$student->id}}/studentedit" class="btn btn-warning">Edit</a>

<form action="/studentdelete/{{$student->id}}" method="post">
        @method('DELETE')
        @csrf

        <button class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection