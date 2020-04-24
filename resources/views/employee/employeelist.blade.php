@extends('layouts.app')

@section('title','Employee List')

@section('content')
<ul>
<li><a href="/employeehome">Get Back</a></li>
</ul>
    <h1>List of Employee</h1>
<ul>
    <table style="width:100%">
    <tr>
        <th>Id Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Position</th>
        <th>Picture</th>
        <th>Action</th>
      </tr>
    @forelse ($employees as $employee)
             <tr>
              <td>{{$employee->id_number}}</td>
              <td>{{$employee->fname}}</td>
              <td>{{$employee->lname}}</td>
              <td>{{$employee->gender}}</td>
              <td>{{$employee->position}}</td>
              <td><img src="{{asset('storage').'/'.$employee->image}}" width="100" height="100"></td>
             
              <td><a href="/employeeshow/{{$employee->id}}" class="btn btn-info">View</a></td>
            </tr>
          
    @empty
        <li>No Students Available</li>
   @endforelse
</ul> 
</table>
@endsection