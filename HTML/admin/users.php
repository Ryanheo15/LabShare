<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link rel="stylesheet" href="../../CSS/admin.css">
  <title>Users · Admin LabShare</title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'navigation.php'?>

    <!-- Page Content  -->
    <div id="content">
      <!-- NavBar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a href="inbox.php" class="nav-link">
                  Messages <span class="badge badge-primary">8</span>
                </a>
              </li>
              <li class="nav-item">
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
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.html">Log out</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Body -->
      <h1 id="users">Users</h1>
      <div class="card">
        <div class="card-body">
          Text
        </div>
      </div>
      <hr>
    </div>
  </div>

  <!-- Javascript Code -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="../../JS/sidebar.js"></script>
</body>

</html>
