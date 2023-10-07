<?php
/*$name ;
$id;
$phonenumber;
$mpayment;
$totalpaid;
$total_paid_person=0;
$total_overdue_person=0;
require("mysql_db_abc.php");
$sql="SELECT id,phonumber,password ,total_paid, mpayment FROM Member ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$mpayment =$row['mpayment'];
$totalpaid =$row['total_paid'];
$name=row['firstname'].row['lastname'];
$phonenumber=row['phonumber'];
$currentwer=5;
display_user_status ();
}

echo' <p >የጨረሰ ሰው ብዛት  : '.$total_paid_person.'</p>
		
		</div>
		<div class="tp_od" >
		<p >ያልጨረሰ  ሰው ብዛት : '.$total_overdue_person.'</p>';
}
function display_user_status ()
{
$yetekefele = 0;
$currentwer=5;
$yaltekefelewer=0;
$genamikefel=0;
$temp=$totalpaid;
for ($i=0 ;$i<12;$i++)
  {
  $temp=$temp-$mpayment;
  
  if ($temp>=0){
  $yetekefele++;
  }
  else if ($i<$currentwer)
  {
  $yaltekefelewer++;
  }
  else {
   $genamikefel++;
  }

}

if ($yaltekefelewer==0){
$total_paid_person++;
}
else if  ($yaltekefelewer>0){
$total_overdue_person++;}
if($genamikefel==0&&$i==12){
$genamikefel="✔️";
}
}*/