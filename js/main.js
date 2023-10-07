function checkpwd(){
let password= document.getElementById("pwd").value;
let cmpwd =document.getElementById("cmpwd").value;
let error= document.getElementById("error_mas");
if (password=== cmpwd){
return true;
}
else{
error.textContent="password not match"
event.preventDefault();
}
}

let selected = document.getElementById("myselect");
let inputtext =document.querySelector("#otherin");
 function inputselection (){
 if( selected.value=="other"){
 inputtext.style.display="block";
 }
 else {
  inputtext.style.display="none";
 }
 }