<?php
include("header.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
require("registration.php");
}
?>
<section class="body_sec" >
<div class="sec_form" >
<h2 class="regformname" > Registration Form</h2>
<form method="post"  class="reg_form" id="reg_form" action="registration-form.php"  onsubmit="checkpwd();" >
<div> <span >First Name </span><input type="text" name="firstname" placeholder="first name" value="<?php if(isset($_POST['firstname']))echo $_POST['firstname'];?>" ></div>
<div><span >Last Name</span><input type="text" name="lastname" placeholder="last name"  value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname'];}?>"  ></div>
<div><span >Phone Number</span><input type="text" name="phonenumber" placeholder="e.g 0964799523" required="required"  value="<?php if(isset($_POST['phonenumber'])){ echo $_POST['phonenumber'];}?>"  ></div>
<div><span >monthly payment</span><input type="number" name="mpayment" min="25"  placeholder="monthly payment" value="<?php if(isset($_POST['mpayment'])){ echo $_POST['mpayment'];}?>" ></div>
<div ><span >Region</span> 
<select id="myselect" onchange="inputselection ();" name="region"  value="<?php if(isset($_POST['region']))echo $_POST['region'];?>">
<option  value="snnp"   selected="selected" >SNNP</option>
<option value="Sidama"   >Sidama</option>
<option  value="Adisabeba" n >Adis abeba</option>
<option  value="Amahara"  >Amahara</option>
<option  value="Oromia"  >Oromia</option>
<option value="Harari"  >Harari</option>
<option  value="Tigray"   >Tigray</option>
<option   value="other" >other <input type="text" id="otherin"> </option>
</select>
</div>
<div>
<span >Woreda/city</span>
<input type="text" name="woreda_town" placeholder="enter woreda /town"  value="<?php if(isset($_POST['woreda_town'])){ echo $_POST['woreda_town'];}?>"  >
</div>
<div>
<span >Kebele</span> <input type="text" name="kebele" placeholder=" enter kebele"  value="<?php if(isset($_POST['kebele'])) echo $_POST['kebele'];?>" >
</div>
<div><span >
password *</span> <input type="password" name="pwd" id="pwd"  placeholder="enter password" required="required" >
</div>
<div><span >
Repeat password*</span><input type="password" name="cm_pwd" id="cmpwd" placeholder="repeat password"  required="required"  >
<p id="error_mas" ></p>
</div>
<input type="submit"  value="register" > 
</form>

</section>
<?php
include("footer.php");
?>