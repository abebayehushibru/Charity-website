<?php
$error = array();
require("validity-checker.php");
$region=$_POST['region'];
$firstname=validate_text_input($_POST['firstname']);
if(empty($firstname)){
$error[]="You forget enter to your FirstName ";
}
$lastname=validate_text_input($_POST['lastname']);
if (empty($lastname)){
$error[]="You forget enter to your LastName ";
}
$phonenumber=validate_text_input($_POST['phonenumber']);
if (empty($phonenumber)){
$error[]="You forget enter to your phonenumber";
}
$mpayment=validate_number_input($_POST['mpayment']);
if ( empty($mpayment)){
$error[]="You forget enter to your monthly payment ";
}
$woreda=validate_text_input($_POST['woreda_town']);
if (empty($woreda)){
$error[]="You forget enter to your woreda/town ";
}
$kebele=validate_text_input($_POST['kebele']);
if (empty($kebele)){
$error[]="You forget enter to your kebele";
}
$pwd=validate_text_input($_POST["pwd"]);
if (empty($pwd)){
$error[]="You forget enter to your password";
}
$cm_pwd=validate_text_input($_POST["cm_pwd"]);
if (empty($cm_pwd)){
$error[]="You forget confirm password";
}
$favoraite=validate_text_input($_POST["favoraite"]);
if (empty($favoraite)){
$error[]="You forget confirm password";
}
if(empty($error))
{
$hashed_pwd=password_hash($pwd,PASSWORD_DEFAULT);
require("mysql_db_abc.php");
$stmt = $conn->prepare("INSERT INTO Member (firstname,lastname,phonumber,mpayment,region,woreda_town,kebele,password,favoraite) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("sssisssss", $firstname,$lastname,$phonenumber,$mpayment,$region,$woreda,$kebele,$hashed_pwd,$favoraite);
if ($stmt->execute()){
header('location:right.html');
exit();
}

else{
echo "<p style=\"color:red;text-align:center\"> you&rsquo;re not registered successfuly</p><p>system busy try again";
}
}
else{
echo "<p style=\"color:red;text-align:center\"> you&rsquo;re not registered successfuly</p><p>$error[0]</p>";
}
