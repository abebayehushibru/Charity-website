
<?php 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">

.paymentsec {
position:relative;
margin:1%;
display:flex;
flex-direction:column;
background-color:#e0e0e0;
}
.choice {
position:relative;
height:60px;
width:100%;
display:flex;
}
.choice >div{
width:50%;
display:flex;
align-items:center;
justify-content:center;

}
.to_specific {
background-color:rgb(0,0,0,1);
color:white;
}
.to_general {

background-color:rgb(0,0,0,0.1);}
.sp_gn {
position:relative;
height:100%;
width:100%;
overflow:hidden;
transform:.5s ease;
}
.sp_gn >div{
position:relative;
height:100%;
width:200%;
transform:.5s ease;
display:flex;
flex-direction:row;
transform:translateX(0%);
transition:transform .5s ease-in-out;
overflow:scroll;
}
.sp{
position:relative;
left:0%;
width:100%;
}
.sp> form{
position:relative;
left:0;
width:100%;
}
.gn{
position:relative;
width:100%;
height:100%;
background-color:;
}
.inp{
position:relative;
top:20px;
height:30px;
display:flex;
right:2%;
justify-content:flex-end;
}
.inp> input {
float:right;
border:1px black solid;
border-top-left-radius:5px;
border-bottom-left-radius:5px;
text-align:center;
}
.inp >button {
width:40px;
background-color:black;
border:none;
color:white;
font-size:16px;
font-weight:bold;
border-top-right-radius:5px;
border-bottom-right-radius:5px;
}
.discrption {
position:relative;
top:20px;
height:150px;
width:100%;
box-shadow:1px 2px 3px black;
border-radius:5px;
}
.discrption >div{
margin:5px;
position:relative;
padding-left:10px;
height:30%;
display:flex;
}
.discrption >span {
width:100%;
display:flex;
justify-content:center;
font-weight:bold;
}
.discrption >div>p {
font-size:16px;
font-weight:bold;
width:;
}
.nm_id .name_user {
width:70%;
}

.tp_od >p{
width:50%;
}

.div_table {
position:relative;
margin-top:30px;
background-color:red;
height:auto;

}

.mytable {
border-collapse: collapse;
background-color:white;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
.mytable2 {
border-collapse: collapse;
background-color:white;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 14px;
}
.mytable th, .mytable td ,.mytable2 th, .mytable2 td {
  
  padding: 16px;
}
.mytable tr,.mytable2 tr{
border:1px solid #ddd;
}
.mytable tr:hover,.mytable2 tr:hover {
 background-color: #f1f1f1;
}
.mytable tr td,.mytable thead th,.mytable2 tr td,.mytable2 thead th{

padding-left:15px;
border:1px solid;
}
.note {
position:relative;
display:flex;
flex-direction:column;
justify-content:center;

}
.note h2 {
text-align:center;
}
.note span {
position:relative;
left:30%;

}
.div_btn {
width:98%;
margin:1%;
height:50px;
display:flex;
align-items:center;
justify-content:center;
}
.div_btn>button {
height:40px;
font-size:20px;
font-weight:bold;
background-color:green;
border-radius:3px;
color:white;
border:none;
}
.pay_cl {
height:auto;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
margin:10px;
}
.pay_cl> button {
height:40px;
background-color:blue;
max-width:200px;
border-radius:6px;
border:none;
font-size:16px;
color:white;
font-weight:bold;
margin-bottom:10px;
box-shadow:2px 4px 6px blue;
}
.pay_form {
height:30px;
visibility:hidden;
}
.pay_form >input {
height:100%;
border-radius:5px;
border:1px solid orange;
text-align:center;
font-weight:bold;
}
.pay_form >button{
height:100%;
border-radius:5px;
text-align:center;
font-size:18px;
font-weight:bold;
background-color:green;
color:white;
}
#demo {
text-align:center;
font-size:18px;
font-weight:bold;
color:red;
display:table;
width:100%;
}
.adimn_view {
position:relative;
top:30px;
width:auto;
display:flex;
overflow:scroll;
justify-content:space-around;
}
.adimn_view> button {
margin-right:15px;
margin-bottom:15px;
font-weight:bold;
border:none;
border-radius:5px;
}
.adimn_view >button:hover {
background-color:white;
border:.5px solid black;
box-shadow:2px 3px 4px black;
color:black;
height:50px;
}
.adimn_view >button:focus {
background-color:orange;
border:.5px solid ;
box-shadow:2px 3px 4px ;
height:60px;

}
.viewd{
height:60px;
width:auto;
font-size:18px;
background-color:orange;
color:black;
}
.deft{
background-color:black;
height:40px;
font-size:14px;
color:white;
}
.save_btn {
position:relative;
display:flex;
width:100%;
justify-content:center;
height:40px;
}

