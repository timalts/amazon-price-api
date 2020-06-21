<?php
header('Content-Type: application/json');
if(isset($_GET['link'])){
        $link = $_GET['link'];
        $py = 'python3.7 amazon.py '. $link .'';
        echo(exec($py));
    }
    else{
        echo "No link parameter found";
    }
?>