<?php session_start(); ?>
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

    <title>Home · LabShare</title>
</head>

<body>

<!-- FIXME: Fix active nav bar links and collapsable button later -->
<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
    <div class="container">
        <a href="index.php" class="navbar-brand text-white">LabShare</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="inventory.php" class="nav-link text-white">Inventory</a>
                </li>

                <li class="nav-item">
                    <a href="inbox.php" class="nav-link text-white">
                        Messages <span class="badge badge-light">8</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="notifications.php" class="nav-link text-white">
                        Notifications <span class="badge badge-light">4</span>
                    </a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0 ml-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-outline-light my-2 my-sm-0 " data-toggle="modal"
                        data-target="#requestModal" id="modalBtn">Ask A Favor
                </button>
            </form>

            <!-- Dropdown -->
            <div class="dropdown ml-2">
                <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown">
                    <img id="nav-pic" width="30" height="30" class="img-fluid rounded"
                         src="../../Resources/blank-profile-picture-973460_640.png">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="../help">Help</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.php">Log out</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Edit Profile Modal Section -->
<div class="modal fade" role="dialog" id="profileModal" tabindex=-1 aria-labelledby="ProfileModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center text-dark modal-title" id="ProfileModalLabel">Edit Profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="request-form" action="#" method="post">

                    <div class="form-group">
                        <label for="name" class="text-dark">Name:</label>
                        <input type="text" class="form-control" placeholder="John Smith">
                    </div>

                    <div class="form-group">
                        <label for="institution" class="text-dark">Institution:</label>
                        <input type="text" class="form-control" placeholder="UCSD">
                    </div>

                    <div class="form-group">
                        <label for="building" class="text-dark">Building:</label>
                        <input type="text" class="form-control" placeholder="Urey Hall">
                    </div>

                    <div class="form-group">
                        <label for="department" class="text-dark">Department:</label>
                        <input type="text" class="form-control" placeholder="Biology">
                    </div>

                    <div class="form-group">
                        <label for="division" class="text-dark">Division:</label>
                        <input type="text" class="form-control" placeholder="Neuroscience">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>

</div>

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


<!--Main Section  -->
<main class="main my-4">
    <div class="container">

        <div class="row">
            <div class="col-4">
                <div class="row">
                    <!-- Card One: Profile -->
                    <div class="card profile-card">
                        <div class="first card-header bg-dark text-white">
                            Profile
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-5 ml-2">
                                        <img src="../../Resources/blank-profile-picture-973460_640.png"
                                             alt="Profile Picture" class="img-fluid rounded-lg">
                                    </div>

                                    <div class="col-auto">
                                        <div class="row name">John Doe</div>
                                        <div class="row email">jdoe@ucsd.edu</div>
                                        <div class="row text-info">LabShare Admin</div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <strong>Institution:</strong>
                                        <span class="institution"></span>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <strong>Department:</strong>
                                        <span class="department"></span>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <strong>Division:</strong>
                                        <span class="division"></span>
                                    </div>
                                </div>

                                <div class="row justify-content-between">
                                    <div class="col align-self-center">
                                        <strong>Building:</strong>
                                        <span class="building"></span>
                                    </div>

                                    <div class="col-auto pr-0">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#profileModal" id="modalBtn">Edit Profile
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END: Profile Card -->

                    <!-- CARD TWO: Helpful Links
                    <div class="card mt-4">

                        <div class="card-header bg-primary text-white">
                            Helpful Links
                        </div>
                        <div class="card-body">
                            <div class="list-group helpful-links">
                                <a class="list-group-item list-group-item-action text-center" href="helpful-links/questions.html">Scientific Questions</a>
                                <a class="list-group-item list-group-item-action text-center" href="helpful-links/discussion.html">Recent Discussion</a>
                                <a class="list-group-item list-group-item-action text-center" href="helpful-links/lab.html">Lab Recommendation</a>
                                <a class="list-group-item list-group-item-action text-center" href="helpful-links/seminar.html">Seminar On Campus</a>
                            </div>
                        </div>
                    </div>
                    -->

                </div>

            </div>

            <!-- CARD TWO: Requests -->
            <div class="col-8">
                <div class="card requests">
                    <div class="card-header bg-dark text-white">
                        Requests
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="prof-pic img-fluid"></div>
                                    </div>

                                    <div class="col-6">
                                        <p>XXX from Myer Hall</p>
                                        <p>Does anyone have 5mg of tritonx100 I could borrow?</p>
                                    </div>

                                    <div class="col-3">
                                        <p class="date">Date: 05-06-2019</p>
                                        <br/>
                                        <button class="btn btn-md btn-primary text-white request-btn">
                                            Fulfilled
                                        </button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="prof-pic img-fluid"></div>
                                    </div>

                                    <div class="col-6">
                                        <p>XXX from Myer Hall</p>
                                        <p>Does anyone have 5mg of tritonx100 I could borrow?</p>
                                    </div>

                                    <div class="col-3">
                                        <p class="date">Date: 05-06-2019</p>
                                        <br/>
                                        <button class="btn btn-md btn-primary text-white request-btn">
                                            Fulfilled
                                        </button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="prof-pic img-fluid"></div>
                                    </div>

                                    <div class="col-6">
                                        <p>XXX from Myer Hall</p>
                                        <p>Does anyone have 5mg of tritonx100 I could borrow?</p>
                                    </div>

                                    <div class="col-3">
                                        <p class="date">Date: 05-06-2019</p>
                                        <br/>
                                        <button class="btn btn-md btn-primary text-white request-btn">
                                            Fulfilled
                                        </button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="prof-pic img-fluid"></div>
                                    </div>

                                    <div class="col-6">
                                        <p>XXX from Myer Hall</p>
                                        <p>Does anyone have 5mg of tritonx100 I could borrow?</p>
                                    </div>

                                    <div class="col-3">
                                        <p class="date">Date: 05-06-2019</p>
                                        <br/>
                                        <button class="btn btn-md btn-primary text-white request-btn">
                                            Fulfilled
                                        </button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>


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

<script src="../../JS/user_requests.js"></script>

<!-- PHP include -->
<?php include "../../JS/post_user_profile_update.php"; ?>
</body>

</html>
