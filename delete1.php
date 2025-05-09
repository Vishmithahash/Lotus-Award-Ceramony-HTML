<?php
    include "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `user_form` where id=$id";
        $conn->query($sql);
        
    }
    header('location:login.php');
    
    
    exit;
?>