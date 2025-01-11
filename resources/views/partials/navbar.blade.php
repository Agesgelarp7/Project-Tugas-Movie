<header class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <i class="bi bi-film fs-3 me-2"></i> AgerpanMovie
        </a>
        <!-- Toggler Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Role -->
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('roles.index') }}">
                        <i class="bi bi-people-fill me-1"></i> Peran
                    </a>
                </li>
                <!-- User -->
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('users.index') }}">
                        <i class="bi bi-person-circle me-1"></i> User
                    </a>
                </li>
                <!-- Cast -->
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('casts.index') }}">
                        <i class="bi bi-star-fill me-1"></i> Artis
                    </a>
                </li>
                <!-- Genre -->
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('genres.index') }}">
                        <i class="bi bi-tags-fill me-1"></i> Genre
                    </a>
                </li>
                <!-- Movie -->
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('movies.index') }}">
                        <i class="bi bi-film me-1"></i> Film
                    </a>
                </li>
                <!-- Review -->
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('reviews.index') }}">
                        <i class="bi bi-chat-dots-fill me-1"></i> Beri Ulasan
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>