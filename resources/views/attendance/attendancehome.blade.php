@extends('layouts.app')

@section('title','Attendace Home')

@section('content')
<ul>
    <a href="/" class="btn btn-primary">Logout</a>
    </ul>
<h1> Welcome Teacher</h1>
    <script>
        const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
    ];

        var currentDate = new Date();
        const month = new Date();
        var day = currentDate.getDay();
        var year = currentDate.getFullYear();
        var fullDate = monthNames[month.getMonth()]+" "+day+" "+year; 
        document.write(fullDate);
    </script>

<ul>
    <h1>Today's Classesss</h1>
    <table class="table">
        <thead class="thead-dark">
    <tr>
        <th scope="col">Subject</th>
        <th scope="col">Class Start</th>
        <th scope="col">Class End</th>
        <th scope="col">Room</th>
        <th scope="col">Floor</th>
        <th scope="col">Building</th>
        
        
        <th>Action</th>
      </tr>
        </thead>
        <tbody>
    @forelse ($classes as $class)
             <tr>
                
              <td>{{$class->subject}}</td> 
              <td>{{$class->time_start}}</td>
              <td>{{$class->time_end}}</td>
              <td>{{$class->room}}</td>
              <td>{{$class->floor}}</td>
              <td>{{$class->building}}</td>
              
             <td><a href="/classshow/{{$class->id}}" class="btn btn-info">View</a></td>
            </tr>
          
    @empty
        <li>No Class Available</li>
   @endforelse
</ul> 


@endsection