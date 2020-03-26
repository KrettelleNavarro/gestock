<?php

/**
 * General controllers
 * Get = select
 * Post = insert
 * Put = update
 * Delete = delete
 */
class Controllers
{

    // ####################################################################### PARTIE SECURISATION
    /**
     * Sécurise les variables d'un tableau clé/valeur
     *
     * @param array => Tableau
     * @return array => Tableau avec les valeurs après sécurisation : supprime les balises HTML et PHP d'une chaine de caractère,
     * remplace les espaces trops longs,
     * traduit les entités HTML dans une chaine de caractères,
     * enleve les espaces du début et de fin,
     */
    public static function secureArray($array)
    {
        $newArray = array();
        foreach ($array as $key => $value) {
            // Si la valeur n'est pas un tableau
            if (!is_array($value)) {
                $value = strip_tags($value); // Supprime les balises HTML et PHP d'une chaine de caractère
                $value = htmlspecialchars($value); // Traduit les entités HTML dans une chaine de caractères
                $value = Trim($value); // Enleve les espaces du début et de fin
                $newArray[$key] = $value; // Remplace dans le tableau l'ancienne valeur par la nouvelle
                // Sinon on remet les valeurs telles quelles
            } else {
                $newArray[$key] = $value;
            }
        }
        return $newArray;
    }
    //si cela ne fonctionne pas mettre le variable $maVAr
    public static function writingHello($prenom)
    {
        $returnText = "Bonjour " . $prenom . " !";

        return $returnText;
    }

    static function isConnected()
    {
        if (isset($_SESSION["idUser"]) && !empty($_SESSION['idUser'])) {
            return true;
        } else {
            return false;
        }

        //peut aussi s'écrire ainsi :
        // return (isset($_SESSION["idUser"]) && !empty($_SESSION['idUser'])) ? true : false;
    }
    static function verifUserIfExist($email, $pwd)
    {
        $param = "?ctrl=getUsers";
        $resultGetCurl = self::getCurlRest($param);
        $resultGetCurl = json_decode($resultGetCurl);
        var_dump($resultGetCurl);
        die();

        if ($resultGetCurl->status == "failed") {
            die("Une erreur est survenue ! Veuillez contacter le support technique!");
        } elseif ($resultGetCurl->status == "success") {
            foreach ($resultGetCurl->result as $user) {
                if ($email == $user->email && $pwd == $user->mot_de_passe) {
                    $_SESSION['idUser'] = $user->id;
                    $_SESSION["nameUser"] = $user->prenom;
                    $_SESSION["lastNameUser"] = $user->nom;
                    $_SESSION["emailUser"] = $user->email;
                    $_SESSION["typeUser"] = $user->type;
                    return true;
                }
            }
            return false;
            // echo "<pre>";
            // // var_dump($resultGetCurl->result);
            // echo "</pre>";
            // // echo $resultGetCurl->result->email;
        } else {
            die("Erreur critique!");
        }
    }


    /**
     * Call curl on API in REST
     * @param int $param => params for call api
     * @return json => result API
     */
    static function getCurlRest($param)
    {
        // Curl init
        $curl = curl_init();

        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST . $param);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        curl_close($curl);
        return $result;
    }

    /**
     * Call curl on API in REST
     * @param array $param => params for call api
     * @return json => result API
     */
    static function postCurlRest($param)
    {
        // Treatment param
        $postVars = http_build_query($param);
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postVars);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        /* echo "<pre>";
          print_r($result); /* */
        curl_close($curl);
        return $result;
    }

    /**
     * Call curl on API in REST on PUT method
     * @param array $param => params for call api
     * @return json => result API
     */
    static function putCurlRest($param)
    {
        // Treatment param
        $postVars = http_build_query($param);
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postVars);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        // For test
        /* echo "<pre> curlComponent => putCurlRest<hr>";
          print_r($result);
          echo "</pre>"; /* */
        curl_close($curl);
        return $result;
    }

    /**
     * Call curl on API in REST on DELETE method
     * @param array $param => params for call api
     * @return json => result API
     */
    static function deleteCurlRest($param)
    {
        // Treatment param
        $postVars = http_build_query($param);
        // Curl init
        $curl = curl_init();
        // Curl config
        curl_setopt($curl, CURLOPT_URL, URL_CURL_API_REST);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postVars);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        // Curl result
        $result = curl_exec($curl);
        // var_dump($result);
        curl_close($curl);
        return $result;
    }
}
