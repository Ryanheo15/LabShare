<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>User Info · LabShare</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <div class="container">
            <span class="navbar-brand text-white">LabShare Dev Tools</span>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../../HTML/" class="nav-link text-info">LabShare Home</a>
                    </li>

                    <li class="nav-item active">
                        <a href="databases.php" class="nav-link text-white">Databases</a>
                    </li>

                    <li class="nav-item">
                        <a href="encrypt.php" class="nav-link text-white">Encrypt Tool</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container mx-0">
            <h1 class="text-info">Databases</h1>
            <h2>users</h2>
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Institution</th>
                        <th scope="col">Department</th>
                        <th scope="col">Division</th>
                        <th scope="col">Building</th>
                        <th scope="col">Notification Limit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        session_start();
        include '../includes/db_connection.php';

        $sql = "SELECT * FROM users";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                foreach ($row as $col) {
                    echo '<td>' . $col . '</td>';
                }
                echo '</tr>';
            }
        }

        echo '<tr>';
        foreach ($_SESSION as $col) {
            echo '<td><b>' . $col . '</b></td>';
        }
        echo '</tr>';
    ?>
                </tbody>
            </table>

            <p>
                <h2 class="text-warning">Key:</h2>
                <b>Bold</b> = Current Session Entry
            </p>
        </div>
    </main>
</body>

</html>
