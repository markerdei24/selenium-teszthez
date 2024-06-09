<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft István turné állomásai </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<navbar id="navbar">
    <nav class="navbar navbar-expand-md navbar-custom">
        <a class="navbar-brand text-white" href="index.php"><h2 class="navbar-text">Mc István</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="bejelentkezes.php"><p class="navbar-text"  id="bt-login" >Belépés</p></a>
                </li>
            </ul>
        </div>
    </nav>
</navbar>

    <div class="container_login">
        <?php
        include "php/data.php";
        include "php/loginView.php";
        ?>
    </div>

    <div class=footer>
    <p > McIstván Music Production</p>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

</body>
</html>
