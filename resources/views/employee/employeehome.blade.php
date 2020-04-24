@extends('layouts.app')

@section('title','Employee Home')

@section('content')
<h1> Welcome to Student Module Dashboard</h1>



<div class="list-group">
   
    <a href="/viewaddemployee" class="list-group-item list-group-item-action">Create Employee</a><br>
    <a href="/employeelist" class="list-group-item list-group-item-action">View List of Employee</a><br>
    <a href="/" class="list-group-item list-group-item-action">Get Back</a><br>
    
  </div>

@endsection