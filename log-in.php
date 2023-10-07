<!DOCTYPE html>
<html>
<head>
<title>Alenbezacharity</title>
<style type="text/css">
/* start of section 1 csss*/
body { 
margin:0;
padding:0;
background-color:#e0e1dd;
height:100vh;
}

img {
position:relative;
height:100%;
width:100%;
}
.sec1 {
max-height:25%;
position:fixed;
margin:1%1%0%;
padding-top:2%;
padding-bottom:2%;
width:98%;
background-color:#1B263B;
display:flex;
flex-direction:column;
}

.menubar {
margin-top:30px;
position:relative;
height:auto;
width:50px;
display:flex;
flex-direction:column;
}
.menubar >div {
position:relative;
height:4px;
margin:5px;
background-color:white;
}
.abc {
position:relative;
height:100%;
width:90%;
display:flex;
justify-content:center;
align-items:center;
}
.abc_name {
position:relative;
width:60%;
height:100%;
display:flex;
color:white;
flex-direction:column;
justify-content:center;
align-items:center;
font-size:180%;
}

.abc_name :first-child {
font-weight:bold;
}
.abc_name :second-child{
font-style:italic;
}
.abc_logo {
position:relative;
height:120px;
width:120px;
right:10px;
}
.abc_logo > img{
border:1px solid white;
border-radius:50%;
}
/* end of section 1 css*/


/* start of section 2 css*/

.sec2 {
position:relative;
top:20%;
width:auto;
height:53%;
margin-bottom:2%;
margin-left:5%;
overflow:scroll;
display:flex;
align-items:center;
justify-content:center;
}
form {
width:350px;
display:flex;
flex-direction:column;
background-color:white;
border-radius:20px;
align-items:center;
justify-content:center;
}
form > div {
display:flex;
flex-direction:column;
align-items:center;
justify-content:center;
}
form >div >h3 {
font-weight:bolder;
font-size:45px;
}
form >div >div > p{
font-weight:bold;
font-size:18px;
}
form >div >div > input {
margin:2px;
border:1px solid ;
border-radius:5px;
height:30px;
}


#sbmt {
background-color:green;
color:white;
font-size:20px;
}
form >p {
text-indent:5px;
font-style:italic;
}



/* start of section 3 css*/
.sec3 {
position:absolute;
width:98%;
max-height:25%;
margin:1%;
top:75%;
background-color:#1B263B;
}
.div1 {
position:relative;
height:auto;
width:100%;
display:flex;
align-items:center;
}

.abc_lg {
width:30%;
height:100%;
display:flex;
align-items:center;
justify-content:center;
}
.abc_lg >img{
height:100px;
width:100px;
border-radius:50%;
}
.contact_us {
color:white;
position:relative;
height:100%;
width:100%;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
}
.contact_us >div{
display:flex;
}
.contact_us >span {
font-size:25px;
font-weight:bold;
text-decoration:underline;
}
.call {
align-items:center;
width:100%;
}
.call >div {
position:relative;
margin-left:15px;
display:flex;
flex-direction:column;
}
.call >div >span {
margin-bottom:5px;
font-size:18px;
font-weight:bold;
}
.socialm {
display:flex;
flex-direction:column;
align-items:center;
width:100%;}
.socialm  >div {
position:relative;
margin-left:15px;
}
.socialm >div >span {
font-size:18px;
font-weight:bold;
}
.social_links {
display:flex;
width:100%;
}
.social_links > a {
position:relative;
margin-left:20px;
height:40px;
width:40px;
border-radius:20px;
}
.social_links > a >  :hover {
height:60px;
width:60px;
border-radius:30px;}
.social_links > a >img{
position:relative;
box-shadow:1px 3px 4px black;
height:40px;
width:40px;
border-radius:50%;
}

.div2 {
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
font-size:16px;
padding-top:5px;
color:white;
}
.div2 >span {
margin-top:5px;
}
.div2 :first-child {
font-size:18px;
font-weight:bold;
}
/*end of section 3 css*/


</style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
require("login-pro.php");
}
?>
<section class="sec1">

	<div class="abc">
		<div class="abc_name">
			<span >Alenbeza charity </span>
			<span>አለንቤዛ ቻሪቲ </span>
		</div>
		<div class="abc_logo">
			<img src="abclogo.png" alt="abc logo">
		</div>
	</div>	
</section>
<section class="sec2" >
	<form method="post" action="log-in.php" >
	   <div><h3>Log-in</div>
	   <div>
	   <div> <p>Phone number</p><input type="text" name="phonenumber" required="required"  ></div>
	    <div> <p> Password</p><input type="password" name="password" required="required"></div>
	     <div><input type="submit" id="sbmt" value="sign-in" ></div>
	   </div>
	   <p>if you're new member registor here  <a href="registration-form.php" >Sign up</a></p>
	</form>
</section>
<section class="sec3">
	<div class="div1" >
		<div class="abc_lg">
			<img src="abclogo.png">
		</div>
		
		<div class="contact_us" >
		<h2>contact us</h2>
		 <div>
		<div class="call" >
		
			<div>
				<span>phone number</span>
			</div>
			<div>
				<a>+251923374696</a>
				<a>+251........</a>
				<a>+251........</a>
			</div>
		</div>
		<div class="socialm" >	
		<div>
			<span>social media</span>
		</div>
		<div class="social_links" >
			<a href="" ><img src="photo/logo/fb.jpg" ></a>
			<a href=""><img src="photo/logo/tg.jpg"></a>
		
		</div>
		</div>
		</div>
		</div>
	</div>
	<div class="div2" >
	<span> Alenbeza bank account</span>
	<span> CBE :- 1000353714884</span>
	<span> Birhan bank :- 1601660042923</span>
	</div>
</section>

<script type="text/javascript">
</script>


</body>
</html>