@extends('layouts.app')

@section('title','Class List')

@section('content')
<ul>
<a href="/classhome" class="btn btn-primary">Get Back</a>
</ul>
    <h1>List of Classes</h1>
    {{-- <a href="/classlist?active=1">active</a>
    <a href="/classlist?active=0">inactive</a> --}}
    
<ul>
    <table class="table">
        <thead class="thead-dark">
    <tr>
        <th scope="col">Subject</th>
        <th scope="col">Teacher Name</th>
        <th scope="col">Time Start</th>
        <th scope="col">Time End</th>
        <th scope="col">Building</th>
        <th scope="col">Room</th>
        <th scope="col">Floor</th>
        
        <th>Action</th>
      </tr>
        </thead>
        <tbody>
    @forelse ($classes as $class)
             <tr>
                
              <td>{{$class->subject}}</td> 
              <td>{{$class->teacher}}</td>
              <td>{{$class->time_start}}</td>
              <td>{{$class->time_end}}</td>
              <td>{{$class->building}}</td>
              <td>{{$class->room}}</td>
              <td>{{$class->floor}}</td>
              
             <td><a href="/classshow/{{$class->id}}" class="btn btn-info">View</a></td>
            </tr>
          
    @empty
        <li>No Class Available</li>
   @endforelse
</ul> 
</tbody>
</table>
@endsection