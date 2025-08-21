<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#7a8cf5" viewBox="0 0 24 24">
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M12 14c-5 0-9 2.5-9 5.5V22h18v-2.5c0-3-4-5.5-9-5.5z"/>
                    </svg>
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <!-- Section One (Hero Section) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.index') }}">
                <span class="menu-title">Section One (Hero)</span>
            </a>
        </li>
        <!-- Section Two (About) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.two') }}">
                <span class="menu-title">Section Two (About)</span>
            </a>
        </li>
        <!-- Section Three (Sevice section) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.three') }}">
                <span class="menu-title">Section Three (Services)</span>
            </a>
        </li>
        <!-- Section four (portfolio section) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.four') }}">
                <span class="menu-title">Section Four (Portfolio)</span>
            </a>
        </li>
        <!-- section five (team section) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.five') }}">
                <span class="menu-title">Section Five (Team)</span>
            </a>
        </li>
        <!-- section six (faqs) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.six') }}">
                <span class="menu-title">Section Six (FAQs)</span>
            </a>
        </li>
        <!-- Section Seven (Contact Section) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.seven') }}">
                <span class="menu-title">Section Seven (Contact)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('section.eight') }}">
                <span class="menu-title">Section Eight (Developers)</span>
            </a>
        </li>

        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">--}}
        {{-- <span class="menu-title">Basic UI Elements</span>--}}
        {{-- <i class="menu-arrow"></i>--}}
        {{-- <i class="mdi mdi-crosshairs-gps menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- <div class="collapse" id="ui-basic">--}}
        {{-- <ul class="nav flex-column sub-menu">--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.button') }}">Buttons</a>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.dropdown') }}">Dropdowns</a>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.typography') }}">Typography</a>--}}
        {{-- </li>--}}
        {{-- </ul>--}}
        {{-- </div>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">--}}
        {{-- <span class="menu-title">Icons</span>--}}
        {{-- <i class="mdi mdi-contacts menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- <div class="collapse" id="icons">--}}
        {{-- <ul class="nav flex-column sub-menu">--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.font') }}">Font Awesome</a>--}}
        {{-- </li>--}}
        {{-- </ul>--}}
        {{-- </div>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">--}}
        {{-- <span class="menu-title">Forms</span>--}}
        {{-- <i class="mdi mdi-format-list-bulleted menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- <div class="collapse" id="forms">--}}
        {{-- <ul class="nav flex-column sub-menu">--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.forms') }}">Form Elements</a>--}}
        {{-- </li>--}}
        {{-- </ul>--}}
        {{-- </div>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">--}}
        {{-- <span class="menu-title">Charts</span>--}}
        {{-- <i class="mdi mdi-chart-bar menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- <div class="collapse" id="charts">--}}
        {{-- <ul class="nav flex-column sub-menu">--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.charts') }}">ChartJs</a>--}}
        {{-- </li>--}}
        {{-- </ul>--}}
        {{-- </div>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">--}}
        {{-- <span class="menu-title">Tables</span>--}}
        {{-- <i class="mdi mdi-table-large menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- <div class="collapse" id="tables">--}}
        {{-- <ul class="nav flex-column sub-menu">--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.table') }}">Basic table</a>--}}
        {{-- </li>--}}
        {{-- </ul>--}}
        {{-- </div>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
        {{-- <span class="menu-title">User Pages</span>--}}
        {{-- <i class="menu-arrow"></i>--}}
        {{-- <i class="mdi mdi-lock menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- <div class="collapse" id="auth">--}}
        {{-- <ul class="nav flex-column sub-menu">--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.blank') }}"> Blank Page </a>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.login') }}"> Login </a>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.register') }}"> Register </a>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.error-404') }}"> 404 </a>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.error-500') }}"> 500 </a>--}}
        {{-- </li>--}}
        {{-- </ul>--}}
        {{-- </div>--}}
        {{-- </li>--}}
        {{-- <li class="nav-item">--}}
        {{-- <a class="nav-link" href="{{ route('dashboard.documentation') }}" target="_blank">--}}
        {{-- <span class="menu-title">Documentation</span>--}}
        {{-- <i class="mdi mdi-file-document-box menu-icon"></i>--}}
        {{-- </a>--}}
        {{-- </li>--}}
    </ul>
</nav>
