<?php
session_start();
$i = $_SESSION['chosenItem'];
//$i->id = $_SESSION['chosenUpdateId'];

return update();

function update(){
    if(isset($_GET['update'])){
        $out = "<div id='update'>";
        $out .= include_once("./template/pageUpdate.php");
        $out .= "</div>";
        return $out;
    }
}

