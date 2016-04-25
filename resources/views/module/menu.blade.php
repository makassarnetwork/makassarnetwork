<aside class="left-panel">
  <div class="user text-center">
      <img src="{{ asset('asset/images/users.png') }}" class="img-circle" alt="...">
      <h4 class="user-name">{{ Auth::user()->name }}</h4>
        <div class="dropdown user-login">
          <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-circle status-icon available"></i> Available <i class="fa fa-angle-down"></i>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" href="logout.php"><i class="fa fa-circle status-icon signout"></i> Sign out</a></li>
          </ul>
        </div>	 
  </div>
  <nav class="navigation">
    <ul class="list-unstyled">
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
      <li class="has-submenu"><a href="{{ url('hosting') }}"><i class="fa fa-server"></i> <span class="nav-label">Product</span></a></li>
      <li class="has-submenu"><a href="{{ url('domain') }}"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Domain</span></a></li>
      <li class="has-submenu"><a href="vps.php"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="nav-label">VPS</span></a></li>
      <li class="has-submenu"><a href="testimoni.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Testimoni</span></a></li>
      <li class="has-submenu"><a href="changepassword.php"><i class="fa fa-user"></i> <span class="nav-label">Change Password</span></a></li>
    </ul>
  </nav>
</aside>