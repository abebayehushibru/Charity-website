<?php 
include("header.php");
?>
<section class="secp" >
	<div class="check" >
		<h2>Check payment</h2>
	</div>
   <div class="atekalay" >
       <div class="myin" >
          <input id="myinput"  type="number" placeholder="enter id number" ><button onclick="search();">Go</button>
       </div>
       <br>
       <div class="head" >
	       <div>
	           <span style="width:20%;" >ተ.ቁ</span>
	           <span style="width:40%">ወር</span>
	           <span style="width:40%">ተከፍሏል</span>
           </div>
       </div>
       <div class="mytbdiv" >
	       <table>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       <tr>
		       </tr>
		       
	       </table>
	       <p class="noresult" ></p>
       </div>
       <h3>መስጠት ሲሰጠን ነው የሚንሰጠዉ!!! </h3>
   </div>

  
</section>
 <script type="text/javascript">
 var input = document.getElementById("myinput")
 var mytb = document.querySelector("table");
 var thead= document.getElementsByTagName("thead");
 var tr = mytb.querySelectorAll("tr");
 var head = document.querySelector(".head")
 var noresult =document.querySelector(".noresult")
 var kifyameten = [30,25,25,50]
 var totalPaid = [90,100,50,150]
 var yalkeflewu=0;
 var wer = ["መስክረም","ጥቅምት","ህዳር","ታህሳስ","ጥረ","የካትት","መጋብት"
 ,"መዓዝያ","ግንቦት","ሰኔ","ሐምሌ","ነሃሴ"];
 var yalenbetwer=2;
 var getid;
 var max_id = 11;
 function search ()
 {
 getid = input.value;
  console.log (getid)
 if(getid>max_id){
  for(i=1;i<=12;i++){
   tr[i-1].innerHTML=""}
  noresult.setAttribute("class","red")
 noresult.textContent="በዚህ id የተመዘገበ አባል የለም";
  head.style.opacity=0;
 }
 else{
 for(i=1;i<=max_id; i++){
   if(getid==i){
   display (getid);
   break;
   }
   
 }
 
 }
 
 }
 function display (id) 
 {
 head.style.opacity=1;
 yalkeflewu=0;
 temp = totalPaid[id-1];
 for(i=1;i<=12;i++){
 temp=temp-kifyameten[id-1];
 if (temp>=0){
 tr[i-1].innerHTML='<td style="width:20%"class="tqu">'+i+"</td>"+'<td style="width:40%">'+wer[i-1]+"</td>"+'<td style="width:40%" class="paid">ተከፍሏል</td>'
 }
 else{
 if (yalenbetwer>=i){
  tr[i-1].innerHTML='<td style="width:20%" class="tqu">'+i+"</td>"+'<td style="width:40%">'+wer[i-1]+"</td>"+'<td style="width:40%;" class="x">&times</td>'
  yalkeflewu=yalkeflewu+1}
  else{
  tr[i-1].innerHTML='<td style="width:20%" class="tqu">'+i+"</td>"+'<td style="width:40%">'+wer[i-1]+"</td>"+'<td style="width:40%;">pending...</td>'
  
  }
 }
 if (yalkeflewu == 0){
  noresult.textContent="ወራዊ ክፍያ በጊዜ ስለከፈሉ እናመሰግናለን"
  noresult.setAttribute("class","green")
 }
 else{
  noresult.innerHTML="የቀረቦትን "+yalkeflewu+ "ወር ክፍያ ይክፈሉ!!<br> ስለሚከፍሉ እናመሰግናለን";
  noresult.setAttribute("class","orange")
 }
 }
 
 }
 
 </script>
 <?php 
 include("footer.php");
 ?>