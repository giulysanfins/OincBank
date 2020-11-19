<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> {{ $navName ?? '' }} </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="far fa-bell fa-2x"></i>
                        <span class="notification">5</span>
                        <span class="d-lg-none">{{ __('Notification') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">{{ __('Notification 1') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Notification 2') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Notification 3') }}3</a>
                        <a class="dropdown-item" href="#">{{ __('Notification 4') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Another notification') }}</a>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=" {{route('profile.edit') }} ">
                        <li class="far fa-user-circle fa-2x"></i>

                        <span class="no-icon">{{ __('Criar Campanha') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{route('profile.edit') }} ">
                        <span class="no-icon">{{ __('Account') }}</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ __('Dropdown') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt fa-2x"></i></a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