.save_btn> button {
background-color:green;
border:none;
border-radius:5px;
color:white;
font-size:18px;
font-weight:bold;
}
</style>
</head>
<body>
<section class="paymentsec" >
	<div class="choice" >
		<div class="to_specific"  onclick="move(1);" onclick="<?php $_SESSION['start']='no'?>">
			<h3>Specific user </h3>
		</div>
		<div class="to_general" onclick="move(2);"  >
		<h3>Total user</h3>
		</div>
	</div>	
	
	<div class="sp_gn" >
		<div class="spn_gn_div" > 
		<div class="sp"  >
		    <form method="post" id="src-form"    action="admnpayment.php"><div class="inp"  >
			    <input type="number" id="user_id"  name="user_get_id" value="<?php if (isset($_POST['user_get_id'])){
			    echo $_POST['user_get_id'];
			
			    
			    }?>"  placeholder="search by id"  ><button name="button1" name="update"  onclick="hide();"  >Go</button>
		    </div>
		    </form>
		    <div class="discrption" >
		       <div class="nm_id" >
			    <?php 
			    include('selectall.php');
			    if (array_key_exists('button1',$_POST)){
			 display_specifc_user_of_me($_POST['user_get_id']);
			   } ?>
			    </div>
			    
		    </div>
		    <div class="div_table" >
		      <table class="mytable" >
			        <thead>  
				        <th style="width:25%" > m.n (የወ.ቁ)</th>
				        <th style="width:40%">Month (ወር)</th>
				        <th style="width:35%">Status (ሁኔታ)</th>
			        </thead>
		       
		        <?php 
		     
		        if (array_key_exists('button1',$_POST)||array_key_exists("update",$_POST)){
		         display_specifc_user_table ($_POST['user_get_id']);
		       }
		        ?>
		      
		      </table>
		    </div>
		    <div class="pay_cl" >
		    <button name="updateBtn" class=" updateBtn "onclick=" pay_update_visbility();">up_date payment</button>
		   <div class="pay_form" >
		    <input type="number" class="inputbirr" value=""  name="new_payment" min="25" placeholder="new payment in Birr"   >
		    <button name="update"  class="updatebtn"  onclick="myFunction();"  >update</button>
		   </div>
		    </div>
		    <p id="demo" >
		 
		  
		    
		    </p>
		     
		     
		   
		    <div class="note" >
		    <h2>note about status</h2>
		       <span>✔️ የተከፈለ (paid )</span>
		       <span>❌ ያልተከፈለ (overdue)</span>
		       <span> ◌ ገና የሚከፈል (pending)</span>
		    </div>
		</div>
	
		<div class="gn" >
		    
		    <div class="adimn_view" >
		    <button onclick="clickedbutton(0);" class="deft" >ሁሉንም ለማየት</button>
		    <button onclick="clickedbutton(1);" class="deft" >ሙሉ የጨረሰ </button>
		    <button class="deft" onclick="clickedbutton(2);" > እስከ አሁን ያለውን የጨረሰ</button>
		    <button onclick="clickedbutton(3);" class="deft" >ያልከፈሉት</button>
		    <button onclick="clickedbutton(4);" class="deft">ግምገማ</button>
		    </div>			
		    
			<div class="div_table" id="dis_table" >
			 

			
			</div>
		<div class="discrption" >
		<div class="nm_id" >
		<?php 
		if (array_key_exists('button1',$_POST)||array_key_exists("update",$_POST)){
	
	 	display_all_user_status();
		
		}
		?>
		
		</div>
		
		</div>
			<div  >

			<p style="margin:30px;text-align:center" >!ከላይ ያለው መረጃ እሰከ አሁን ባለ ወር የለዉን የክፍያ ህደት የሚያሳይ ነው::</p>
			</div>
			
			<div class="save_btn" >
				<button onclick="" >save all data</button>
				
			</div>
		</div>
	</div>
	
	</div>
</section>

<script type="text/javascript">

var sp_gn_div = document.querySelector(".spn_gn_div");
var sp =document.querySelector(".to_specific");
var gn = document.querySelector(".to_general");
function move (i){
if (i==1){
sp_gn_div.style.transform="translateX(0%)";
sp.style.backgroundColor="rgb(0,0,0,1)";
sp.style.color="white";
gn.style.backgroundColor="rgb(0,0,0,0.1)";
gn.style.color="black";
}
if (i==2){
sp_gn_div.style.transform="translateX(-50%)";
gn.style.backgroundColor="rgb(0,0,0,1)";
gn.style.color="white";
sp.style.backgroundColor="rgb(0,0,0,0.1)";
sp.style.color="black";
}
}


var updateBtn=document.querySelector(".updateBtn");
var pay_form =document.querySelector(".pay_form");
var inputbirr=document.querySelector(".inputbirr");
function pay_update_visbility()
{
pay_form.style.visibility="visible";
updateBtn.style.visibility="hidden";

}

function myFunction() {
var txt;
 
  if (confirm("ያስገቡት የብር መጠን "+inputbirr.value +" ቀጥል (ok) ወይ ተመለስ (cancel)") )
  {
if(document.querySelector("#user_id").value==null)
{
  txt = "<b>ckeck user id</b>";
}
else  if (inputbirr.value<25){
txt="የብር መጠን አላስገቡም /ያሰገቡት መጠን ከ25 በብር በታች ነዉ";
  
}
else {
var user_id = Number(document.querySelector("#user_id").value);
var inputvalue=Number(inputbirr.value);
  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","update-payment.php?userID="+user_id+"&newpayment="+inputvalue,true);
        xmlhttp.send();
        return 0;
}
    } 
    
    else {
    txt="you canceled trasnsaction";
  
    }
    
   
 
    document.getElementById("demo").innerHTML=txt;
  

}

function hide(){
pay_form.style.visibility="hidden";
updateBtn.style.visibility="visible";

}
var buttons= document.querySelector(".adimn_view").querySelectorAll('button');
 function clickedbutton(x){
    document.getElementsByClassName("div_table").textContent="in functuon";
 for (i=0;i<=4;i++)
{ if(x==i){
 buttons[x].setAttribute('class',"viewd");
 
 }
else  {
buttons[i].setAttribute('class',"deft");}
}
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector("#dis_table").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","display-all.php?type="+x,true);
        xmlhttp.send();
        return 0;

 }
 
 
</script>
</body>
</html>