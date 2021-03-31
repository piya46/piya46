<?php

//เรียกค่าการเชื่อมต่อฐานข้อมูล
$con=mysqli_connect("localhost","root","","god","3308") or die("Eror DB");

//
$name = $_POST["Name"] ;
$surename = $_POST["Surename"];
$adress = $_POST["Adress"];
$zipcoad = $_POST["Zipcoad"];
$username = $_POST["Username"];
$password = md5($_POST["Password"]);
$email = $_POST["Email"];


// save data
$sql = "INSERT INTO member_mem(name,surename,adress,zipcoad,username,password,email) VALUES('$name','$surename','$adress','$zipcoad','$surename','$password','$email')";
$result = mysqli_query($con,$sql);

if($result){
    header("location:register.php");
    exit(0);
}
else{
    echo mysqli_error($con);
}
?>