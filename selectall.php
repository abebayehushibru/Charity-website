<?php
$name ;
$id;
$phonenumber;
$mpayment;
$totalpaid;
$total_paid_person=0;
$genamikefel=0;
$total_overdue_person=0;
$month_status=array();
$result ;
$wer=array("መስከረም","ጥቅምት","ህዳር","ታህሳስ","የካቲት","መጋብት","መዓዝያ","ግንቦት","ሰኔ","ሐምሌ","ነሐሴ");
require("mysql_db_abc.php");

function display_all(){
global $id,$name,$phonenumber,$yetekefele,$yaltekefelewer,$genamikefel,$mpayment,$totalpaid ,$yalkefelesewu;
$yalkefelesewu=0;
require("mysql_db_abc.php");
$sql="SELECT id,phonumber,firstname,lastname,mpayment ,total_paid FROM Member ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $total_paid_person=0;
    $total_overdue_person=0;
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $id=$row['id'];
    
$mpayment =$row['mpayment'];
$totalpaid =$row['total_paid'];
$name=$row['firstname']."  ".$row['lastname'];
$phonenumber=$row['phonumber'];

display_user_status(1);

		    
}
}}




function display_table_of_all(){
global $id,$name,$phonenumber,$yetekefele,$yaltekefelewer,$genamikefel;
echo '<tr>
			   <td style="width:10%" >'.$id.'</th>
			   <td style="width:30%">'.$name.'</th>
			   <td style="width:25%"> <a href="'.$phonenumber.'">'.$phonenumber.'</a></th>
			   <td style="width:10%" >'.$yetekefele.'</th>
			   <td style="width:10%">'.$yaltekefelewer.'</th>
			   <td style="width:15%">'.$genamikefel.'</th>
	  </tr>';
}

function display_user_status($fn){
global $yetekefele,
$mpayment,
$currentwer,
$yaltekefelewer,
$genamikefel,$month_status,$totalpaid,$total_paid_person,$yalkefelesewu;
$yetekefele = 0;
$yaltekefelewer=0;
$genamikefel=0;
$currentwer = 5;
$temp=$totalpaid;
for ($i=0 ;$i<12;$i++)
  {
  $temp=$temp-$mpayment;
  
  if ($temp>=0){
  $yetekefele++;
  $month_status[$i]='✔️';
  }
  else {
  if ($i<$currentwer)
  {
  $month_status[$i]='❌️';
 
  $yaltekefelewer++;
  }
  
  else {
   $genamikefel++;
   $month_status[$i]='◌  pending';
  
   }}


}
if ($fn==1){
if ($yaltekefelewer==0){
$total_paid_person=$total_paid_person+1;
}
else if  ($yetekefele==0){
$yalkefelesewu++;
}
if($genamikefel==0&&$yetekefele==12){
$genamikefel="✔️";
}
}
}

function display_specifc_user_of_me($user_id){
global  $yaltekefelewer,$yetekefele,$totalpaid,$mpayment,
$currentwer;

require("mysql_db_abc.php");
$sql="SELECT id,phonumber,firstname,lastname ,total_paid, mpayment FROM Member where id =$user_id";
$result = $conn->query($sql);
if(($result->num_rows<=0)){
echo 'no result';		 }  

else {
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$mpayment =$row['mpayment'];
$phonenumber=$row['phonumber'];
$totalpaid =$row['total_paid'];

$name=$row['firstname']."  ".$row['lastname'];
display_user_status(0);
echo '
				    <p class="name_user" >name (ስም) : '.$name.'</p>
				    <p class="id_user" >id (መ.ቁ) : '.$row['id'].'</p>
				    
			    </div>
<span>phone number : <a href="tel:'.$phonenumber.'">'.$phonenumber.'</a></span>
			    <div class="tp_od" >

			    <p>total paid (የተከፈለ) : '.$yetekefele.'</p>
			    <p>overdue(ቀሪ) : '.$yaltekefelewer.'</p>';}
			    
		}

function display_specifc_user_table ($user_id){
global $month_status,$totalpaid ,$mpayment;
require("mysql_db_abc.php");
$sql='SELECT id,total_paid, mpayment FROM Member where id = 5 ';
$result = $conn->query($sql);
if($result->num_rows <=0){
echo "";}
else {
$wer=array("መስከረም","ጥቅምት","ህዳር","ታህሳስ","ጥር","የካቲት","መጋብት","መዓዝያ","ግንቦት","ሰኔ","ሐምሌ","ነሐሴ");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$mpayment =$row['mpayment'];
$totalpaid =$row['total_paid'];
for ($j=0;$j<12;$j++){
$c=$j+1;
echo '
           <tr>
		        <td  >'.$c.'</td>
		        <td  >'.$wer[$j].'</td>
		        <td  >'.$month_status[$j].'</td>
		   </tr>';

}
}
}


function display_all_user_status (){
global $total_paid_person,$yalkefelesewu;
display_all();
echo' <p >የእስከአሁኑን የጨረሰ ሰው ብዛት  : '.$total_paid_person.'</p>
		
		</div>
		<div class="tp_od" >
		<p >ያልከፈለ  ሰው ብዛት : '.$yalkefelesewu.'</p>';
}

 function display_msg(){
 global  $yaltekefelewer,$yetekefele;
 if($yaltekefelewer>0){
 echo "<span style=\"color:red;\"><h2>
 የቀረቦትን የ $yaltekefelewer ወር ክፊያ ይክፈሉ </h2>  </span><h3>ስለሚከፈሉ እናመሰግናለን !!!</h3> <br><h2>አለን-ቤዛ ቻሪቲ
 </h2>";
 }
 else if($yetekefele==12){
 echo "<span style=\"color:green; \"><h3>
 ክፍያውን ስለጨረሱ እናመሰግናለን !!!</h3> <h4> መስጠት ሲሰጠን ነዉ የሚንሰጠው</h4></span><h2>አለን-ቤዛ ቻሪቲ
 </h2>";
 
 
 }
else if($yaltekefelewer==0){
 echo "<span class=\"msg \"style=\"color:orange;\"><h3></span>
  አብረዉን ስለቆሙ እናመሰግናለን !!!</h3> \n<h2>አለን-ቤዛ ቻሪቲ </h2>";
 
 
 }
 

 }