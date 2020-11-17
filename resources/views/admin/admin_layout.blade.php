@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="content">
                <nav class="navbar navbar-expand navbar-transparent navbar-absolute">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        @include('admin.nav.nav')
                    </div>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="content-body">
                                @yield('content-body')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
