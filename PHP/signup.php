<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">

    <title>Loading · LabShare</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="index.html" class="navbar-brand">LabShare</a>
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
                    include '../../Data/user_data-db.php';

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
    </main>

    <!-- Footer -->
    <footer id="footer" class="my-4">
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
