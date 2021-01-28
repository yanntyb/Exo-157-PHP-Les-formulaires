<?php

// Premiere ligne
if(isset($_POST["fname"])){
    $name = strip_tags($_POST["fname"]);
}
else{
    $name = "error";
}

echo "Bienvenue ". $_POST["fname"];





