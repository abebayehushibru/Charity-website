<?php
$name ;
$id;
$phonenumber;
$mpayment;
$totalpaid;
$total_paid_person=0;
$genamikefel=0;
$total_overdue_person=0;
$result ;
require("mysql_db_abc.php");
$type =intval($_GET['type']);
 echo '<table class="mytable2"';
global $id,$name,$phonenumber,$yetekefele,$yaltekefelewer,$genamikefel,$mpayment,$totalpaid ,$yalkefelesewu;
$yalkefelesewu=0;
global $Bale25 ,$Bale30 ,$Bale40 ,$Bale50,$Bale100,$Bale200,$Bale300belay ,
$Bale25dimr ,$Bale30dimr,$Bale40dimr ,$Bale50dimr,$Bale100dimr,$Bale200dimr,$Bale300belaydimr;
$Bale25 =0;
$Bale30 =0;
$Bale40 =0;
$Bale50 =0; $Bale100=0; $Bale200=0; $Bale300belay=0 ;
$Bale25dimr =0; $Bale30dimr=0; $Bale40dimr =0; $Bale50dimr=0; $Bale100dimr=0 ;
$Bale200dimr=0;$Bale300belaydimr=0;
 $Bale150=0; $Bale150dimr=0;
$total_paid_birr=0;
$total_expected_birr=0;
require("mysql_db_abc.php");
$sql="SELECT id,phonumber,firstname,lastname,mpayment ,total_paid FROM Member ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $total_paid_person=0;
      $total_person=0;
    $total_overdue_person=0;
    if($type<4){
    echo '
    <thead>  
    <th style="width:5%" > መ.ቁ </th>
    <th style="width:25%">ስም </th>
    <th style="width:20%">ስልክ ቁጥር</th>
    <th style="width:15%" > የተከፈለ </th>
    <th style="width:15%">ቀሪ </th>
    <th style="width:20%">ገና..(pend..)</th>
    </thead>';
    }
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $id=$row['id'];
      $total_person++;
$mpayment =$row['mpayment'];
$totalpaid =$row['total_paid'];
$name=$row['firstname']."  ".$row['lastname'];
$phonenumber=$row['phonumber'];

display_user_status(1);
if ($genamikefel==0 && $type== 1){
display_table_of_all();
}
else if ($yaltekefelewer==0&& $type==2){
display_table_of_all();
}
else if ($yetekefele==0&& $type==3){
display_table_of_all();
}
else if ($type==0){
display_table_of_all();
}
else if ($type==4) {
 if ($mpayment<30){
 $Bale25++;
 $Bale25dimr=$totalpaid+$Bale25dimr;
 }
 else if ($mpayment<40){
 $Bale30++;
 $Bale25dimr=$totalpaid+$Bale30dimr;
 }
else if ($mpayment<50){
 $Bale40++;
 $Bale40dimr=$totalpaid+$Bale40dimr;
 }
 else if ($mpayment<100){
 $Bale50++;
 $Bale50dimr=$totalpaid+$Bale50dimr;
 }
 else if ($mpayment<150){
 $Bale100++;
 $Bale100dimr=$totalpaid+$Bale100dimr;
 }
 else if ($mpayment<200){
 $Bale150++;
 $Bale150dimr=$totalpaid+$Bale150dimr;
 }
 else if ($mpayment<300){
 $Bale150++;
 $Bale150dimr=$totalpaid+$Bale150dimr;
 }
 else {
 $Bale300belay++;
 $Bale300belaydimr=$totalpaid+$Bale300belaydimr;
 }
 
 
 
 }
}

$bale25yemtitebek =$Bale25*25*12;
$bale25yaltekefele=($Bale25*25)-$Bale25dimr;

if ($bale25yemtitebek==0){
 $bale25perc=0;
}else {

$bale25perc=number_format($Bale25dimr/($Bale25*25*12/100), 2);}


$bale30yemtitebek =$Bale30*30*12;
$bale30yaltekefele=($Bale30*30)-$Bale30dimr;

if ($bale30yemtitebek==0){
 $bale30perc=0;
}else {

$bale30perc=number_format($Bale30dimr/($Bale30*30/100), 2);}


$bale40yemtitebek =$Bale40*40*12;
$bale40yaltekefele=($Bale40*40)-$Bale40dimr;
if ($bale40yemtitebek==0){
 $bale40perc=0;
}else {

$bale40perc=number_format($Bale40dimr/($Bale40*40/100), 2);
}

$bale50yemtitebek =$Bale50*50*12;
$bale50yaltekefele=($Bale50*50)-$Bale50dimr;
if ($bale50yemtitebek==0){
 $bale50perc=0;
}else {

$bale50perc=number_format($Bale50dimr/($bale50yemtitebek/100), 2);
}

$bale100yemtitebek =$Bale100*100*12;
$bale100yaltekefele=($Bale100*100)-$Bale100dimr;
if ($bale100yemtitebek==0){
 $bale100perc=0;
}else {

$bale100perc=number_format($Bale100dimr/($bale100yemtitebek /100), 2);
}

