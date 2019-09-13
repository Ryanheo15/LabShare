<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">

    <title>Loading · LabShare</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="../HTML/" class="navbar-brand">LabShare</a>
            <i class="fas fa-flask fa-2x text-info"></i>
        </div>
    </nav>

    <!-- Body -->
    <main id="body" class="mt-4 mb-4">
        <div class="container">
            <h2>Loading</h2>
            <hr>
            <p>
                Please wait while LabShare processes your request.
                <br>

                <?php

                    include 'db_connection.php';

                    $email = $_POST['email'];
                    $pass = $_POST['password'];

                    //Adding security
                    $pass = mysqli_real_escape_string($connection, $pass);
                    $email = mysqli_real_escape_string($connection,$email);

                    //Password encryption
                    $hashFormat = "$2y$10$";
                    $salt = "iusesomecrazystrings22";
                    $hashF_and_salt = $hashFormat . $salt;

                    $pass = crypt($pass,$hashF_and_salt);

                    $verify = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
                    $verify_query = mysqli_query($connection, $verify);


                    if(!$verify_query){
                      die("SEARCH QUERY FAILED " . mysqli_error($connection));
                    }

                    else {

                      $verify_array = mysqli_fetch_assoc($verify_query);

                      if($verify_array['email'] == $email && $verify_array['password'] == $pass) {
                          echo "<script> location.href='../HTML/user/index.html'; </script>";

                          session_start();

                          $_SESSION['id'] = mysqli_fetch_assoc($verify_query);


                      }
                      else {
                        //echo "<script> location.href='../HTML/index.html'; </script>";
                        echo "<script src = '../JS/verification.js'></script>";

                      }

                    }

                    $connection->close();



                    /*
                    if ($_POST['username'] == 'admin@labshare.net' && $_POST['password'] == 'password')
                    {
                      echo "<script> location.href='../HTML/admin/'; </script>";
                    }
                    else
                    {
                      echo "<script> location.href='../HTML/user/'; </script>";
                    }
                    */
                ?>

            </p>
        </div>
    </main>
</body>

</html>
