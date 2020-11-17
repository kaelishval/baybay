@extends('admin.admin_layout', ['activePage' => 'student-management', 'titlePage' => __('Student Management')])

@section('content-body')
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <form method="post" action="{{ route('student.store') }}" autocomplete="off" class="form-horizontal">
      @csrf
      @method('post')
      <div class="row">
        <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('First Name') }}</label>
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="form-group">
            <input class="form-control" name="first_name" id="input-section" type="text" placeholder="{{ __('First Name') }}" required/>
          </div>
        </div>
        <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('Middle Initial') }}</label>
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="form-group">
            <input class="form-control" name="middle_name" id="input-section" type="text" placeholder="{{ __('Middle Name') }}" required/>
          </div>
        </div>
        <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('Last Name') }}</label>
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="form-group">
            <input class="form-control" name="last_name" id="input-section" type="text" placeholder="{{ __('Last Name') }}" required/>
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">{{ __('Year') }}</label>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <input class="form-control" name="year" id="input-section" type="text" placeholder="{{ __('Year') }}" required />
          </div>
        </div>
        <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">{{ __('Contact') }}</label>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <input class="form-control" name="contact" id="input-section" type="text" placeholder="{{ __('(+63))') }}" required />
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-md-2 col-lg-2 col-form-label" for="input-year">{{ __('Guardian Name') }}</label>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="parent_name" id="input-year" placeholder="{{ __('Guardian Name') }}" required />
          </div>
        </div>
        <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">{{ __('Guardian Contact') }}</label>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <input class="form-control" name="pcontact" id="input-section" type="text" placeholder="{{ __('(+63)') }}" required />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <button type="submit" class="btn btn-primary">{{ __('Create Student') }}</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection