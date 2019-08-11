
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

<?PHP
include "db.php";
include "HEADER.PHP";

?>
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
  <center><h4>InPatient Search</h4></center>
</div>

<div id="ACCOUNT" class="w3-container city" >
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form2' style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">


                         <div class="form-group">
      <label class="control-label col-sm-5" for="email">Patientnumber:</label>
	   <div class="col-sm-7">
     <select name="2" class="form-control" id="doctor" onChange="getop(this.value);" required="required">
						<option value="">Select</option>
						<?php $ret=mysqli_query($con,"select * from patient where TYPE='OP'");
while($row=mysqli_fetch_array($ret))
{
?>
						<option><?php echo htmlentities($row['ID']);?>
																</option>
																<?php } ?>
						</select>
    </div> </div>
	  
	     <div class="form-group">
      <label class="control-label col-sm-5" for="email">PatientName:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"required></div>

    </div>
	
	
	                               
	
	  
	 <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff;padding-left:5px;"type="submit" name="submit" value="search" class="btn btn-success btn-custom">
                      </div>  </div>
					 
					  
	
	

							 

                        
							 </form><center>
</div>
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center>Out Patient<center>
<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">

</table>
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
<script>
function getop(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'op='+val,
	success: function(data){
		$("#table1").html(data);
	}
	});
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