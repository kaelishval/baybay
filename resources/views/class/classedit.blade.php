@extends('layouts.app')

@section('title','Edit Class')

@section('content')
<ul>
<li><a href="/classshow/{{$class->id}}">Get Back</a></li> 
    </ul>
        <h1>Edit Class Details</h1>
    
<form action="/classshow/{{$class->id}}" method="post">

            @method('PATCH')

            Teacher Name:  <input type="text" name="teacher" autocomplete="off" value="{{$class->teacher}}"><br>
            Subject:  <input type="text" name="subject" autocomplete="off" value="{{$class->subject}}"><br>
            Time Start:  <input type="time" name="time_start" autocomplete="off" value="{{$class->time_start}}"><br>
            Time End:   <input type="time" name="time_end" autocomplete="off" value="{{$class->time_end}}"><br>
            Building:   <input type="text" name="building" autocomplete="off" value="{{$class->building}}"><br>
            Floor:<input type="text" name="floor" autocomplete="off" value="{{$class->floor}}"><br>
            Room:   <input type="text" name="room" autocomplete="off" value="{{$class->room}}"><br>
            
            <br>
            @csrf
            <button>Save Edited Class</button>
        </form>
@endsection