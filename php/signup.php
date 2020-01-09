
<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Loading · LabShare</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="../pages/index.html" class="navbar-brand">LabShare</a>
            <i class="fas fa-flask fa-2x text-info"></i>
        </div>
    </nav>

    <!-- Body -->
    <main id="body" class="my-4">
        <div class="container">
            <h2>Loading</h2>
            <hr>
            <p>
                Please wait while LabShare processes your request.
                <br>
                <?php
                    include "includes/global.php";

                    $fName = $_POST['firstName'];
                    $lName = $_POST['lastName'];
                    $email = $_POST['email'] . '@ucsd.edu';
                    $pass = $_POST['password'];
                    $institution = $_POST['institution'];
                    $dept = $_POST['department'];
                    $division = $_POST['division'];
                    $building = $_POST['building'];
                    $limit = $_POST['notificationLimit'];

                    //Type conversion
                    if ($limit == "Unlimited") {
                        $limit = 100;
                    }

                    //Adding security
                    $pass = mysqli_real_escape_string($connection, $pass);
                    $email = mysqli_real_escape_string($connection, $email);

                    //Password encryption
                    $pass = encrypt($pass);

                    $user_insert_query = "INSERT INTO users(first_name,last_name,email,password,institution,department,division,building,notification_limit)
                    VALUES ('$fName', '$lName', '$email', '$pass', '$institution', '$dept', '$division', '$building', '$limit')";

                    if ($connection->query($user_insert_query) === true) {
                        $get_id = "SELECT primary_id FROM users WHERE email='$email'";
                        $get_id_query = mysqli_query($connection, $get_id);
                        $get_id_array = $get_id_query->fetch_array();

                        $_SESSION['id'] = $get_id_array['primary_id'];
                        $_SESSION['first_name'] = $fName;
                        $_SESSION['last_name'] = $lName;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $pass;
                        $_SESSION['institution'] = $institution;
                        $_SESSION['department'] = $dept;
                        $_SESSION['division'] = $division;
                        $_SESSION['building'] = $building;
                        $_SESSION['notification_limit'] = $limit;

                        echo "<script> location.href='../pages/user/'; </script>";
                    }
                    else {
                        echo "Error: " . $user_insert_query . "<br>" . $connection->error;
                    }

                    $connection->close();

                    echo "<br><a href='../pages/user/'>Continue to User Home</a>";
            ?>
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer" class="my-4">
        <div class="container-fluid">
            <hr>
            <div class="row">
                <div class="col">
                    <ul id="footer-links" class="list-inline">
                        <li><a href="../pages/main/about.html">About us</a></li> |
                        <li><a href="../pages/main/terms-of-service.html">Terms</a></li> |
                        <li><a href="../pages/main/privacy-policy.html">Privacy</a></li> |
                        <li><a href="../pages/main/help/">Help Center</a></li>
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
