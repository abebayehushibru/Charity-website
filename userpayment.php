<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
body {

background-color:#e0e0e0;
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
height:auto;
margin-bottom:20px;

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
.msg_div {
position:absolute;
height:auto;
width:70%;
left:15%;
background-color:white;
top:20x;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
padding:10px;
box-shadow:1px 2px 3px black;
border-radius:10x;
}
.msg_div >span {
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;

}
</style>
</head>
<body>
<div class="discrption" >
		       <div class="nm_id" >
			    <?php 
			    include('selectall.php');
			
			 display_specifc_user_of_me(2);
			   ?>
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
		     
		       
		       display_specifc_user_table (2);
		       
		        ?>
		      
		      </table>
		      
		   
		      
		    </div>
		    <div class="msg_div" >
		    <?php 
		    display_msg();
		    ?>
		    </div>
		 
</body>
</html>