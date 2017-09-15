<?php
session_start();
$uname = $_POST['userfield'];
$passw = $_POST['passfield'];

include('../connect.php');

$query = "SELECT * FROM P1Users WHERE user='$uname' AND pword=MD5('$passw')";
$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);

if($count > 0) {
    //set session variable
    $_SESSION['csc2024_40083555'] = $uname;
    //form data is correct
header("Location: menu.php"); } 
else {
    //form data is incorrect
    header("Location: login.php");
        
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>