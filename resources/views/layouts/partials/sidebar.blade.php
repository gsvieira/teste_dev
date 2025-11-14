{{-- <aside class="app-sidebar bg-secondary-subtle" data-bs-theme="dark"> --}}
<nav class="app-header navbar navbar-expand navbar-white navbar-light border-bottom">

    <!-- Left Navbar -->
    <ul class="navbar-nav">

        <!-- Toggle Sidebar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="fas fa-user-graduate me-1"></i> Usuários
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('courses.index') }}" class="nav-link">
                <i class="fas fa-book me-1"></i> Cursos
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('classrooms.index') }}" class="nav-link">
                <i class="fas fa-school me-1"></i> Matérias
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="nav-link btn btn-link p-0" style="display: inline-flex; align-items: center;">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </form>
        </li>

    </ul>

</nav>