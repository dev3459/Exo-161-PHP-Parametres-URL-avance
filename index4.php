<?php
// index4.php?langage=PHP&serveur=LAMP
$g = $_GET;
if(isset($g['langage'], $g['serveur']) && !empty($g['langage'] && $g['serveur'])){
    echo $g['langage']. " " .$g['serveur'];
}