<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/admin.css">

    <title>Profile · Admin LabShare</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'sidebar.php'?>

        <!-- Page Content  -->
        <div id="content">
            <!-- NavBar -->
            <?php include 'navbar.php'?>

            <!-- Body -->
            <div class="container">
                <h1 id="profile">Profile</h1>

                <!-- Card One: Profile -->
                <div class="card">
                    <div class="card-body">
                        <div class="card w-50">
                            <div class="first card-header bg-dark text-white">
                                Profile
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="d-flex">
                                        <div class="col-7">
                                            <div class="prof-pic img-fluid"></div>
                                        </div>

                                        <div class="col-8 align">
                                            <div class="align-self-end">John Smith</div>
                                            <div class="align-self-end">jsmith@ucsd.edu</div>
                                            <div class="align-self-end text-info">LabShare Moderator</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-3">
                                    <div class="row">
                                        <p><strong>Institution: </strong>UCSD</p>
                                    </div>

                                    <div class="row">
                                        <p><strong>Building: </strong>Urey Hall</p>
                                    </div>

                                    <div class="row">
                                        <p><strong>Department: </strong>Biology</p>
                                    </div>

                                    <div class="row">
                                        <p><strong>Division: </strong>Neuroscience</p>
                                        <div class="w-25"></div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#profileModal" id="modalBtn">Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Profile Card -->

                <hr>
            </div>

        </div>
    </div>

    <!-- Edit Profile Modal Section -->
    <div class="modal fade" role="dialog" id="profileModal" tabindex=-1 aria-labelledby="profileModalLabel" aria-hidden="true">

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../JS/sidebar.js"></script>
</body>

</html>
