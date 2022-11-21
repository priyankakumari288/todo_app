<?php
session_start();
include 'connection.php';

if(isset($_POST['add'])){
    // print_r($_POST);die;
    $todo =$_POST['todo'];
   
    $q = "INSERT INTO `todoadmin`(`todo`) VALUES ('$todo')";
    $query = mysqli_query($con,$q);
    header('location:todoadd.php');
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "DELETE FROM `todoadmin` WHERE id =$id";
        $query = mysqli_query($con,$q);
        header('location:todoadd.php');
        }
        
  
