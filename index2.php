<?php
// index2.php?nom=Nemare&prenom=Jean
if(isset($_GET['age'], $_GET['nom'], $_GET['prenom'])){
    echo $_GET['age']. " " .$_GET['nom']. " " .$_GET['prenom'];
}elseif(!isset($_GET['age'])){
    echo "Erreur il n'y a pas de paramètre âge";
}else{
    echo "Erreur dans l'un des paramètres nom ou prénom n'existe pas";
}