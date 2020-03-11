@extends('layouts.app')

@section('title','Add Class')

@section('content')
<ul>
    <li><a href="/classhome">Get Back</a></li>
    </ul>
        <h1>Adding of CLass</h1>
    
        <form action="/addclass" method="post">
        Teacher Name:  <input type="text" name="teacher" autocomplete="off" value="{{old('teacher')}}"><br>
            Subject:  <input type="text" name="subject" autocomplete="off" value="{{old('subject')}}"><br>
            Time Start:  <input type="time" name="time_start" autocomplete="off" value="{{old('time_start')}}"><br>
            Time End:   <input type="time" name="time_end" autocomplete="off" value="{{old('time_end')}}"><br>
            Building:   <input type="text" name="building" autocomplete="off" value="{{old('building')}}"><br>
            Floor:<input type="text" name="floor" autocomplete="off" value="{{old('floor')}}"><br>
            Room:   <input type="text" name="room" autocomplete="off" value="{{old('room')}}"><br>
            
            <br>
            @csrf
            <button>Add Class</button>
        </form>
@endsection