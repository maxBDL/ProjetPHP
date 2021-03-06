<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
$view = new View();
session_start();

if (isset($_SESSION["session"])) {
    $utilisateur = $dao->getUtilisateur($_SESSION["session"]);
    $view->assign('utilisateur',$utilisateur);
}

$view->display("viewAccount.php");
?>
