<?php
  session_start();
  
  ?>


<!DOCTYPE html>
<html>
<head>
<title>Alenbezacharity</title>
<style type="text/css">
/* start of section 1 csss*/
body { 
margin:0;
padding:0;
background-color:white;
height:100vh;
width:100%;
}

img {
position:relative;
height:100%;
width:100%;
}
.sec1 {
position:relative;
max-height:30%;
margin:1%1%2%;
width:98%;
background-color:white;
box-shadow:1px 2px 3px;
display:flex;
flex-direction:row;
overflow:hidden;
}
.title2 {
position:relative;
display:flex;
width:100%;
flex-direction:column;
}

.title2> div{
width:100%;
}

.title2 .abc {
height:75%;
}
.joinus {
position:relative;
display:flex;
height:25%;
justify-content:flex-end;
left:0%;
}
.joinus>div{
height:30px;
border-radius:3px;
padding:2px 5px ;
margin-right:10%;
margin-bottom:2px;
display:flex;
align-items:center;
justify-content:center;
max-width:100%;
border:2px solid black;
}
.joinus>div>a{
text-decoration:none;
font-size:18px;
background-color:white;
font-weight:bold;
color:black;

}
.menubar {
margin-top:30px;
position:relative;
height:100%;
width:50px;
display:flex;
flex-direction:column;
}
.menubar >div {
position:relative;
height:4px;
margin:5px;
display:flex;
flex-direction:column;
background-color:black;
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
color:green;
flex-direction:column;
justify-content:center;
align-items:center;
font-size:200%;
text-shadow:1px 1px 1px green;
}

.abc_name :first-child {
font-weight:bold;

}
.abc_name #spn{
font-style:italic;
}
.abc_logo {
position:relative;
height:120px;
width:120px;
right:0;
}
.abc_logo > img{
height:100px;
width:100px;
border:1px solid white;
border-radius:50%;
}
/* end of section 1 css*/


/* start of section 2 css*/

.sec2 {
position:relative;
top:3%;
width:96%;
height:auto;
margin-left:2%;
overflow:scroll;
box-shadow:1px 2px 3px black;
bottom:3%;
}
.news{
position:static;
box-shadow:2px 5px 8px black;
max-height:60%;
overflow:hidden;
background-color:white;
display:;
border-radius:20px;
margin-bottom:3%;
}
.sec2>div>.img {
max-height:40%
max-width:98%;
}
.sec2>div>.dis {
padding:5px;
display:flex;
flex-direction:column;
}
.dis >p {
text-indent:30px;
overflow:hidden;
height:50px;
font-size:18px;
}
.dis >span {
position:relative;
left:70%;
width:30%;
}

.downbtn {
position:relative;
border:10px solid;
top:15px;
border-color:black transparent transparent;
}
.upbtn {
position:relative;
border:10px solid;
top:-15px;
border-color:transparent transparent black transparent;
}
.more_btn {
height:30px;
width:auto;
font-size:18px;
float:right;
border:1px solid black;
border-radius:5px;
}

/*end of section 2 css*/


/* start of section 3 css*/
.sec3 {
position:relative;
width:98%;
height:auto;
top:3%;
box-shadow:1px 2px 3px black;
margin:1%;
background-color:white;
}
.div1 {
position:relative;
height:auto;
width:100%;
display:flex;
align-items:center;
}

.abc_lg {
position:relative;
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
color:black;
position:relative;
height:100%;
background-color:orange;
width:70%;
display:flex;
flex-direction:column;
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
width:100%;
}
.call >div {
position:relative;
margin-left:15px;
width:auto;
display:flex;
flex-direction:column;
}
.call >div >span {
position:relative;
margin-bottom:5px;
width:100%;
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
color:black;
}
.div2 >span {
margin-top:5px;
}
.div2 :first-child {
font-size:18px;
font-weight:bold;
}
/*end of section 3 css*
 start of section 4 css*/
.sec4 {
position:absolute;
top:0;
height:100%;
width:60%;
transform:translateX(-102%);
transition:transform .6s ease-in-out;
left:1%;
}

.menu {
position:relative;
height:60%;
padding-top:10%;
background-color:rgb(0,0,0,1);
width:100%;
display:flex;
}
.menu_tsuf 
{
position:relative;
height:;
width:100%;
display:flex;
align-items:center;
flex-direction:column;
background-color:rgb(0,0,0,0.5);
}
.menu_tsuf >div  {
position:relative;
display:flex;
align-items:center;
justify-content:center;
border:2px solid;
margin-top:2%;
}
.profile {
position:relative;
height:160pxj;
width:85%;
display:flex;
flex-direction:column;
background-color:red;
border-radius:10px;
}

