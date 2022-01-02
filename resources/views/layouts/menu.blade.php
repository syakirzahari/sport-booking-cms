<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="nav-icon icon-home"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="nav-item {{ Request::is('venues*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('venues.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Venues</span>
    </a>
</li>

<li class="nav-item {{ Request::is('states*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('states.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>States</span>
    </a>
</li>
<li class="nav-item {{ Request::is('districts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('districts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Districts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('sports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sports.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sports</span>
    </a>
</li>

<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Articles</span>
    </a>
</li>

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('sportVenues*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sportVenues.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sport Venues</span>
    </a>
</li>
<li class="nav-item {{ Request::is('vendors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('vendors.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Vendors</span>
    </a>
</li>
