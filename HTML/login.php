<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/app.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <title>Loading · LabShare</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-primary py-3">
    <div class="container">
      <a href="index.html" class="navbar-brand text-white">LabShare</a>
      <ion-icon name="flask" size="large"></ion-icon>
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
        /*
        include '../../data/user_data-db.php';

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        	or die ('Could not connect to the database server' . mysqli_connect_error());

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT id FROM personal_info WHERE email = '$email' AND password = '$pass'";
        $id = mysqli_query($con, $sql);

        if ($con->query($sql) === TRUE) {
            echo "<script> location.href='../user/index.html'; </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
        */
        echo "<script> location.href='user/'; </script>";
        ?>
      </p>
    </div>
  </section>
</body>

</html>
