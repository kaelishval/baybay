@extends('layouts.app')

@section('title','Add Student')

@section('content')
<ul>
<li><a href="/studentshow/{{$student->id}}">Get Back</a></li>
</ul>
    <h1>Editing of Student</h1>

    <form action="/studentshow/{{$student->id}}" method="post" enctype="multipart/form-data">

       @method('PATCH')

        Id Number:   <input type="text" name="id_number" autocomplete="off" value="{{$student->id_number}}"><br>
        First Name:  <input type="text" name="fname" autocomplete="off" value="{{$student->fname}}"><br>
        Middle Name:  <input type="text" name="mname" autocomplete="off" value="{{$student->mname}}"><br>
        Last Name:   <input type="text" name="lname" autocomplete="off" value="{{$student->lname}}"><br>
        
        Gender: <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>
        <br>
        <br>
        Contact Number: <input type="text" name="contact_number" autocomplete="off" value="{{$student->contact_number}}"><br>
        Address : <input type="text" name="address" autocomplete="off" value="{{$student->address}}"><br>
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
        Mother's Name: <input type="text" name="mothername" autocomplete="off" value="{{$student->mothername}}"><br>
        Mother's Occupation: <input type="text" name="mother_occupation" autocomplete="off" value="{{$student->mother_occupation}}"><br>
        Mother's Contact Number:<input type="text" name="mother_cnumber" autocomplete="off" value="{{$student->mother_cnumber}}"><br>
        <br>
        <br>
        Father's Name:<input type="text" name="fathername" autocomplete="off" value="{{$student->fathername}}"><br>
        Father's Occupation:<input type="text" name="father_occupation" autocomplete="off" value="{{$student->father_occupation}}"><br>
        Father's Contact Number:<input type="text" name="father_cnumber" autocomplete="off" value="{{$student->father_cnumber}}"><br>
        <br>
        <div class="form-group">
          <label for="image">Profile Image</label>
          <input type="file" name="image">
          <div>{{$errors->first('image')}}</div>
        </div><br>
        @csrf
        <button>Edit Student</button>
    </form>
    {{-- @error('fname') {{$message}}@enderror<br>
    @error('lname') {{$message}}@enderror<br>
    @error('section_name') {{$message}}@enderror<br>
    @error('grade_level') {{$message}}@enderror<br> --}}

@endsection 