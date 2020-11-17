@extends('admin.admin_layout')

@section('content-body')
<div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-hover" id="personnelTable">
        <thead class=" text-primary">
          <th>
              {{ __('Name') }}
          </th>
          <th>
            {{ __('Email') }}
          </th>
          <th>
            {{ __('Type') }}
          </th>
          <th class="text-right">
            {{ __('Actions') }}
          </th>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>
                {{ $user->first_name.' '.$user->last_name }}
              </td>
              <td>
                {{ $user->email }}
              </td>
              <td>
                {{ $user->personnel_type}}
              </td>
              <td class="text-right">
                  <form action="{{ route('personnel.destroy', $user->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <a href="#" class="btn btn-primary" type="button">View</a>
                      <a href="{{ route('personnel.edit', $user->id)}}"  class="btn btn-primary" type="button">Edit</a>
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection