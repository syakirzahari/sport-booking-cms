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
<li class="nav-item {{ Request::is('venues*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('venues.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Venues</span>
    </a>
</li>
