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
  <title>Profile · Admin LabShare</title>
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
      <h1 id="profile">Profile</h1>
      <div class="card">
        <div class="card-body">
          <!-- Card One: Profile -->
          <div class="card w-50">
            <div class="first card-header bg-primary text-white">
              Profile
            </div>
            <div class="card-body">
              <div class="container">
                <div class="d-flex">
                  <div class="col-7">
                    <div class="prof-pic img-fluid"></div>
                  </div>

                  <div class="col-8 align">
                    <div class="align-self-end">John Smith</div>
                    <div class="align-self-end">jsmith@ucsd.edu</div>
                    <div class="align-self-end text-info">LabShare Moderator</div>
                  </div>
                </div>
              </div>

              <div class="container mt-3">
                <div class="row">
                  <p><strong>Institution: </strong>UCSD</p>
                </div>

                <div class="row">
                  <p><strong>Building: </strong>Urey Hall</p>
                </div>

                <div class="row">
                  <p><strong>Department: </strong>Biology</p>
                </div>

                <div class="row">
                  <p><strong>Division: </strong>Neuroscience</p>
                  <div class="w-25"></div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#requestModal" id="modalBtn">Edit Profile</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>

  <!-- Edit Profile Modal Section -->
  <div class="modal fade" id="requestModal" tabindex=-1 aria-labelledby="RequestModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="form">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="text-center text-primary modal-title" id="RequestModalLabel">Edit Profile</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form class="request-form" action="#" method="post">

            <div class="form-group">
              <label for="name" class="text-primary">Name:</label>
              <input type="text" class="form-control" placeholder="John Smith">
            </div>

            <div class="form-group">
              <label for="institution" class="text-primary">Institution:</label>
              <input type="text" class="form-control" placeholder="UCSD">
            </div>

            <div class="form-group">
              <label for="building" class="text-primary">Building:</label>
              <input type="text" class="form-control" placeholder="Urey Hall">
            </div>

            <div class="form-group">
              <label for="department" class="text-primary">Department:</label>
              <input type="text" class="form-control" placeholder="Biology">
            </div>

            <div class="form-group">
              <label for="division" class="text-primary">Division:</label>
              <input type="text" class="form-control" placeholder="Neuroscience">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
        </div>

      </div>
    </div>

  </div>

  <!-- Javascript Code -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="../../JS/sidebar.js"></script>
</body>

</html>
