<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
          integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/admin.css">

    <title>Settings · Admin LabShare</title>
</head>

<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'sidebar.php' ?>

    <!-- Page Content  -->
    <div id="content">
        <!-- NavBar -->
        <?php include 'navbar.php' ?>

        <!-- Body -->
        <div class="container">
            <h2>Settings</h2>
            <hr>

            <!-- Change Password -->
            <form class="needs-validation" method="post" novalidate>
                <h3>Change password</h3>
                <div class="form-group">
                    <label for="old-password">Old password</label>
                    <input type="password" class="form-control" pattern=".{6,}" name="old-password" required>
                    <div class="invalid-feedback">
                        Please enter your current password.
                    </div>
                </div>
                <div class="form-group">
                    <label for="new-password">New password</label>
                    <input type="password" class="form-control" pattern=".{6,}" name="new-password" required>
                    <div class="invalid-feedback">
                        Please provide a password with at least six characters.
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary mr-2" name="update-password">Update password</button>
                <a href="../main/reset-password.html">I forgot my password</a>
            </form>
            <hr>

            <!-- Change Settings -->
            <form method="post">
                <h3>Change settings</h3>
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
                        <b>Note:</b> The more requests you receive, the more people receive your requests when you need
                        help.
                    </small>
                </div>

                <button type="submit" class="btn btn-success" name="update-settings">Update settings</button>
            </form>
            <hr>

            <!-- Delete Account -->
            <form method="post">
                <h3 class="text-danger">Delete account</h3>
                <div class="form-group">
                    <label>Once you delete your account, there is no going back. Please be certain.</label>
                    <br>
                    <button type="submit" class="btn btn-danger">Delete account</button>
                </div>
            </form>

        </div>

    </div>
</div>

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
