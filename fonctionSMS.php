<?php
//--------------------------------------------------//
// Envoi de SMS avec FreeMobile                     //
// version 1.4 - juin 2014                          //
// Auteur: R.SYREK - Rem'S                          //
// Mail: rems99@gmail.com                           //
// http://www.domotique-home.fr                     //
//--------------------------------------------------//

function sendSMS($msg,$number)
{
include 'config.php';

	$url = 'https://smsapi.free-mobile.fr/sendmsg?user='.$user.'&pass='.$pass.'&msg='.$msg.'';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url,
		CURLOPT_USERAGENT => 'Codular Sample cURL Request'
	));

	if(curl_exec($curl) === false)
	{
		echo 'Error: ' . curl_error($ch);
	}
	else
	{
    //Gestion de reponses vers HC2
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    switch ($httpCode) {
    case "200":
        echo "SMS envoyé";
        break;
    case "400":
        echo "Paramètres manquant";
        break;
    case "402":
        echo "Trop de SMS";
        break;
    case "403":
        echo "Donnée incorrect";
        break;
    case "500":
        echo "Erreur serveur";
        break;
    default:
        echo "Erreur inconnue";
}

    
	}

	curl_close($curl);
}


?>