<?php
// index3.php?dateDebut=2/05/2016&dateFin=27/11/2016
$g = $_GET;
if(isset($g['dateDebut'], $g['dateFin'])){
    echo "Date du début et de fin : ". $g['dateDebut'] . " - " . $g['dateFin'];
}