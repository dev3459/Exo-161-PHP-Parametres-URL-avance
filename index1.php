<?php
// index1.php?nom=Nemare&prenom=Jean
if(isset($_GET['nom'], $_GET['prenom'])){
    echo $_GET['nom']. " " . $_GET['prenom'];
}