.profile >span  {
color:white;
font-size:18px;
}
.not_pr {
height:60px;
width:90%;
font-size:25px;
font-weight:bold;
color:white;
}
.x_button {
position:relative;
margin-left:5px;
height:40px;
width:40px;
display:flex;
align-items:center;
justify-content:center;
background-color:rgb(0,0,0,0);
}
.x_button > button {
position:relative;
height:40px;
width:40px;
font-size:60px;
background-color:rgb(0,0,0,0);
color:white;
font-weight:bold;
border:none;
}
.menu_tsuf >div >a {
position:static;
text-decoration:none;
color:white;
height:100%;
width:100%;
display:flex;
justify-content:center;
align-items:center;

}
.menu_tsuf >div >a:hover {
background-color:orange;
color:black;
}
.menu_tsuf >div >a:visited {
background-color:red;
color:white;
}
.profile {
flex-direction:column;
background-color:none;
color:black;
background-color:;
padding-left:20px;
font-size:16px;
font-size:bold;
}

/*end of section 4*/
.sec_story {
height:200px;
width:97%;
display:flex;
margin-left:1%;
background-color:white;
align-items:center;
padding-right:1%;
overflow:hidden;
}
.stories {
position:relative;
display:flex;
flex-direction:row;
justify-content:center;
width:100%;
padding-left:10px;
}
.str_img{
position:relative;
top:0px;
width:100%;
overflow:scroll;
}

.str_img>div{
position:relative;
display:flex;

overflow:scroll;
}
.str_img >div>a{
position:relative;
margin-right:10px;
border-radius:15px;
animation-name:movestr;
animation-delay:1s;
animation-fill-mode:ease-in-out;
animation-duration:2s;
}
.str_img >div>a>img{
position:relative;
height:160px;
width:120px;
border-radius:15px;
}
.add_story {
height:160px;
width:120px;
margin-right:10px;
border-radius:15px;}
.add_story {
position:static;
display:flex;
flex-direction:column;
background-image:url("abclogo.png");
background-size:cover;
justify-content:center;
align-items:center;
left:1%;
}
.add_story >div{
height:70px;
width:70px;
border-radius:35px;
border:3px solid ;
color:white;
font-weight:bold;
display:flex;
align-items:center;
justify-content:center;
}
.add_story >input {
position:absolute;
opacity:0;
height:100%;
width:100%;
align-items:center;
justify-content:center;
}

@keyframes movestr{
    0% {
   left:0%; 
    }
    
 
    
  75%{
    left:-200%;}
    100%{
   
    left:0%;
    }
    }
</style>
</head>
<body>

