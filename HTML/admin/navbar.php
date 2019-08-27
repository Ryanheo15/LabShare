<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-info">
      <i class="fas fa-align-left"></i>
      <span>Toggle Sidebar</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        <li id="home" class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li id="inbox" class="nav-item">
          <a href="inbox.php" class="nav-link">
            Messages <span class="badge badge-primary">8</span>
          </a>
        </li>

        <li id="notifications" class="nav-item">
          <a href="notifications.php" class="nav-link">
            Notifications <span class="badge badge-primary">4</span>
          </a>
        </li>

        <li class="nav-item">
          <div class="dropdown ml-2">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
              <img id="nav-pic" width="30" height="30" class="img-fluid rounded" src="../../Resources/blank-profile-picture-973460_640.png">
              John Smith
              &emsp;
            </button>
            <div class="dropdown-menu drowpdown-menu-right">
              <a class="dropdown-item" href="../help">Help</a>
              <a id="settings" class="dropdown-item" href="settings.php">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.html">Log out</a>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </div>
</nav>

<script>
  var url = window.location.pathname;
  var slashIndex = url.lastIndexOf('/');
  var dotIndex = url.lastIndexOf('.');
  var page = url.substring(slashIndex + 1, dotIndex);

  document.getElementById(page).setAttribute("class", "active")

  if (url.endsWith('/') || page == 'index') {
    document.getElementById("home").setAttribute("class", "active")
  } else if (page == 'settings') {
    document.getElementById(page).setAttribute("class", "dropdown-item active")
  }
</script>
