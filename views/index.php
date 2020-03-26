<?php

// Lancement de la session
session_start();
// Encodage de la page
header("Content-Type: text/html; charset=utf-8");
// Conf générale
require_once("../conf/generalConf.php");

//Test

// if (MODE_TEST == 1) {
//     echo "Test activé :" . HOST_DATABASE . "<br>";
// } else {
//     echo "Pas de Test activé :" . EMAIL_SUPPORT_TECH . "<br>";
// }

// Autoloader global
require_once(PATH_MACHINE . "autoLoader/AutoLoad.php");

// Pour afficher les erreurs php
if (MODE_TEST == 1) {
    // echo "Test activé <br>";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}
// for($i=0;$i<=5;$i++) {
//     echo $i."<br>";
// }
if (isset($arrayVar["signOut"]) && $arrayVar["signOut"] == "true") {
    unset($_SESSION["idUser"]);
    unset($_SESSION["nameUser"]);
    unset($_SESSION["lastNameUser"]);
    unset($_SESSION["emailUser"]);
    unset($_SESSION["typeUser"]);
}

$connection = Controllers::isConnected();

// Sécurisation des vars reçus
$arrayVar = Controllers::secureArray($_REQUEST);
// var_dump($arrayVar);
// die();

$errorConnection = false;
// Detection si le formulaire a été lancer (if action=="auth")
if (isset($arrayVar["action"]) && $arrayVar["action"] == "auth") {
    // die("merci pat");
    if (isset($arrayVar["email"]) && isset($arrayVar["password"])) {
        // if (filter_var($arrayVar["email"], FILTER_VALIDATE_EMAIL) && preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/',$arrayVar["password"])) {
        // die("merci fred");
        if (filter_var($arrayVar["email"], FILTER_VALIDATE_EMAIL) && !empty($arrayVar["password"])) {
            // die("merci lucille");
            $errorConnection = !(Controllers::verifUserIfExist($arrayVar["email"], $arrayVar["password"]));
        } else {
            $errorConnection = true;
        }
    }
}




// // Le formulaire permet delancer une demande d'authentification
// // Cette demande est traité par index.php dans views

// if (!isset($_GET['login']) && !isset($_GET['motdepasse'])) {
//     header('Location: index.php');
// } else {
//     //     // On va vérifier les variables
//     if (
//         !preg_match('/^[[:alnum:]]+$/', $_GET['login']) or
//         !preg_match('/^[[:alnum:]]+$/', $_GET['motdepasse'])
//     ) {
//         echo 'Vous devez entrer uniquement des lettres ou des chiffres <br/>';
//         echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
//         exit();
//     } else {
//         require('generalConf.php'); // On réclame le fichier
//         $login = $_GET['login'];
//         $motdepasse = $_GET['motdepasse'];
//     }
// }



// Detecter si le formulaire a été lancer (if action=="auth")
// if ($action == "auth") {
// }

// Detecter si les variables envoyé par le formulaire na sont pas vide  (email et pass pas vide)


// Appeler un controller "verifUserIfExist" qui sera dans Controllers.php de l'application
//  ==> le controller "verifUserIfExist" va appeler l'API pour récupérer la liste des users,
// vous parcourez la liste des resultats
// et il va comparer les resultats pour vérifier si il trouve bien  : email + mot de passe.
// si il trouve email et pass
// va renvoyer les données de l'utilsateur 
// $_SESSION["idUser"] = id
// $_SESSION["nameUser"]
// $_SESSION["lastNameUser"]
// $_SESSION["emailUser"]
// $_SESSION["typeUser"]



// Test de l'api


// $param = "?ctrl=getUsers";
// $resultGetCurl = Controllers::getCurlRest($param);
// $resultGetCurl = json_decode($resultGetCurl);

// if ($resultGetCurl->status == "failed") {
//     die("Une erreur est survenue ! Veuillez contacter le support technique!");
// } elseif ($resultGetCurl->status == "success") {
//     // echo "<pre>";
//     // // var_dump($resultGetCurl->result);
//     // echo "</pre>";
//     // // echo $resultGetCurl->result->email;
// } else {
//     die("Erreur critique!");
// }

// echo $resultGetCurl->status;
// echo $resultGetCurl->result;
// var_dump($resultGetCurl);
// die("");
// var_dump($resultGetCurl);


// echo "<pre>";
// echo "<textarea rows=5 cols=33>";
// var_dump($arrayVar);
// echo "</textarea>";
// echo "</pre>";
// echo "<pre>";
// var_dump($resultGetCurl);
// echo "</pre>";
// echo $resultGetCurl->result->email;


//Appel header general
require_once("header.php");

//Appel main general
require_once("main.php");

//Appel footer general
require_once("footer.php");
