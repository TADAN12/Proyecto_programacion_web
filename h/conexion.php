<?php

$servidor="localhost";
$user="root"; 
$psw="";
$db="test";

$conn=new mysqli($servidor,$user,$psw,$db);

if($conn){

echo"Conectad";

}
else{

    echo"no se conect";

}



?>