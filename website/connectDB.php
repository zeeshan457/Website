<?php

$servername="localhost";
$username="root";
$password="";
$db="ZSportsDatabase";

//connect
$conn=new mysqli($servername,$username,$password, $db);

if($conn->connect_error){
    echo ("connection failed".$conn->connect_error());
}
else{
    //   echo "connection successful";
}