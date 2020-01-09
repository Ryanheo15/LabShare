<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Encrypt Tool · LabShare</title>
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
                        <a href="../../pages/" class="nav-link text-info">LabShare Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="databases.php" class="nav-link text-white">Databases</a>
                    </li>

                    <li class="nav-item active">
                        <a href="encrypt.php" class="nav-link text-white">Encrypt Tool</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <h1 class="text-info">Encrypt Tool</h1>
            <h3 class="text-danger">Enter text to encrypt:</h3>
            <?php
                include '../includes/global.php';

                echo
                "<form method='get'>
                    <input type='text' name='text'>
                    <input type='submit'>
                </form>";

                echo "<h3 class='text-success'>Encrypted Text:</h3>";

                if (!isset($_GET['text'])) {
                    $_GET['text'] = '';
                }
                echo encrypt($_GET['text']);
            ?>
        </div>
    </main>
</body>

</html>
