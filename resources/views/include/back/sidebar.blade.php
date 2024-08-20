@php
    $currentUri = Route::current()->uri;
@endphp

<div class="sidebar-menu-dashboard">
    <ul class="box-menu-dashboard">

        <li class="nav-menu-item @if (Str::contains($currentUri, 'index')) active @endif"><a class="nav-menu-link"
                href="{{ route('dashboard') }}"><span class="icon icon-home"></span>@lang('dashboard')</a></li>

        @auth
            @if (Auth::user()->role_id < 3)
                <li class="nav-menu-item @if (Str::contains($currentUri, 'users')) active @endif"><a class="nav-menu-link"
                        href="{{ route('dashboard.users') }}"><span class="fas fa-users"></span>Utilisateurs</a></li>
            @endif
        @endauth

        <li class="nav-menu-item @if (Str::contains($currentUri, 'message')) active @endif"><a class="nav-menu-link"
                href="{{ route('dashboard.messages') }}"><span class="icon icon-review"></span>Messages</a></li>

        <li class="nav-menu-item @if (Str::contains($currentUri, 'estate')) active @endif"><a class="nav-menu-link"
                href="{{ route('dashboard.estates') }}"><span class="icon icon-list-dashes"></span>Terrains</a></li>

        <li class="nav-menu-item @if (Str::contains($currentUri, 'profile')) active @endif"><a class="nav-menu-link"
                href="{{ route('profile.edit') }}"><span class="icon icon-profile"></span>Profile</a></li>
    </ul>
</div>
