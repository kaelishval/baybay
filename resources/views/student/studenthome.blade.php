@extends('layouts.app')

@section('title','Student Home')

@section('content')
<h1> Welcome to Student Module Dashboard</h1>



<div class="list-group">
   
    <a href="/viewaddstudent" class="list-group-item list-group-item-action">Create Student</a><br>
    <a href="/studentlist" class="list-group-item list-group-item-action">View List of Student</a><br>
    <a href="/" class="list-group-item list-group-item-action">Get Back</a><br>
    
  </div>

@endsection