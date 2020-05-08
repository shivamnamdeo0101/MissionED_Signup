<?php

    $conn=mysqli_connect('localhost','root','','missioned');
   
    if(!$conn)
    {
        die(' Please Check Your Connection'.mysqli_error($conn));
    }
?>