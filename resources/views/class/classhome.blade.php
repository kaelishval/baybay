@extends('layouts.app')

@section('title','Class Home')

@section('content')
<h1> Welcome to Class Module Dashboard</h1>



<div class="list-group">
   
    <a href="/viewaddclass" class="list-group-item list-group-item-action">Create Class</a><br>
    <a href="/classlist" class="list-group-item list-group-item-action">View List of Class</a><br>
    <a href="/" class="list-group-item list-group-item-action">Get Back</a><br>
    
  </div>

@endsection