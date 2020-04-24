@extends('layouts.app')

@section('title','Student List')

@section('content')
<ul>
<li><a href="/studenthome">Get Back</a></li>
</ul>
    <h1>List of Student</h1>
<ul>
    <table style="width:100%">
    <tr>
        <th>Id Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Section Name</th>
        <th>Grave Level</th>
        <th>Picture</th>
        <th>Action</th>
      </tr>
    @forelse ($students as $student)
             <tr>
              <td>{{$student->id_number}}</td>
              <td>{{$student->fname}}</td>
              <td>{{$student->lname}}</td>
              <td>{{$student->gender}}</td>
              <td>{{$student->section_name}}</td>
              <td>{{$student->grade_level}}</td>
              <td><img src="{{asset('storage').'/'.$student->image}}" width="100" height="100"></td>
             
              <td><a href="/studentshow/{{$student->id}}" class="btn btn-info">View</a></td>
            </tr>
          
    @empty
        <li>No Students Available</li>
   @endforelse
</ul> 
</table>
@endsection