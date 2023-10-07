<?php
$error = array();
require("validity-checker.php");
$phonenumber=validate_text_input($_POST['phonenumber']);
if (empty($phonenumber)){
$error[]="You forget enter to your phonenumber";
}
$password=validate_text_input($_POST['password']);
if (empty($password)){
$error[]="You forget enter to your password";
}
$strphn="\"$phonenumber\"";
if(empty($error)){
require("mysql_db_abc.php");
$sql="SELECT id,phonumber,password FROM Member where phonumber=$strphn";
$result = $conn->query($sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if (!empty($row)) {
  
   if (password_verify($_POST['password'],$row['password'])){
       session_start();
 
       $_SESSION['userid']=$row['id'];
    header('location:index.php');
 
    exist();
    }
else{
    echo "check your phone number and password";
    }
} 
else {
    echo "you not member ";
}

}

else {
echo"please fill out phone number and password to log-in";
}