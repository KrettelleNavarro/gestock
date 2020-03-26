<?php
// #############################################################################
// INFO SERVEUR ################################################################
// #############################################################################

// echo __DIR__ ."<br>";
// echo $_SERVER['SERVER_NAME']."<br>";
// echo $_SERVER['REMOTE_ADDR']."<br>";
// die("Die ici ==> ".$_SERVER['PHP_SELF']); /* */
// Mode test - actif 0-1
define('MODE_TEST', 1);
// Liste des serveurs de dev
define('LISTE_SERVEUR_DE_DEV', array("192.168.1.12", "121.168.1.23", "121.168.1.13",));
// Liste des serveurs de prod
define('LISTE_SERVEUR_DE_PROD', array("192.168.1.1", "121.168.1.2", "121.168.1.3",));


// #############################################################################
// LOCAL CONFIGURATION #########################################################
// #############################################################################
if ($_SERVER['SERVER_NAME'] == "gestock" or $_SERVER['REMOTE_ADDR'] == "::1") {
    // Conf email support technique
    define('EMAIL_SUPPORT_TECH', 'k.navarro@wanadoo.fr');
    // Conf nom de domaine - Sert pour les communications
    define('WWW_NDD_GENERAL', 'gestock');
    // Conf Database
    define('HOST_DATABASE', '127.0.0.1');
    define('USERNAME_DATABASE', 'root');
    define('PASSWORD_DATABASE', 'root');
    define('CHARSET_BDD', 'UTF8');
    // Nom Bdd Applications
    define('DATABASE_NAME_GESTION_STOCK_DEV', 'gestion_stock'); // Bdd locale
    // define('DATABASE_NAME_TOTO02', 'toto2'); // Bdd copie de prod
    // Definition du path en local de la racine du projet
    define('PATH_MACHINE', 'C:/UwAmp/www/gestock/');
    // Definition du path du host principal
    define('HTTP_PATH_HOST_PRINCIPAL', 'http://gestock/');
    // Definition du path du dossier readme process
    // define('HTTP_PATH_SERVICES', 'toto/');
    // Definition du path des views
    define('HTTP_PATH_VIEWS', 'views/');
    // Var de sécurité pour l'authentification
    define('VAR_SECURE_AUTH', 'huihui6huihui6_*huihui6-ff(-fkf--*4812');
    // Langue par defaut
    define('LANGUE_PAR_DEFAUT', 'fra');
    // Nom des cookies
    define('COOKIE_RESTER_CONNECTE', "aqJkliç_çelinhHYF235623");
    define('COOKIE_HTTPS_ONLY', FALSE);
    // Url api curl
    define('URL_CURL_API_REST', HTTP_PATH_HOST_PRINCIPAL . 'api/rest');


    // #############################################################################
    // EXT CONFIGURATION ###########################################################
    // #############################################################################
} elseif ($_SERVER['SERVER_NAME'] == "www.toto.com" or $_SERVER['REMOTE_ADDR'] == "198.58.99.125") {

    // ###############################################################
    // ################ CONF DES SERVICES ############################
    // ###############################################################

    // ################ CONF PROD ###########################
    // Conf email support technique
    define('EMAIL_SUPPORT_TECH', 'tech@gestock.comr');
    // Conf nom de domaine - Sert pour les communications
    define('WWW_NDD_GENERAL', 'www.gestock');
    // Conf Database
    define('HOST_DATABASE', '8484cpcplo1/bddUser/Kjkkj');
    define('USERNAME_DATABASE', 'knav8747895425kjskjj');
    define('PASSWORD_DATABASE', '');
    define('CHARSET_BDD', 'UTF8');
    // Nom Bdd Applications
    define('DATABASE_NAME_GESTION_STOCK_DEV', 'gestion_stock_prod'); // Bdd prod
    // define('DATABASE_NAME_GESTION_STOCK_ARCHIVE', 'gestion_stock_archive_prod'); // Bdd archive
    // Definition du path en local de la racine du projet
    define('PATH_MACHINE', 'D:/workspace/toto/');
    // Definition du path du host principal
    define('HTTP_PATH_HOST_PRINCIPAL', 'http://toto/');
    // Definition du path du dossier readme process
    define('HTTP_PATH_SERVICES', 'toto/');
    // Definition du path des views
    define('HTTP_PATH_VIEWS', 'views/');
    // Var de sécurité pour l'authentification
    define('VAR_SECURE_AUTH', 'yoyo');
    // Langue par defaut
    define('LANGUE_PAR_DEFAUT', 'fra');
    // Nom des cookies
    define('COOKIE_RESTER_CONNECTE', "yaya");
    define('COOKIE_HTTPS_ONLY', FALSE);


    // 

    // #############################################################################
    // SI ERREUR ###################################################################
    // #############################################################################
} else {
    die("Une erreur c'est produite. ERROR A00000001.");
}
