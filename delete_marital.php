<?php
    include 'config.php';

    $religion_id = $_GET['id'];
    $query = "DELETE FROM `marital` WHERE `marital_id` = '$marital_id'";
    $result = mysqli_query($conn, $query);
    header("Location: marital.php");
    exit();
?>