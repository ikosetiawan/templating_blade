<li class="nav-item ">
    <a href="\" class="nav-link {{ request()->is('/') ? 'active' : '' }} ">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="/data-tables" class="nav-link {{ request()->is('data-tables') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Data Tables
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
</li>