@extends('layouts.app')

@section('title','Class Info')

@section('content')
<h1>Class Details</h1>
<div>
<a href="/classlist" class="btn btn-primary">Go Back</a><br>
</div><br>
<Strong>Subject</Strong>
<p>{{$class->subject}}</p>
<Strong>Subject</Strong>
<p>{{$class->teacher}}</p>
<Strong>Time Start</Strong>
<p>{{$class->time_start}}</p>
<Strong>Time End</Strong>
<p>{{$class->time_end}}</p>
<Strong>Building</Strong>
<p>{{$class->building}}</p>
<Strong>Floor</Strong>
<p>{{$class->floor}}</p>
<Strong>Room</Strong>
<p>{{$class->room}}</p>
<br>
<div>
<a href="/classshow/{{$class->id}}/classedit" class="btn btn-warning">Edit</a>

<form action="/classdelete/{{$class->id}}" method="post">
        @method('DELETE')
        @csrf

        <button class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection