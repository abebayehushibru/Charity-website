var sec1 = document.querySelector(".sec1")
var sec2 =document.querySelector(".sec2")
var sec4 = document.querySelector(".sec4")
var menubr= document.getElementsByClassName("menu_bar")
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



var sec_div = sec2.querySelectorAll(".news");

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
console.log(sec_div[0].getElementsByTagName("div")[1].getElementsByTagName("p")[0].clientHeight)
console.log(sec_div.length)
console.log(sec_div.length)

$("#reg_form").submit(function (event )
{
let $password= $("#pwd");
let $cmpwd =$("#cmpwd");
let $error= $("#error_mas");
if ($password.val()===$cmpwd.val()){
return true;
}
else{
$error.text("password not match")
event.preventDefault()
}

}
)


