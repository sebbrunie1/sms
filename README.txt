//--------------------------------------------------//
// Envoi de SMS avec FreeMobile                     //
// version 1.4 - juin 2014                          //
// Auteur: R.SYREK - Rem'S                          //
// Mail: rems99@gmail.com                           //
//--------------------------------------------------//

Outil d'envoi de SMS via la plateforme FreeMobile

Fichiers NAS/serveur PHP:
Config.php
FonctionSMS.php
sendSMS.php
index.html
Readme.txt

Module Virtuel HC2 de Fibaro:
FreeSMS.vfib
free-mobile-logo.png

Installation
-importer le VD (Module Virtuel) dans votre HC2 et changer les donnée dans le SETTINGS par les votres
-créer une variable globale « mysms » dans panneaux variables avec valeur vide ou 0
-importer le dossier sms sur votre serveur php
-dans le fichier config.php renseigner vos codes d’accès

Utilisation
Intégrez dans vos scènes ou Modules le code suivant:

-- message sms a envoyer
fibaro:setGlobal("mysms", "Mon message");
-- activation du périphérique virtuel et bouton ad hoc 
-- XXX=ID de votre module Virtuel
fibaro:call(XXX, "pressButton", "1");

Mise à jour:
13/06/2014 V1.0 - creation
16/06/2014 V1.2 - (fonctionSMS.php / FreeSMS.vfib) ajout de gestion de reponses vers HC2. Ajout de l'icone free-mobile-logo.png
23/06/2014 V1.4 - (fonctionSMS.php / config.php / FreeSMS.vfib) ajout de gestion de plusieurs numéros