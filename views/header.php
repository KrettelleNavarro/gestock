<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- meta Tag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- lien vers Bootstrap     -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" /> <!-- pour les icones -->

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial&display=swap" />

    <!-- library css et js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- library databse de bootsrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <!-- library jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- lien vers font-awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"></script>

    <!-- Jquery récupéré de Yannick-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/component/css/style.css">

    <!-- JS depuis bootstrap récupéré de Yannick-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpasth.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="shortcut icon" href="../component/img/gastIcon.png" type="image/x-icon"> -->
    <!-- lien vers css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Titre -->
    <title>geStock</title>
</head>

<body>


    <!-- création de la barre de navigation -->
    <header>
        <nav class="navbar navbar-dark bg-dark container-fluid">
            <a class="navbar-brand" href="#home"><i class="fas fa-home"></i>
                <img src="../component/img/logo.png" width="45%" class="d-inline-block align-top" alt="logo">
            </a>
            <span class="text-white"><?php echo Controllers::writingHello("Krettelle") ?></span>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-blanc my-2 my-sm-0" type="submit">Se connecter </button>
            </form>
        </nav>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#"><img src="./asset/logo.jpeg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <span class="text-white">
            ?php echo Controllers::writingHello($arrayVar["prenom"]) ?> -->
            </span>



            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-blue my-2 my-sm-0" type="submit">--- </button>
                </form>
            </div>
            <!-- <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-blanc my-2 my-sm-0" type="submit">Se connecter </button>
            </form> -->
        </nav>
    </header>