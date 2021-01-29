<?php
// index5.php?semaine=12

if(isset($_GET['semaine']) && !empty($_GET['semaine'])){
    echo $_GET['semaine'];
}