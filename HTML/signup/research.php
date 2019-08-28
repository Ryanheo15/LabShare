<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">

    <title>Sign up for LabShare</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="index.html" class="navbar-brand">LabShare</a>
            <i class="fas fa-flask fa-2x text-info"></i>
        </div>
    </nav>

    <!-- Registration Form -->
    <main id="regForm" class="my-4">
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
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../JS/validateForm.js"></script>
</body>

</html>
