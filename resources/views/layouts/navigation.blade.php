<nav class="navbar navbar-expand-md navbar-dark bg-dark px-2 d-flex justify-content-between">
    <section class="navbar-brand">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Bodtrack') }}
        </x-nav-link>
    </section>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <section class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <button
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="dropdownId"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >{{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                    <p class="dropdown-item fw-bold mb-0">{{ Auth::user()->email }}</p>
                    <hr class="dropdown-divider">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </li>
        </ul>
    </section>
</nav>
