<?php
require 'db2.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM thedata WHERE id='$id'";
     $result = mysqli_query($conn, $query);
     if($result){
        header("Location: boot2.php");
        exit();
     }else{
        echo'failed to delte';
     }
}

     
     else{
        header("Loaction: boot2.php");
        exit();
     }