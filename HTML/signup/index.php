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
<main class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">

                <p>
                    Create a shared environment in the scientific research field
                    and make research more cost effective.
                </p>
                <hr>

                <form id="regForm" action="research.php" method="post" class="needs-validation" autocomplete="off"
                      novalidate>
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="text" id="firstName" class="form-control" name="firstName" placeholder="John"
                               maxlength="40" autofocus required>
                        <div class="invalid-feedback">
                            Please provide a valid first name.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Doe"
                               maxlength="40" required>
                        <div class="invalid-feedback">
                            Please provide a valid last name.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Institution email address</label>
                        <div class="input-group">
                            <input type="text" id="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+"
                                   placeholder="jdoe" maxlength="255" required>
                            <div class="input-group-append">
                                <span class="input-group-text border-right rounded-right">@ucsd.edu</span>
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        <small class="form-text text-muted">Please use your UCSD email address.</small>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password" pattern=".{6,}"
                               placeholder="hunter2" required>
                        <div class="invalid-feedback">
                            Please provide a password with at least six characters.
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="agreementCheck" required>
                        <label class="custom-control-label" for="agreementCheck">
                            I agree to the
                            <a href="../main/terms-of-service.html">Terms of Service</a>
                            and acknowledge the
                            <a href="../main/privacy-policy.html">Privacy Policy.</a>
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary" name="continueBtn">Continue</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
if (isset($_GET['valid']) && $_GET['valid'] == 'false') {
    echo "<script> setTimeout(function(){ alert('The email you entered is already taken.'); location.href='index.php';}, 500); </script>";
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
