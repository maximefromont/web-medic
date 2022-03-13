<?php session_start() ?>
<html lang="fr">
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>WebMedic</title>
</head>

<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand headerFont" href="logout.php">WebMedic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if(!isset($_SESSION['id'])){echo("disabled");}else{echo("active");}?>" aria-current="page" href="patientsList.php">Liste des patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(!isset($_SESSION['id'])){echo("disabled");}else{echo("active");}?>" aria-current="page" href="addPatient.php">Ajouter un patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(!isset($_SESSION['id'])){echo("disabled");}else{echo("active");}?>" href="logout.php">Se déconnecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"><?php echo "Connecté en tant que : ".$_SESSION['login'];?></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

</html>