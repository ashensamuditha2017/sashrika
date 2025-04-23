<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sashrika</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($elementActive ?? '') == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ ($elementActive ?? '') == 'allOfficers' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.officers') }}">
            <span>All Officers</span></a>
    </li>

    <li class="nav-item {{ ($elementActive ?? '') == 'availableCourses' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('courses.index') }}">
            <span>All Farmers</span></a>
    </li>

    <li class="nav-item {{ ($elementActive ?? '') == 'allStudentEnrollments' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('registeredStudents.show') }}">
            <span>Production</span></a>
    </li>

    <li class="nav-item {{ ($elementActive ?? '') == 'entranceExamRegistration' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('students.create') }}">
            <span>Damages</span></a>
    </li>

    {{-- <li class="nav-item {{ ($elementActive ?? '') == 'registeredStudents' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('registeredStudents.index') }}">
            <span>Registered Students</span></a>
    </li> --}}

    <li class="nav-item {{ ($elementActive ?? '') == 'users' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('profile.index') }}">
            <span>Users</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
