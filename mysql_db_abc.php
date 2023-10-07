<?php
Define('db_name','myDB');
Define('db_host','localhost');
Define('db_password','');
Define('db_user','root');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alenbezacharity";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("conn failed:".mysqli_connect_error());
}