<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">

    <title>Settings · LabShare</title>
</head>

<body>
    <!-- FIXME: Fix active nav bar links and collapsable button later -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <a href="../index.php" class="navbar-brand text-white">LabShare</a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="inventory.html" class="nav-link text-white">Inventory</a>
                    </li>

                    <li class="nav-item">
                        <a href="inbox.html" class="nav-link text-white">
                            Messages <span class="badge badge-light">8</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="notifications.html" class="nav-link text-white">
                            Notifications <span class="badge badge-light">4</span>
                        </a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0 ml-4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-outline-light my-2 my-sm-0 " data-toggle="modal" data-target="#requestModal" id="modalBtn">Ask A Favor</button>
                </form>

                <!-- Dropdown -->
                <div class="dropdown ml-2">
                    <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <img id="nav-pic" width="30" height="30" class="img-fluid rounded" src="../../Resources/blank-profile-picture-973460_640.png">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="../help">Help</a>
                        <a class="dropdown-item active" href="settings.html">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../index.php">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Request Modal Section -->
    <div class="modal fade" id="requestModal" tabindex=-1 aria-labelledby="RequestModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="text-center text-dark modal-title" id="RequestModalLabel">Submit A Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="request-form" action="request.php" method="post">

                        <div class="form-group">
                            <label for="name" class="text-dark">Name:</label>
                            <input type="text" class="form-control" placeholder="ex: John">
                        </div>

                        <div class="form-group">
                            <label for="location" class="text-dark">Location:</label>
                            <input type="text" class="form-control" placeholder="ex: Myer Hall">
                        </div>

                        <div class="form-group">
                            <label for="date" class="text-dark">Date:</label>
                            <input type="text" class="form-control" placeholder="05-06-2019">
                        </div>

                        <div class="form-group">
                            <label for="request" class="text-dark">Request:</label>
                            <textarea class="form-control" rows="6">
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>

            </div>
        </div>

    </div>


    <!-- Body -->
    <main id="body" class="my-4">
        <div class="container">
            <h2>Settings</h2>
            <hr>

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
                        <b>Note:</b> The more requests you receive, the more people receive your requests when you need help.
                    </small>
                </div>

                <button type="submit" class="btn btn-success" name="update-settings">Update settings</button>
            </form>
            <hr>

            <form method="post">
                <h3 class="text-danger">Delete account</h3>
                <div class="form-group">
                    <label>Once you delete your account, there is no going back. Please be certain.</label>
                    <br>
                    <button type="submit" class="btn btn-danger">Delete account</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../JS/validateForm.js"></script>
</body>

</html>