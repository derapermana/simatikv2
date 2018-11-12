<li class="nav-item">
    <router-link to="/dashboard" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Dashboard
        </p>
    </router-link>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-cogs"></i>
      <p>
        System
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <router-link to="/users" class="nav-link">
          <i class="fas fa-users nav-icon"></i>
          <p>Users</p>
        </router-link>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <router-link to="/profile" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Profile
        </p>
    </router-link>
  </li>
  <li class="nav-item">
    <a href="{{ route('logout') }}" class="nav-link"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        <i class="nav-icon fas fa-power-off"></i>
        <p>
        Logout
        </p>
    </a>
  </li>