<?php 
$userifo = array();
if ($_SESSION['userid']){
require("validity-checker.php");
$userinfo=get_user_info($_SESSION['userid']);
}
?>
<header class="sec1">
<?php if (isset($_SESSION['userid'])){
	     echo '
<div class="menubar" onclick="taytoal(1);">
		<div></div>
		<div></div>
		<div></div>';}
		?>
	</div>
	<div class="title2" >
	<div class="abc">
		<div class="abc_name">
			<span >Alenbeza charity </span>
			<span id="spn" >አለንቤዛ ቻሪቲ </span>
		</div>
		<div class="abc_logo">
			<img src="abclogo.png" alt="abc logo">
		</div>
	</div>	
	<?php if (!isset($_SESSION['userid'])){
	echo '<div class="joinus" >
	<div><a href="registration-form.php" >Register</a></div>
	<div><a href="log-in.php" >Log in</a></div>
	</div>	';}?>
	</div>
</header>
<?php if (isset($_SESSION['userid'])){
	     echo '
<section class="sec_story" >
	<div class="stories" >
			<div class="add_story">
				<div >
					 <h1>&plus; Add</h1>
					 
				</div>
				<input type="file" name="new_story" >
			</div>
		<div class="str_img" >	
		<div>
		    <a href="abclogo.png"  ><img src="abclogo.png" alt="abc logo"></a>
		    <a href="abclogo.png" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="abclogo.png" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="abclogo.png"  ><img src="abclogo.png" alt="abc logo"></a>
			<a href="abclogo.png" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="abclogo.png" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="abclogo.png"  ><img src="abclogo.png" alt="abc logo"></a>
			<a href="" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="abclogo.png"  ><img src="abclogo.png" alt="abc logo"></a>
			<a href="" ><img src="abclogo.png" alt="abc logo"></a>
			<a href="" ><img src="abclogo.png" alt="abc logo"></a>
			
			</div>
		</div>	
	</div>
</section>';}?>
<section class="sec2" >
	<?php 
	include("news-post.php");
	?>
  
  <button class="more_btn" onclick="more_post();">more post</button>
</section>




<footer class="sec3">
	<div class="div1" >
		<div class="abc_lg">
			<img src="abclogo.png">
		</div>
		
		<div class="contact_us" >
		<h2>contact us</h2>
		 <div>
		<div class="call" >
		
			<div>
				<span>call :-</span>
			</div>
			<div>
				<a href="tel:+251923374696" >09 233 74696</a>
				<a href="tel:+25196 869 1497" >09 686 91497</a>
				<a href="tel:+251 94 631 8978" >09 463 18978</a>
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
	<span> <strong>CBE </strong>:- 1000353714884</span>
	<span> <strong>Birhan bank </strong>:- 1601660042923</span>
	</div>
</footer>
<section class="sec4" >
	<div class="menu">
		<div class="menu_tsuf">
			<?php if (isset($_SESSION['userid'])){
			echo '	<div class="profile">	<span>id number : '.$userinfo['id'].'</span>
			<span>name :  '.$userinfo['firstname']." ".$userinfo['lastname'].'</span>
			</div> ' ;}
			?>
			 <div class="not_pr"  ><a href="#home">Home</a></div>
			 <div class="not_pr" ><a href="chkpay" >Check payment</a></div>
			 <div class="not_pr" ><a href="paymethod.html" >payment methods</a></div>
			 <div class="not_pr" ><a href="about.html" >About</a></div>
			 
		</div>
		<div onclick="taytoal(2);" class="x_button" >
		<button >&times</button>
		</div>
</div>
</section>
<script type="text/javascript">
var sec2 =document.querySelector(".sec2");
var more_btn =document.querySelector(".more_btn");
var post_num =2;
var post_seen_num =0;
var sec_div = sec2.querySelectorAll(".news");
function more_post (){

for (let i=post_seen_num;i<sec_div.length && i<post_num*10;i++){
if(i==sec_div.length-1){
more_btn.style.visibility="hidden";
console.log("in loop");
}
sec_div[i].style.display="";

}
post_num++;
}
var sec4 = document.querySelector(".sec4")
var menubr= document.querySelector(".menubar")
var menu_tsuf = document.querySelector(".menu_tsuf")
var x_btn= document.querySelector(".x_button")

function taytoal (z){
if(z==1){
sec4.style.transform ="translateX(0%)";
menubr.style.visibility="hidden";
}
if(z==2){
sec4.style.transform ="translateX(-102%)";
menubr.style.visibility="visible";
}
}



//for unseen news
for (let i=0;i<sec_div.length;i++)
	{
	if (sec_div[i].getElementsByTagName("div")[1].getElementsByTagName("p")[0].clientHeight <=50)
	{
	sec_div[i].getElementsByTagName("span")[0].style.display="none";
	}
	
	if (sec_div[i].getElementsByTagName("div")[1].getElementsByTagName("p")[0].clientHeight> 50)
	{
	sec_div[i].getElementsByTagName("div")[1].getElementsByTagName("p")[0].style.height="50px"
	sec_div[i].getElementsByTagName("span")[0].style.display="";
	
	}
	if(i>9){
	sec_div[i].style.display="none";
	post_seen_num++;
	console.log(i);
	}
	else{
		sec_div[i].style.display="";
	
	}

}
var seen =[false];
window.onclick= function (event){
for (let i=0;i<sec_div.length;i++)
	{
	
	
	if(event.target==sec_div[i].getElementsByTagName("div")[1].getElementsByTagName("p")[0] || event.target==sec_div[i].getElementsByTagName("span")[0]){
	viewed(i)
	return;
	}
	
	}
 
}
	

function viewed (x)
{
if(seen[x]!=true){
sec_div[x].getElementsByTagName("div")[1].style.height="auto";
sec_div[x].getElementsByTagName("div")[1].getElementsByTagName("p")[0].style.height="auto";
sec_div[x].getElementsByTagName("div")[1].getElementsByTagName("span")[0].innerHTML=`<span class="upbtn" ></span>Read less`;
seen[x]=true;
console.log(sec_div[x].getElementsByTagName("div")[1].getElementsByTagName("p")[0].clientHeight)
console.log(sec_div.length)


}
else {
sec_div[x].getElementsByTagName("div")[1].style.height="120px";
sec_div[x].getElementsByTagName("div")[1].getElementsByTagName("p")[0].style.height="50px";
sec_div[x].getElementsByTagName("div")[1].getElementsByTagName("span")[0].innerHTML=`<span class="downbtn" ></span>Read more`;
seen[x]=false;
}
}

</script>


</body>
</html>