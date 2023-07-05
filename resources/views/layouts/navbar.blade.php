<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('citation.index') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('citation.index') }}">Citations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('author.index') }}">Authors</a>
                </li>

                @auth
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('user.index') }}">Users</a>
                        </li>
                    @endif
                @endauth

            </ul>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="m-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
