@extends('layouts.app')

@section('title','Add Employee')

@section('content')
<ul>
<li><a href="/employeehome">Get Back</a></li>
</ul>
    <h1>Adding of Employee</h1>

    <form action="/addemployee" method="post" enctype="multipart/form-data">
        Id Number:   <input type="text" name="id_number" autocomplete="off"><br>
        First Name:  <input type="text" name="fname" autocomplete="off"><br>
        Middle Name:  <input type="text" name="mname" autocomplete="off"><br>
        Last Name:   <input type="text" name="lname" autocomplete="off"><br>
        
        Gender: <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>
        <br>
        <br>
        Contact Number: <input type="text" name="contact_number" autocomplete="off"><br>
        Address : <input type="text" name="address" autocomplete="off"><br>
        <br>
        <br>
       
        Position: <select name="position">
            <option value="Teacher">Teacher</option>
            <option value="Nurse">Nurse</option>
            <option value="Doctor">Doctor</option>
            <option value="Librarian">Librarian</option>
          </select><br>
        <br>
        <br>
        Age: <input type="text" name="age" autocomplete="off"><br>
        
        <br>
        <div class="form-group">
          <label for="image">Profile Image</label>
          <input type="file" name="image">
          <div>{{$errors->first('image')}}</div>
        </div><br>
        @csrf
        <button>Add Employee</button>
    </form>
    {{-- @error('fname') {{$message}}@enderror<br>
    @error('lname') {{$message}}@enderror<br>
    @error('section_name') {{$message}}@enderror<br>
    @error('grade_level') {{$message}}@enderror<br> --}}

@endsection 