<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../CSS/admin.css">
  <title>Settings · Admin LabShare</title>
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
              <li class="nav-item">
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
                    <a class="dropdown-item active" href="settings.php">Settings</a>
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
      <section id="body" class="mt-4 mb-4">
        <div class="container">
          <h2>Settings</h2>
          <hr>

          <form class="needs-validation" method="post" novalidate>
            <h3>Change password</h3>
            <div class="form-group">
              <label for="old-password">Old password</label>
              <input type="password" class="form-control" pattern=".{6,}" name="old-password" required>
              <div class="invalid-feedback">
                Please enter your current password.
              </div>
            </div>
            <div class="form-group">
              <label for="new-password">New password</label>
              <input type="password" class="form-control" pattern=".{6,}" name="new-password" required>
              <div class="invalid-feedback">
                Please provide a password with at least six characters.
              </div>
            </div>
            <button type="submit" class="btn btn-secondary mr-2" name="update-password">Update password</button>
            <a href="../reset_password.html">I forgot my password</a>
          </form>
          <hr>

          <form method="post">
            <h3>Change settings</h3>
            <div class="form-group">
              <label for="notificationLimit">Request Notification Limit Preference</label>
              <select class="form-control" name="notificationLimit">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>Unlimited</option>
              </select>
              <small class="form-text text-muted">
                Maximum number of request notification emails you want to receive per day.
                <br>
                <b>Note:</b> The more requests you receive, the more people receive your requests when you need help.
              </small>
            </div>

            <button type="submit" class="btn btn-success" name="update-settings">Update settings</button>
          </form>
          <hr>

          <form method="post">
            <h3 class="text-danger">Delete account</h3>
            <div class="form-group">
              <label>Once you delete your account, there is no going back. Please be certain.</label>
              <br>
              <button type="submit" class="btn btn-danger">Delete account</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="../../js/app.js"></script>
  <script src="../../JS/validateForm.js"></script>
  <script src="../../JS/sidebar.js"></script>
</body>

</html>
