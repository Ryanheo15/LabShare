<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Sign up for LabShare</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-primary py-3">
    <div class="container">
      <a href="../index.html" class="navbar-brand text-white">LabShare</a>
      <ion-icon name="flask" size="large"></ion-icon>
    </div>
  </nav>

  <!-- Registration Form -->
  <section id="regForm" class="mt-4 mb-4">
    <div class="container">
      <p>
        Please enter details about your research and preferences.
      </p>
      <hr>

      <form action="signup.php" method="post" class="needs-validation" novalidate>
        <div class="form-group">
          <label for="institution">Institution</label>
          <input type="text" class="form-control" name="institution" value="University of California, San Diego" readonly>
          <small class="form-text text-muted">Currently limited to UCSD students.</small>
          <div class="invalid-feedback">
            Please provide a valid institution.
          </div>
        </div>

        <div class="form-group">
          <label for="department">Department</label><br>
          <input type="text" class="form-control" name="department" placeholder="Biology" autofocus required>
          <div class="invalid-feedback">
            Please provide a valid department.
          </div>
        </div>

        <div class="form-group">
          <label for="division">Division</label>
          <input type="text" class="form-control" name="division" placeholder="Neurobiology" required>
          <div class="invalid-feedback">
            Please provide a valid division.
          </div>
        </div>

        <div class="form-group">
          <label for="building">Building</label>
          <input type="text" class="form-control" name="building" placeholder="Urey Hall" required>
          <div class="invalid-feedback">
            Please provide a valid building.
          </div>
        </div>

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

        <br>
        <input type="hidden" name="firstName" value="<?php echo $_POST['firstName']; ?>">
        <input type="hidden" name="lastName" value="<?php echo $_POST['lastName']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
  </section>

  <script src="../../js/app.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="../../js/validateForm.js"></script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>
