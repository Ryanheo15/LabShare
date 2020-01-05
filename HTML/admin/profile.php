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

    <title>Profile · Admin LabShare</title>
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
        <main>
            <div class="row">
                <div class="col-4">
                    <h1 id="profile">Profile</h1>

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
                                             alt="Profile Picture" class="img-fluid rounded-lg profile-pic">
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

                                    <div class="col-auto">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#profileModal" id="modalBtn">Edit Profile
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END: Profile Card -->

                    <hr>
                </div>
            </div>
        </main>

    </div>
</div>

<!-- Edit Profile Modal Section -->
<div class="modal fade" role="dialog" id="profileModal" tabindex=-1 aria-labelledby="profileModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center text-dark modal-title" id="profileModalLabel">Edit Profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="profile-form" action="#" method="post">

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
<!-- END: Modal -->

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

<!-- PHP include -->
<?php include "../../JS/post_user_profile_update.php"; ?>
</body>

</html>
