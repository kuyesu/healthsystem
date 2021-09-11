<?php

$conn = new mysqli("localhost","root","","healthsystem");

if($conn->connect_error){
    echo "Failed To connect:{$conn->connect_error}";
}else{
    
}

?>