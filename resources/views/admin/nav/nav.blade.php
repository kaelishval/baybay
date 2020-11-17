<div class="collapse navbar-collapse justify-content-end">
    <!-- <a href="#" class="sidenav-trigger" data-target="mobile-nav">
	    <i class="material-icons">menu</i>
	</a> -->
    <ul id="nav-mobile" class="navbar-nav">
        <li class="nav-item dropdow">
            <a id="personnelDropdown" class="nav-link navbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('PERSONNEL') }}</a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="personnelDropdown">
            <a class="dropdown-item" href="{{ route('personnel.index') }}">{{ __('Personnel Table') }}</a>
            <a class="dropdown-item" href="{{ route('personnel.create') }}">{{ __('Add Personnel') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a id="studentDropdown" class="nav-link navbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('STUDENT') }}</a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="studentDropdown">
            <a class="dropdown-item" href="{{ route('student.index') }}">{{ __('Student Table') }}</a>
            <a class="dropdown-item" href="{{ route('student.create') }}">{{ __('Add Student') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a id="sectionDropdown" class="nav-link navbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('SECTION') }}</a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="sectionDropdown">
            <a class="dropdown-item" href="{{ route('section.index') }}">{{ __('Section Table') }}</a>
            <a class="dropdown-item" href="{{ route('section.create') }}">{{ __('Add Section') }}</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->first_name." ".Auth::user()->last_name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</div>