<?PHP
include "db.php";
include "HEADER.PHP";


?>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['1'];
$date=$_POST['2'];
$age=$_POST['3'];
$ty=$_POST['4'];
$s=$_POST['5'];
$sp=$_POST['6'];
$ad=$_POST['7'];
$mn=$_POST['8'];
$dn=$_POST['9'];
$rf=$_POST['10'];

$query=mysqli_query($con,"insert into patient(NAME,AGE,SEX,ADDRESS,DR,TYPE,REFEES,DATE,SPOUS,MONO) values('$n','$age','$s','$ad','$dn','$ty','$rf','$date','$sp','$mn')");
	if($query)
	{
		echo "<script>alert(' successfully ');</script>";
	}

}
?>

<style type="text/css">
form{
	 max-width: 950px;
        margin-top: 10px;
		
		background-color:white;
		border-radius:5px;
		border:solid 2px;
		
}

    .form-group{
        max-width: 480px;
		color:#052559;
        padding-left: 20px;
		padding-top:8px;
		float:left;
	}
    
  
    .btn-custom {
        width: 100%;
        background-color: blue;
        border-color: #2abb9b;
        margin-bottom: 5px;
        border-radius: 2px;
		float:right; 
    }
    .btn-custom:hover {
        width: 100%;
        background-color: #48A497;
        border-color: #2abb9b;
    }
	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: red;
    opacity: 1; /* Firefox */
}
    

</style>


<!-- !PAGE CONTENT! -->




<div class="w3-main" id="main" style="margin-left:260px;margin-top:43px;">
<br/>
<br/>
  <div style="margin-left:10px;position:absolute"class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:160px;">
  
 <center><h4 style="background-color:#052559;color:#ffffff;">Task</h4></center>
  <button class="w3-button w3-block w3-left-align" onclick="myAccFnc(1)">
  Accordion1 <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAc1" class="w3-hide w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button">Link</a>
    <a href="#" class="w3-bar-item w3-button">Link</a>
  </div>
   <button class="w3-button w3-block w3-left-align" onclick="myAccFnc(2)">
  Accordion2 <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAc2" class="w3-hide w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button">Link</a>
    <a href="#" class="w3-bar-item w3-button">Link</a>
  </div>

  
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
<div class="w3-container" style="margin-left:190px">
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <center><h4>Patient Registration</h4></center>
</div>

<div id="ACCOUNT" class="w3-container city" >
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form2' style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">
<div class="col-sm-10">
                         <div class="form-group">
      <label class="control-label col-sm-3" for="email">Name:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="1"required></div>
		 <span class="error col-sm-1">*</span>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Date:</label>
      <div class="col-sm-8">
       <input type="date" class="form-control" id="email" placeholder="Enter email" name="2"required></div>
		
		  <span class="error col-sm-1">*</span>
    </div>
	                                 
	
	   <div class="form-group">
      <label class="control-label col-sm-3" for="email">Age:</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" id="email" placeholder="Enter Age" name="3"></div>
		  
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Type:</label>
      <div class="col-sm-7">
        <input class="form-control" list="mstatus" name="4">
  <datalist id="mstatus">
    <option value="IP">
    <option value="OP">
   
  </datalist></div>
		  <span class="error col-sm-1">* <?php //echo $mstatusErr;?></span>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-3" for="email">Sex:</label>
      <div class="col-sm-7">
        <input class="form-control" list="sex" name="5">
  <datalist id="sex">
    <option value="male">
    <option value="female">
   
  </datalist></div>
		  <span class="error col-sm-1">* <?php //echo $nameErr;?></span>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-3" for="email">Fathername /spous:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="6"></div>
		
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-3" for="email">Address:</label>
      <div class="col-sm-9">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"name="7" rows="6"></textarea></div>
		 
    </div>
	  
	
	

   
	 <div class="form-group">
      <label class="control-label col-sm-3" for="email">mobileNum:</label>
      <div class="col-sm-7">
       <input name="8" id="phonenum"class="form-control" type="number"   required ></div>
		  <span class="error col-sm-0">* <?php //echo $nameErr;?></span>
    </div>  
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="email">Dr_name:</label>
      <div class="col-sm-9">
        <select name="9" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
						<option value="">Select Doctor</option>
						<?php $ret=mysqli_query($con,"select * from doctors");
while($row=mysqli_fetch_array($ret))
{
?>
						<option><?php echo htmlentities($row['doctorName']);?>
																</option>
																<?php } ?>
						</select></div>
		 
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email">Regfees:</label>
      <div class="col-sm-6">
       <select name="10" class="form-control" id="fees"  readonly>
						
						</select>
    </div>
	 <div class="form-group ">
							  <div class="input-group">
                                    <div class="col-sm-6">
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>        <div class="col-sm-6">
									<input style="background-color:#052559;color:#ffffff"type="reset" name="submit" value="Reset" class="btn btn-success btn-custom">
                      </div>  </div>  </div>
	

							 
</div>
                         </form><center>
</div>
</div>
</div>
</div>


</div>

<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'user.php?page='
    });
	});
</script>

<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	
<script type="text/javascript">
 $(function(){
	 w3_open();
	 w3_open();
	 
 })
</script>
  
  
<script>
function myAccFnc(num) {
	var obj="demoAc"+num;
    var x = document.getElementById(obj);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}


</script>
  
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>