<?php
//--------------------------------------------------//
// Envoi de SMS avec FreeMobile                     //
// version 1.4 - juin 2014                          //
// Auteur: R.SYREK - Rem'S                          //
// Mail: rems99@gmail.com                           //
// http://www.domotique-home.fr                     //
//--------------------------------------------------//

include 'fonctionSMS.php';

$msg =  htmlentities($_GET['msg']);
$number = htmlentities($_GET['number']);
sendSMS($msg,$number);

?>