$bale150yemtitebek =$Bale150*150*12;
$bale150yaltekefele=($Bale150*150)-$Bale150dimr;
if ($bale150yemtitebek==0){
 $bale150perc=0;
}else {

$bale150perc=number_format($Bale150dimr/($bale150yemtitebek /100), 2);
 }
 $bale200yemtitebek =$Bale200*200*12;
 $bale200yaltekefele=($Bale200*200)-$Bale200dimr;
 if ($bale200yemtitebek==0){
 $bale200perc=0;
 }else {
 
 $bale200perc=number_format($Bale200dimr/($bale100yemtitebek /100), 2);
 }
 $bale300yemtitebek =$Bale300*300*12;
 $bale300yaltekefele=($Bale300*300)-$Bale300dimr;
 
 if ($bale300yemtitebek==0){
  $bale300perc=0;
 }else {
 $bale300perc=number_format($Bale300dimr/($bale300yemtitebek /100), 2);
 
 }
 $total_paid_birr=$Bale25dimr + $Bale30dimr+ $Bale40dimr+$Bale50dimr+$Bale100dimr+ $Bale150dimr +$Bale200dimr+$Bale300dimr;
 $total_expected_birr= $bale25yemtitebek +$bale30yemtitebek +$bale40yemtitebek +$bale50yemtitebek+ $bale100yemtitebek + $bale150yemtitebek +$bale200yemtitebek + $bale300yemtitebek;
 $total_overdue_birr= $total_expected_birr-$total_paid_birr;
  if ($total_expected_birr!=0){
$t_p= $total_paid_birr*100/$total_expected_birr;
 }
 else{
 $t_p=0;
 
 }
 $total_perc=number_format($t_p ,2);
if($type==4){
echo "
			        <thead>  
				        <th style=\"width:20%\"> የክፍያ ዕይነት</th>
				        <th style=\"width:20%\">የከፋይ ብዛት</th>
				        <th style=\"width:20%\">የተከፈለ ብር</th>
				        <th style=\"width:20%\">ያልተከፈለ ብር</th>
				        <th style=\"width:20%\">የሚጠበቀው ብር</th>
				        <th style=\"width:20%\">percintile</th>
				        
			        </thead>
		        <tr>
		        <td  >25 ብር</td>
		        <td  >$Bale25</td>
		        <td  >$Bale25dimr</td>
		        <td >$bale25yaltekefele</td>
		        <td  >$bale25yemtitebek</td>
		        <td  >$bale25perc</td>
		        </tr>
		        <tr>
		        <td  > 30 ብር</td>
		        <td  >$Bale30</td>
		        <td  >$Bale30dimr</td>
		        <td > $bale30yaltekefele</td>
		        <td  >$bale30yemtitebek</td>
		        <td  >$bale30perc</td> </tr>
		        <tr>
		     <td  > 40 ብር</td>
		        <td  >$Bale40</td>
		        <td  >$Bale40dimr</td>
		        <td >$bale150yaltekefele</td>
		        <td  >$bale40yemtitebek</td>
		       <td  >$bale40perc</td>
		        </tr>
		      <tr>
		      <td  >50 ብር </td>
		      <td  >$Bale50</td>
		      <td  >$Bale50dimr</td>
		      <td >$bale150yaltekefele</td>
		      <td  >$bale50yemtitebek</td>
		      <td  >$bale50perc</td>
		      </tr>
		      <tr>
		      <td  >100 ብር</td>
		      <td  >$Bale100</td>
		      <td  >$Bale100dimr</td>
		      <td >$bale100yaltekefele</td>
		      <td  >$bale100yemtitebek</td>
		      <td  >$bale100perc</td>
		      </tr>
		      <tr>
		      <td  > 150 ብር </td>
		      <td  >$Bale150</td>
		      <td  >$Bale150dimr</td>
		      <td >$bale150yaltekefele</td>
		      <td  >$bale150yemtitebek</td>
		      <td  >$bale150perc</td>
		      </tr>
		      <tr>
		      <td  > 200 ብር </td>
		      <td  >$Bale200</td>
		      <td  >$Bale200dimr</td>
		      <td >$bale200yaltekefele</td>
		      <td  >$bale200yemtitebek</td>
		      <td  >$bale200perc</td>
		      </tr>
		      <tr>
		      <td  >ከ 300 ብር</td>
		      <td  >$Bale300</td>
		      <td  >$Bale300dimr</td>
		      <td >$bale300yaltekefele</td>
		      <td  > $bale300yemtitebek </td>
		      <td  >$bale300perc</td>
		      </tr>
		      <tr>
		      <td  >ድምር</td>
		      <td  >  $total_person</td>
		      <td  >$total_paid_birr</td>
		      <td >$total_overdue_birr</td>
		      <td  > $total_expected_birr </td>
		      <td  >$total_perc</td>
		      </tr>"
		      ;}
		      
		      { echo '</table>';}
		  
}



function display_table_of_all(){
global $id,$name,$phonenumber,$yetekefele,$yaltekefelewer,$genamikefel;
echo '<tr>
			   <td style="width:10%" >'.$id.'</th>
			   <td style="width:25%">'.$name.'</th>
			   <td style="width:20%"> <a href="'.$phonenumber.'">'.$phonenumber.'</a></th>
			   <td style="width:10%" >'.$yetekefele.'</th>
			   <td style="width:10%">'.$yaltekefelewer.'</th>
			   <td style="width:25%">'.$genamikefel.'</th>
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
 
  }
  else {
  if ($i<$currentwer)
  {

 
  $yaltekefelewer++;
  }
  
  else {
   $genamikefel++;
   
  
   }}


}
if ($fn==1){
if ($yaltekefelewer==0){
$total_paid_person=$total_paid_person+1;
}
else if  ($yaltekefelewer>0){
$yalkefelesewu++;
}
}
}

