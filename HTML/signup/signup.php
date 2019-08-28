<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">

  <title>Loading · LabShare</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-primary py-3">
    <div class="container">
      <a href="../user/" class="navbar-brand text-white">LabShare</a>
      <i class="fas fa-flask fa-2x"></i>
    </div>
  </nav>

  <!-- Body -->
  <section id="body" class="mt-4 mb-4">
    <div class="container">
      <h2>Loading</h2>
      <hr>
      <p>
        Please wait while LabShare processes your request.
        <br>
        <?php
        include '../../data/user_data-db.php';

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die('Could not connect to the database server' . mysqli_connect_error());

        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $institution = $_POST['institution'];
        $dept = $_POST['department'];
        $division = $_POST['division'];
        $building = $_POST['building'];
        $limit = $_POST['notificationLimit'];

        $sql = "INSERT INTO personal_info
        VALUES (DEFAULT, '$fName', '$lName', '$email', '$pass', '$institution', '$dept', '$division', '$building', '$limit')";

        if ($con->query($sql) === true) {
            echo "<script> location.href='../user/index.html'; </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();

        echo "<br><a href='../user/'>Continue to User Home</a>";
        ?>
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="mt-4 mb-4">
    <div class="container-fluid">
      <hr>
      <div class="row">
        <div class="col">
          <ul id="footer-links" class="list-inline">
            <li><a href="../about.html">About us</a></li> |
            <li><a href="../terms-of-service.html">Terms</a></li> |
            <li><a href="../privacy-policy.html">Privacy</a></li> |
            <li><a href="../help/">Help Center</a></li>
          </ul>
        </div>
        <div class="col">
          <p class="text-right">© LabShare 2019. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
