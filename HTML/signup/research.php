<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
          integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../CSS/style.css">

    <title>Sign up for LabShare</title>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
    <div class="container">
        <a href="../index.php" class="navbar-brand">LabShare</a>
        <i class="fas fa-flask fa-2x text-info"></i>
    </div>
</nav>

<!-- Registration Form -->
<main id="regForm" class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">


                <p>
                    Please enter details about your research and preferences.
                </p>
                <hr>

                <form action="../../PHP/signup.php" method="post" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="institution">Institution</label>
                        <input type="text" id="institution" class="form-control" name="institution"
                               value="University of California, San Diego" readonly>
                        <small class="form-text text-muted">Currently limited to UCSD students.</small>
                        <div class="invalid-feedback">
                            Please provide a valid institution.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="department">Department</label><br>
                        <input type="text" id="department" class="form-control" name="department" placeholder="Biology"
                               autofocus required>
                        <div class="invalid-feedback">
                            Please provide a valid department.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="division">Division</label>
                        <input type="text" id="division" class="form-control" name="division" placeholder="Neurobiology"
                               required>
                        <div class="invalid-feedback">
                            Please provide a valid division.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building">Building</label>
                        <input type="text" id="building" class="form-control" name="building" placeholder="Urey Hall"
                               required>
                        <div class="invalid-feedback">
                            Please provide a valid building.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="notificationLimit">Request Notification Limit Preference</label>
                        <select class="form-control" id="notificationLimit" name="notificationLimit">
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                            <option>Unlimited</option>
                        </select>
                        <small class="form-text text-muted">
                            Maximum number of request notification emails you want to receive per day.
                            <br>
                            <b>Note:</b> The more requests you receive, the more people receive your requests when you
                            need help.
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
        </div>
    </div>
</main>

<?php
include '../../PHP/includes/global.php';

$email = $_POST['email'] . "@ucsd.edu";

//Adding security
$email = mysqli_real_escape_string($connection, $email);

$verify = "SELECT email FROM users WHERE email = '$email'";
$verify_query = mysqli_query($connection, $verify);

if (!$verify_query) {
    die("SEARCH QUERY FAILED " . mysqli_error($connection));
} else {
    $verify_array = mysqli_fetch_assoc($verify_query);
    $connection->close();

    if ($verify_array['email'] == $email) {
        echo "<script> location.href='index.php?valid=false'; </script>";
    }
}
?>

<!-- jQuery & Popper.js & Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script src="../../JS/validateForm.js"></script>
</body>

</html>
