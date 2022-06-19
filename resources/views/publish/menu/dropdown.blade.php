@auth
    <ul class="navbar-nav">
        <li class="nav-item">
            <div class="dropdown">
                <a class="" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                    <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="{{ auth()->user()->photo_url ?? config('ui.brand.default_avatar') }}" alt="{{ auth()->user()->name }}">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                    <div class="dropdown-item-text">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ auth()->user()->photo_url ?? config('ui.brand.default_avatar') }}" alt="{{ auth()->user()->name }}">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                                <p class="card-text text-body">{{ auth()->user()->{config('nue.auth.username')} }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dropdown-divider"></div>

                    @if(Route::has('profile.index'))
                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                            <span class="iconify nav-icon me-1" data-icon="icon-park-twotone:user-positioning"></span>
                            Profile
                        </a>
                    @endif
                    
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="iconify nav-icon me-1" data-icon="icon-park-twotone:outbound"></span>
                        <b>Sign out</b>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
@endauth