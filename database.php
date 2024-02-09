<?php

//create my object
$db = new mysqli ("localhost","root","","quizerr");

if($db->connect_error){
    echo "salam";
    echo $db->connect_error;
}else 
{

    $db->query("SET CHARACTER SET utf8");
}



?>