<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item @if (Route::currentRouteName() == 'dashboard.index') selected @endif">
            <a class="sidebar-link" href="{{ route('dashboard.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Post</span>
        </li>
        <li class="sidebar-item @if (request()->segment(1) == 'post-category') selected @endif">
            <a class="sidebar-link" href="{{ route('post-category.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-category"></i>
                </span>
                <span class="hide-menu">Post Category</span>
            </a>
        </li>
        <li class="sidebar-item @if (Route::currentRouteName() == 'posts.index') selected @endif">
            <a class="sidebar-link" href="{{ route('posts.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-list-details"></i>
                </span>
                <span class="hide-menu">Post List</span>
            </a>
        </li> --}}

        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Car</span>
        </li>
        <li class="sidebar-item @if (Route::currentRouteName() == 'dropzone.index') selected @endif">
            <a class="sidebar-link" href="{{ route('dropzone.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-list-details"></i>
                </span>
                <span class="hide-menu">Car Types</span>
            </a>
        </li>
        <li class="sidebar-item @if (Route::currentRouteName() == 'dropzone.index') selected @endif">
            <a class="sidebar-link" href="{{ route('dropzone.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-list-details"></i>
                </span>
                <span class="hide-menu">List Car</span>
            </a>
        </li>


        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Upload File</span>
        </li>
        <li class="sidebar-item @if (Route::currentRouteName() == 'dropzone.index') selected @endif">
            <a class="sidebar-link" href="{{ route('dropzone.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-list-details"></i>
                </span>
                <span class="hide-menu">Dropzone</span>
            </a>
        </li>
    </ul>
</nav>
