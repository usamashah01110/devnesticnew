
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Devnestic</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sections
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Sections</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'hero']) }}">Hero</a>
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'about']) }}">About</a>
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'service']) }}">Service</a>
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'project']) }}">Project</a>
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'developer']) }}">Developer</a>
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'faq']) }}">FAQs</a>
                <a class="collapse-item" href="{{ route('section.index', ['section' => 'contact']) }}">Contact</a>

            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->
