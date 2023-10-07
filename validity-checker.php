<?php
function validate_text_input ($textinput){
if(!empty($textinput)){
$trim_text = trim($textinput);
$sanitizedtext= filter_var($trim_text,FILTER_SANITIZE_STRING);
return $sanitizedtext;
}
return '';

}
function validate_number_input ($numberinput){
if(!empty($numberinput)){
$trim_text = trim($numberinput);
$sanitizedtext= filter_var($trim_text,FILTER_SANITIZE_NUMBER_INT);
return $sanitizedtext;
}
return 0;
}
function validate_image_input ($path,$files){
//path="./assert/post/
$target =$path;
$default="abclogo.png";
echo "$files";
//get file name
$filename = basename($files["name"]);
$targetfilepath=$target.$filename;

echo  "$targetfilepath <br>";
$filetype= Pathinfo($targetfilepath,PATHINFO_EXTENSION);
if(!empty($filename)){
$allowtype = array ("jpg","png","jpeg","gif");

if (in_array($filetype,$allowtype))
{
if(move_uploaded_file($files["tmp_name"], $targetfilepath)) {
        echo "The file ". basename( $files["name"]). " has been uploaded.";
        return $targetfilepath;
    }
}
}

else{
echo "default". $filename;
return $path.$default;}
}



function get_user_info ($userid ){
require("mysql_db_abc.php");
$sql="SELECT id,firstname,lastname, phonumber,password FROM Member where id=$userid";
$result = $conn->query($sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  return $row;
}