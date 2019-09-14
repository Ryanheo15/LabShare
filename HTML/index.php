<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">

    <title>LabShare</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="index.php" class="navbar-brand">LabShare</a>
            <i class="fas fa-flask fa-2x text-info"></i>
        </div>
    </nav>

    <!-- Body -->
    <main>
        <!-- Header Section -->
        <section id="header" class="py-5">
            <div class="primary-overlay text-white">
                <div class="container">
                    <div class="row">
                        <!-- Left: LabShare.net -->
                        <div class="col-lg-6">
                            <h1 class="display-2 mt-5 pt-5">LabShare.net</h1>
                            <h3 class="mt-2">For scientists to request and share lab related materials locally</h3>
                            <!--
                      <button class = "btn btn-lg btn-outline-primary mt-4 text-white">
                        <a href = "/HTML/index.html">Join For Free</a>
                      </button>
                      -->
                            <a class="btn btn-outline-primary btn-lg mt-4 text-white" href="signup/">
                                Join For Free
                            </a>
                        </div>

                        <!-- Right: Login -->
                        <div class="login-form card-body offset-lg-2 col-lg-4 border border-primary rounded">
                            <form class="form-signin needs-validation" method="post" action="index.php?valid=false" novalidate>
                                <h1 class="pb-2">Already a user?</h1>
                                <div class="form-group">
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control" name="email" autofocus required></input>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" required></input>
                                    <small class="form-text"><a class="text-light" href="main/reset-password.html">Forgot your password?</a></small>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block mt-4" name="login">Login</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </section>


        <!-- Main Content -->
        <section id="body-cards" class="home-page-main mt-4">
            <div class="container">
                <div class="row">
                    <!-- Card One: Services -->
                    <div class="col-4">
                        <div class="card bg-primary home-page-cards">
                            <div class="card-header bg-primary text-white display-4 text-center">
                                Services
                            </div>

                            <div class="card-body text-justify">

                                Connect with local researchers from your university to borrow reagents
                                or materials in small aliquot to save both money and time.

                            </div>
                        </div>
                    </div>

                    <!-- Card Two: Features -->
                    <div class="col-4">
                        <div class="card bg-secondary home-page-cards">
                            <div class="card-header bg-secondary text-white display-4 text-center">
                                Features
                            </div>

                            <div class="card-body text-white">

                                <div class="d-flex">
                                    <div class="p-4 align-self-start">
                                        <i class="fas fa-check fa-2x"></i>
                                    </div>
                                    <div class="p-4 align-self-end ">
                                        Post and request your lab needs.
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="p-4 align-self-start">
                                        <i class="fas fa-check fa-2x"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                        Broadcast to local researchers across campus.
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="p-4 align-self-start">
                                        <i class="fas fa-check fa-2x"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                        Keep track of your reagent inventory online.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Card Three: Benefits -->
                    <div class="col-4">
                        <div class="card bg-primary home-page-cards">
                            <div class="card-header bg-primary text-white display-4 text-center">
                                Benefits
                            </div>

                            <div class="card-body">

                                <div class="d-flex">
                                    <div class="p-4 align-self-start">
                                        <i class="fas fa-check fa-2x"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                        Save money by borrowing small aliquot for pilot.
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="p-4 align-self-start">
                                        <i class="fas fa-check fa-2x"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                        Have a backup plan for delayed deliveries.
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="p-4 align-self-start">
                                        <i class="fas fa-check fa-2x"></i>
                                    </div>
                                    <div class="p-4 align-self-end">
                                        Find your desired reagents quickly.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="my-4">
        <div class="container-fluid">
            <hr>
            <div class="row">
                <div class="col">
                    <ul id="footer-links" class="list-inline">
                        <li><a href="main/about.html">About us</a></li> |
                        <li><a href="main/terms-of-service.html">Terms</a></li> |
                        <li><a href="main/privacy-policy.html">Privacy</a></li> |
                        <li><a href="help/">Help Center</a></li>
                    </ul>
                </div>

                <div class="col">
                    <p class="text-right">© LabShare 2019. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <?php
        if (isset($_GET['valid']) && $_GET['valid'] == 'false') {
            include '../PHP/db_connection.php';

            $pass = $_POST['password'];
            $email = $_POST['email'];

            //Adding security
            $pass = mysqli_real_escape_string($connection, $pass);
            $email = mysqli_real_escape_string($connection, $email);

            //Password encryption
            $pass = encrypt($pass);

            $verify = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
            $verify_query = mysqli_query($connection, $verify);


            if (!$verify_query) {
                die("SEARCH QUERY FAILED " . mysqli_error($connection));
            }
            else {
                $verify_array = mysqli_fetch_assoc($verify_query);
                $connection->close();

                if ($verify_array['email'] == $email && $verify_array['password'] == $pass) {

                  $_SESSION['id'] = $verify_array['primary_id'];
                  $_SESSION['first_name'] = $verify_array['first_name'];
                  $_SESSION['last_name'] = $verify_array['last_name'];
                  $_SESSION['email'] = $verify_array['email'];
                  $_SESSION['password'] = $verify_array['password'];
                  $_SESSION['institution'] = $verify_array['institution'];
                  $_SESSION['department'] = $verify_array['department'];
                  $_SESSION['division'] = $verify_array['division'];
                  $_SESSION['building'] = $verify_array['building'];
                  $_SESSION['notification_limit'] = $verify_array['notification_limit'];

                    if ($email == $admin_email) {
                        echo "<script> location.href='admin/index.php'; </script>";
                    }
                    echo "<script> location.href='user/index.php'; </script>";


                }
                else {
                    echo "<script> setTimeout(function(){ alert('Incorrect email or password'); location.href='index.php';}, 500); </script>";
                }
            }
        }
        /*
        if ($_POST['username'] == 'admin@labshare.net' && $_POST['password'] == 'password')
        {
          echo "<script> location.href='../HTML/admin/'; </script>";
        }
        */
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../JS/validateForm.js"></script>

</body>

</html>
