@extends('layouts.app')

@section('title','Add Student')

@section('content')
<ul>
<li><a href="/studenthome">Get Back</a></li>
</ul>
    <h1>Adding of Student</h1>

    <form action="/addstudent" method="post" enctype="multipart/form-data">
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
        Section Name:<select name="section_name">
            <option value="bayabas">bayabas</option>
            <option value="mangga">mangga</option>
            <option value="santol">santol</option>
            <option value="sagging">sagging</option>
          </select><br>
        Grade Level:<select name="grade_level">
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
            
          </select><br>
        <br>
        <br>
        Mother's Name: <input type="text" name="mothername" autocomplete="off"><br>
        Mother's Occupation: <input type="text" name="mother_occupation" autocomplete="off"><br>
        Mother's Contact Number:<input type="text" name="mother_cnumber" autocomplete="off"><br>
        <br>
        <br>
        Father's Name:<input type="text" name="fathername" autocomplete="off"><br>
        Father's Occupation:<input type="text" name="father_occupation" autocomplete="off"><br>
        Father's Contact Number:<input type="text" name="father_cnumber" autocomplete="off"><br>
        <br>
        <div class="form-group">
          <label for="image">Profile Image</label>
          <input type="file" name="image">
          <div>{{$errors->first('image')}}</div>
        </div><br>
        @csrf
        <button>Add Student</button>
    </form>
    {{-- @error('fname') {{$message}}@enderror<br>
    @error('lname') {{$message}}@enderror<br>
    @error('section_name') {{$message}}@enderror<br>
    @error('grade_level') {{$message}}@enderror<br> --}}

@endsection 