@extends('layouts.app')

@section('title','Add Employee')

@section('content')
<ul>
<li><a href="/employeeshow/{{$employee->id}}">Get Back</a></li>
</ul>
    <h1>Editing of Employee</h1>

    <form action="/employeeshow/{{$employee->id}}" method="post" enctype="multipart/form-data">

        @method('PATCH')
      
        Id Number:   <input type="text" name="id_number" autocomplete="off" value="{{$employee->id_number}}"><br>
        First Name:  <input type="text" name="fname" autocomplete="off" value="{{$employee->fname}}"><br>
        Middle Name:  <input type="text" name="mname" autocomplete="off" value="{{$employee->mname}}"><br>
        Last Name:   <input type="text" name="lname" autocomplete="off" value="{{$employee->lname}}"><br>
        
        Gender: <input type="radio" name="gender" value="male" > Male
        <input type="radio" name="gender" value="female"> Female<br>
        <br>
        <br>
        Contact Number: <input type="text" name="contact_number" autocomplete="off" value="{{$employee->contact_number}}"><br>
        Address : <input type="text" name="address" autocomplete="off" value="{{$employee->address}}"><br>
        <br>
        <br>
       
        Position: <select name="position" >
            <option value="Teacher">Teacher</option>
            <option value="Nurse">Nurse</option>
            <option value="Doctor">Doctor</option>
            <option value="Librarian">Librarian</option>
          </select><br>
        <br>
        <br>
        Age: <input type="text" name="age" autocomplete="off" value="{{$employee->age}}"><br>
        
        <br>
        <div class="form-group">
          <label for="image">Profile Image</label>
          <input type="file" name="image">
          <div>{{$errors->first('image')}}</div>
        </div><br>
        @csrf
        <button>Edit Employee</button>
    </form>
    {{-- @error('fname') {{$message}}@enderror<br>
    @error('lname') {{$message}}@enderror<br>
    @error('section_name') {{$message}}@enderror<br>
    @error('grade_level') {{$message}}@enderror<br> --}}

@endsection 