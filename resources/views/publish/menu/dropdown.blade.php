<ul class="navbar-nav">
    <li class="nav-item">
        <div class="dropdown">
            <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="{{ auth()->check() ? auth()->user()->photo_url : 'https://cdn.btekno.id/templates/v2/img/160x160/img1.jpg' }}" alt="{{ auth()->check() ? auth()->user()->name : 'Noviyanto Rahmadi' }}">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm avatar-circle">
                            <img class="avatar-img" src="{{ auth()->check() ? auth()->user()->photo_url : 'https://cdn.btekno.id/templates/v2/img/160x160/img1.jpg' }}" alt="{{ auth()->check() ? auth()->user()->name : 'Noviyanto Rahmadi' }}">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">
                                {{ auth()->check() ? auth()->user()->name : 'Noviyanto Rahmadi' }}
                            </h5>
                            <p class="card-text text-body">
                                {{ auth()->check() ? auth()->user()->email : 'novay@btekno.id' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Profile &amp; account</a>
                <a class="dropdown-item" href="#">Settings</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign out</a>
                
            </div>
        </div>
    </li>
</ul>