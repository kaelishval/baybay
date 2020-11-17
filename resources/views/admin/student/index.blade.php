@extends('admin.admin_layout')

@section('content-body')
<div class="row">
  <div class="table-responsive">
    <table class="table" id="studentTable">
      <thead class=" text-primary">
        <th>
            {{ __('Name') }}
        </th>
        <th>
          {{ __('Year') }}
        </th>
        <th>
          {{ __('Secction') }}
        </th>
        <th>
          {{ __('Teacher/Adviser') }}
        </th>
        <th class="text-right">
          {{ __('Actions') }}
        </th>
      </thead>
      <tbody>
        @foreach($students as $student)
          <tr>
            <td>
              {{ $student->first_name.' '.$student->last_name }}
            </td>
            <td>
              {{ $student->year }}
            </td>
            <td>
            @foreach($sections as $section)
              @if ($section->id == $student->section_id)
                {{ $section->section_name }} 
            </td>
            <td>
                @foreach($users as $user)
                  @if ($user->id == $section->user_id)
                    {{ $user->first_name.' '.$user->last_name }}
                  @endif
                @endforeach
              @endif
            @endforeach
            </td>
            <td class="text-right">
                <form action="{{ route('student.destroy', $student->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="#" class="btn btn-primary" type="button">View</a>
                    <a href="{{ route('student.edit', $student->id)}}" class="btn btn-primary" type="button">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
