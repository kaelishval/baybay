@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to the Dashboard Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/studenthome" class="btn btn-dark">Student Side</a>
                    <a href="/employeehome" class="btn btn-dark">Employee Side</a>
                    <a href="/classhome" class="btn btn-dark">Create Class</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
