<?php

include 'connection.php';

        $id=$_GET['id'];
        $status=$_GET['status'];
        $q = "UPDATE todoadmin SET status=$status WHERE id=$id";
        $query = mysqli_query($con,$q);
        header('location:todoadd.php');

        ?>
        