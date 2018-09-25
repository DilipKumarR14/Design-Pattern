<?php
session_start();
//initialize the variable
$name="";
$address="";
$id=0;
//upadte
$edit_state=false;
//connect to database

$db=mysqli_connect('localhost','root','admin','crud');

//if save button is clicked
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $address=$_POST['address'];

    $query="INSERT INTO info(name,address) VALUES('$name','$address')";
    mysqli_query($db,$query);
    $_SESSION['msg']="Address Saved";
    header('location: index.php');// redirect to index page after inserting
}

//update records
if(isset($_POST['update'])){
    $name = mysql_real_escape_string($_POST['name']);
    $address=mysql_real_escape_string($_POST['address']);
    $id=mysql_real_escape_string($_POST['id']);
}



//retrive records
$result=mysqli_query($db,"SELECT * FROM info")

?>