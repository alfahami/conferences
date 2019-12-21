<?php
//SESSION
session_start();
//Inclure config
require('config.php');

// NOS SUPER CLASSES
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controleur.php');
require('classes/Model.php');

//NOS CONTROLEURS
require('controleurs/accueil.php');
require('controleurs/admins.php');
require('controleurs/utilisateurs.php');


//NOS MODELS
require('models/accueil.php');
require('models/admin.php');
require('models/utilisateur.php');




$bootstrap = new Bootstrap($_GET);
$controleur = $bootstrap->creerControleur();
if($controleur){
  $controleur->executerAction();
}

?>
