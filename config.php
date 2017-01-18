<?php
//--------------------------------------------------//
// Envoi de SMS avec FreeMobile                     //
// version 1.4 - juin 2014                          //
// Auteur: R.SYREK - Rem'S                          //
// Mail: rems99@gmail.com                           //
//--------------------------------------------------//
 
 
 	//SETTINGS
  
  //For FreeMobile number 06XXXXXXX1  ------
  //LOGIN FREE MOBILE
	$user1 = '13327704';
  //PASSWORD FREE MOBILE 
	$pass1 = 'yBwzPWX6DDWUNM';
  
  //For FreeMobile number 06XXXXXXX2 ------
  //LOGIN FREE MOBILE
	$user2 = '91017859';
  //PASSWORD FREE MOBILE
	$pass2 = 'NKn7em0ayFSVXC';

  //For FreeMobile number 06XXXXXXX3 ------
  //LOGIN FREE MOBILE
	//$user3 = 'Login FreeMobile';     // <--- A décommenter pour 3eme ligne téléphonique
  //PASSWORD FREE MOBILE             
	//$pass3 = 'votre clé d\'identification FreeMobile'; // <--- A décommenter pour 3eme ligne téléphonique
  
switch ($number) {
  case 1:
    $user = $user1;
    $pass = $pass1;
    break;
  case 2:
    $user = $user2;
    $pass = $pass2;
    break;
  //case 3:            // <--- A décommenter pour 3eme ligne téléphonique
    //$user = $user3;  // <--- A décommenter pour 3eme ligne téléphonique
    //$pass = $pass3;  // <--- A décommenter pour 3eme ligne téléphonique
    //break;           // <--- A décommenter pour 3eme ligne téléphonique
  default:
    $user = $user1;
    $pass = $pass1;
}

?>