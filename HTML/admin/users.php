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

    <title>Users · Admin LabShare</title>
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
            <h1 id="users">Users</h1>

            <div class="card">
                <div class="card-body">
                    <!-- Table Of Users -->
                    <div class="container mx-0">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Institution</th>
                                <th scope="col">Department</th>
                                <th scope="col">Division</th>
                                <th scope="col">Building</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            include '../../PHP/includes/db_connection.php';

                            $get_user_info = "SELECT first_name, last_name, email, institution, department, division, building FROM users";
                            $user_info_query = mysqli_query($connection, $get_user_info);
                            $num_of_users = mysqli_num_rows($user_info_query);

                            if ($num_of_users > 0) {
                                while ($user = mysqli_fetch_assoc($user_info_query)) {
                                    echo '<tr>';
                                    foreach ($user as $col) {
                                        echo '<td>' . $col . '</td>';
                                    }
                                    echo '<td>';
                                    echo '<a class="btn btn-danger delete" href="users.php?delete=' . $user['email'] . '">Delete</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <hr>
        </main>

    </div>
</div>

<!-- Remove Entry -->
<?php
if (isset($_GET['delete'])) {
    $email = $_GET['delete'];
    $delete_user = "DELETE FROM users WHERE email = '$email'";
    $delete_user_query = mysqli_query($connection, $delete_user);

    echo '<script> location.href = "users.php"; </script>';
}

?>
<script>
    var x = document.getElementsByClassName("delete");

    console.log(x);

    var i;
    for (i = 0; i < x.length; i++) {
        x[i].addEventListener("click", function (event) {
            if (!confirm("Are you sure you want to delete this user?")) {
                event.preventDefault();
            }
        });
    }
</script>

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
</body>

</html>
