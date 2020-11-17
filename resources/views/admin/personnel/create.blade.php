@extends('admin.admin_layout')

@section('content-body')
<div class="row">
    <h2>Create Personnel</h2>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{ route('personnel.store') }}" autocomplete="off" class="form-horizontal">
        @csrf
        @method('post')
        <div class="row">
            <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('First Name') }}</label>
            <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <input class="form-control" name="first_name" type="text" placeholder="{{ __('First Name') }}" required/>
            </div>
            </div>
            <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('Middle Initial') }}</label>
            <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <input class="form-control" name="middle_name" type="text" placeholder="{{ __('Middle Initial') }}" required/>
            </div>
            </div>
            <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('Last Name') }}</label>
            <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <input class="form-control" name="last_name" type="text" placeholder="{{ __('Last Name') }}" required/>
            </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">{{ __('Contact Number') }}</label>
            <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <input class="form-control" name="contact" type="text" placeholder="{{ __('(+63)') }}" required="true" aria-required="true"/>
            </div>
            </div>
            <label class="col-sm-1 col-md-1 col-lg-1 col-form-label">{{ __('Address') }}</label>
            <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <input class="form-control" name="address" type="text" placeholder="{{ __('Address') }}" required="true" aria-required="true"/>
            </div>
            </div>
        </div>
        <div class="row">
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">{{ __('Email') }}</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <input class="form-control" name="email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />
            </div>
            </div>
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">{{ __('Personnel Type') }}</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <select name="personnel_type" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Counselor">Councelor</option>
                        <option value="HealthCare">HealthCareProfessional</option>
                        <option value="Librarian">Librarian</option>
                        <option value="Principal">Principal</option>
                </select>
            </div>
            </div>
        </div>
        <div class="row">
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label" for="input-password">{{ __(' Password') }}</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" required />
            </div>
            </div>
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" required />
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">{{ __('Add Personnel') }}</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection