<?php 
$error = array();
require("validity-checker.php");
$textarea = $_POST['comments'];
if(empty($textarea)){
$error[]="You forget enter to your text massage ";
echo "empty";
}
$files=$_FILES['uploadphoto'];
$files2=$_POST['uploadphoto'];
echo "$files";
$post_file=validate_image_input("./assert/post/",$_FILES['uploadphoto']);

if(empty($post_file)){
$error[]="You forget enter to your photo ";
echo "empty";
}
if(empty($error))
{
require("mysql_db_abc.php");
$stmt = $conn->prepare("INSERT INTO Postfile (post_text,post_file) VALUES ( ?, ?)");
$stmt->bind_param("ss", $textarea,$post_file);
if($stmt->execute()){
echo '<p style="color:green;text-align:center"> you post posted successfuly</p>';
//exit();}
}
}

else {
echo '<p style="color:red;text-align:center"> you post  not poated successfuly</p>';
//exit();
}