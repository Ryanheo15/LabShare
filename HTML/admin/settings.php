<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link rel="stylesheet" href="../../CSS/admin.css">

  <title>Settings · Admin LabShare</title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'sidebar.php'?>

    <!-- Page Content  -->
    <div id="content">
      <!-- NavBar -->
      <?php include 'navbar.php'?>

      <!-- Body -->
      <div class="container">
        <h2>Settings</h2>
        <hr>

        <!-- Change Password -->
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
          <a href="../reset-password.html">I forgot my password</a>
        </form>
        <hr>

        <!-- Change Settings -->
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

        <!-- Delete Account -->
        <form method="post">
          <h3 class="text-danger">Delete account</h3>
          <div class="form-group">
            <label>Once you delete your account, there is no going back. Please be certain.</label>
            <br>
            <button type="submit" class="btn btn-danger">Delete account</button>
          </div>
        </form>

      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../../JS/validateForm.js"></script>
  <script src="../../JS/sidebar.js"></script>
</body>

</html>
