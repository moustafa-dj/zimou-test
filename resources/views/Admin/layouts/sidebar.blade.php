<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-sticky-note-fill"></i><span>packages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{route('packages.create')}}">
                    <i class="bi bi-circle"></i><span>Add package</span>
                </a>
            </li>
            <li>
                <a href="{{route('packages.index')}}">
                    <i class="bi bi-circle"></i><span>All Packages</span>
                </a>
            </li>
        </ul>
    </li><!-- End Components Nav -->
</ul>

</aside>
<!-- End Sidebar-->