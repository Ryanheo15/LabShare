<?php session_start(); ?>
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

    <title>Inventory · LabShare</title>
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
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item active">
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

<!-- Body -->
<section id="body" class="my-4">
    <div class="container">
        <h2>Inventory</h2>
        <hr>

        <!-- Taskbar -->
        <div class="container bg-secondary py-2 mb-2">
            <div class="row">
                <div class="col-auto">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addItemModal">Add Item</button>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" placeholder="Search">
                </div>
                <div class="col">
                    <div class="form-group row mb-0">
                        <label for="table_size" class="col-auto col-form-label text-white pr-0">Table Size:</label>
                        <div class="col-4 pl-1">
                            <input type="number" class="form-control p-1 w-25" id="table_size" value=10>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Table -->
        <div id="table">
            <table class="table table-light table-striped table-bordered">
                <!-- Table Headers -->
                <thead class="thead-dark">
                <tr>
                    <th>Name<i class="fas fa-sort ml-2"></i></th>
                    <th>State<i class="fas fa-sort ml-2"></i></th>
                    <th>Size<i class="fas fa-sort ml-2"></i></th>
                    <th>Quantity<i class="fas fa-sort ml-2"></i></th>
                    <th>Manufacturer<i class="fas fa-sort ml-2"></i></th>
                    <th>CAS Number<i class="fas fa-sort ml-2"></i></th>
                    <th>Comments</th>
                </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>

        <!-- Page Navigation -->
        <nav aria-label="Page navigation">
            <ul class="pagination text-primary">
                <li class="page-item">
                    <a id="prev" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a id="next" class="page-link" aria-label="Next">
                            <span aria-hidden="true">
                                <span aria-hidden="true">&raquo;</span>
                            </span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Loading Modal -->
        <div id="loading-modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Loading</h5>
                    </div>
                    <div class="modal-body">
                        <p>Please wait for the table to finish loading.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Item Modal -->
        <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addItemModalLabel">Add Inventory Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="inventory.php?add=true" method="post" class="needs-validation" novalidate>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Hydrogen Dioxide" required>
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-form-label">State:</label>
                                <select class="custom-select" id="state" name="state">
                                    <option value="Liquid">Liquid</option>
                                    <option value="Solid">Solid</option>
                                    <option value="Gas">Gas</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="size" class="col-form-label">Size:</label>
                                    <input type="number" class="form-control" id="size" name="size" min="0" step="0.001"
                                           placeholder="0.25" required>
                                </div>
                                <div class="form-group col">
                                    <label for="unit" class="col-form-label">Unit:</label>
                                    <input type="text" class="form-control" id="unit" name="unit"
                                           placeholder="Liters (L)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="col-form-label">Quantity:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" min="0"
                                       placeholder="1" required>
                            </div>
                            <div class="form-group">
                                <label for="manufacturer" class="col-form-label">Manufacturer:</label>
                                <input type="text" class="form-control" id="manufacturer" name="manufacturer"
                                       placeholder="Fisher Scientific">
                            </div>
                            <div class="form-group">
                                <label for="cas_number" class="col-form-label">CAS Number:</label>
                                <input type="text" class="form-control" id="cas_number" name="cas_number"
                                       placeholder="7647-01-0">
                            </div>
                            <div class="form-group">
                                <label for="comments" class="col-form-label">Comments:</label>
                                <textarea class="form-control" id="comments" name="comments" rows="4"
                                          placeholder="33-38% Purity"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Request Modal -->
        <div class="modal fade" id="requestModal" tabindex=-1 aria-labelledby="requestModalLabel" aria-hidden="true">
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

    </div>
</section>

<!-- Add Item to Database -->
<?php
include '../../PHP/includes/db_connection.php';

if (isset($_GET['add'])) {
    $name = $_POST['name'];
    $state = $_POST['state'];
    $size = $_POST['size'];
    $unit = $_POST['unit'];
    $quantity = $_POST['quantity'];
    $manufacturer = $_POST['manufacturer'];
    $cas_number = $_POST['cas_number'];
    $comments = $_POST['comments'];
    $user_id = $_SESSION['id'];

    $item_insert_query = "INSERT INTO inventory(name, state, size, unit, quantity, manufacturer, cas_number, comments, user_id)
            VALUES ('$name', '$state', '$size', '$unit', '$quantity', '$manufacturer', '$cas_number', '$comments', '$user_id')";

    if ($connection->query($item_insert_query) === TRUE) {
        echo "<script> location.href='inventory.php'; </script>";
    } else {
        echo "Error: " . $item_insert_query . "<br>" . $connection->error;
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

<?php include '../../JS/inventory.php'; ?>
</body>

</html>
