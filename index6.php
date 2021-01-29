<?php
// index6.php?batiment=12&salle=101
$g = $_GET;
if(isset($g['batiment'], $g['salle']) && !empty($g['batiment'] && $g['salle'])){
    echo $g['batiment']. " " .$g['salle'];
}