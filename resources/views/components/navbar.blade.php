<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.index') }}">Aplikasi Web</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">List User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}">Tambah User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>