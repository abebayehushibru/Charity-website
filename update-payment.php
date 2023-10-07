<?php 
$user_id=intval($_GET['userID']);
$newpayment=intval($_REQUEST['newpayment']);
require("mysql_db_abc.php");
$sql="SELECT total_paid, mpayment FROM Member where id =$user_id";
$result = $conn->query($sql);
if(!empty($result)){
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$mpayment =$row['mpayment'];
$totalpaid =$row['total_paid'];
if ($mpayment <= $newpayment)
{
$totalpaid=$totalpaid+$newpayment;
$sql ="UPDATE Member Set total_paid = $totalpaid WHERE  id =$user_id";
if ($conn->query($sql)===true)
{
echo '<span style="color:green";>Record updated successfully</span>';

} else {
    echo "Error updating record: " . $conn->error;
}
}
else {
echo "<span style=\"color:yellow\";>record not updated <br> ያሰገቡት ብር መጠን ቃል ከገቡት ብር ያንሳል <br> የወር ክፍያዉ : $mpayment</span>";}
}
else {
echo '<span style="color:red";> no such id number</span>';
}
