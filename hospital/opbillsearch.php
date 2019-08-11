
<?PHP
include "db.php";
include "HEADER.PHP";

$header="";
$data="";
?>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['1'];
$pno=$_POST['2'];
$date=$_POST['3'];
$nm=$_POST['4'];
$dr=$_POST['5'];
$ph=$_POST['6'];
$lt=$_POST['7'];
$tol=$_POST['8'];


$query=mysqli_query($con,"insert into opbill(BILLNO,PATIENTID,NAME,DR,DATE,PHARMECY,LABTEST,Total) values('$n','$pno','$nm','$dr','$date','$ph','$lt','$tol')");
	if($query)
	{
		echo "<script>alert(' successfully ');</script>";
	}
	
	
	$sql1=mysqli_query($con,"select * from opbill where BILLNO=$n");
$header="<tr><th>Bill NO</th><th>Patient id</th><th>Name</th><th>Docter</th><th>Date</th><th>Pharmacy</th><th>Lab test</th><th>Total</th></tr>";

 while($row=mysqli_fetch_array($sql1))
 	{
		$a=$row['BILLNO'];
		$b=$row['PATIENTID'];
		$c=$row['NAME'];
		$d=$row['DR'];
		$e=$row['DATE'];
		$f=$row['PHARMECY'];
		$g=$row['LABTEST'];
		$h=$row['Total'];
 	$data="<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td><td>$h</td></tr>";
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
  <center><h4>Out PATIENT BILL</h4></center>
</div>

<div id="ACCOUNT" class="w3-container city" >
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form2' style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

          <div class="form-group">
      <label class="control-label col-sm-5" for="email">Billnumber:</label>
      <div class="col-sm-7">
        <input type="number" class="form-control" id="email" placeholder="Enter email" name="1"required></div>

    </div>
                         <div class="form-group">
      <label class="control-label col-sm-7" for="email">Patientnumber:</label>
	   <div class="col-sm-5">
     <select name="2" class="form-control" id="doctor" onChange="getdetail(this.value);" required="required">
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
      <label class="control-label col-sm-4" for="email">BillDate:</label>
      <div class="col-sm-8">
       <input type="date" class="form-control" id="email" placeholder="Enter email" name="3"required></div>
		
		 
    </div>
	<div id="ss">
	   </div>
	   <div class="form-group">
      <label class="control-label col-sm-5" for="email">Pharmacy:</label>
      <div class="col-sm-7">
	  <input type="number" class="form-control" id="ph" placeholder="Enter pharmacy" name="6" required></div>

     </div>
		
		 
  
	
                         <div class="form-group">
      <label class="control-label col-sm-6" for="email">Lab_test:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="lb" placeholder="Enter email" onChange="gettot(this.value);" name="7" required></div>

    </div>
	   <br/>
	     <div class="form-group">
      <label class="control-label col-sm-5" for="email">Total:</label>
      <div class="col-sm-7">
      <input type="number" class="form-control" id="tol" placeholder="Enter pharmacy" name="8" required></div>
</div>
		
		 
                               
		  
	 <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff;padding-left:5px;"type="submit" name="submit" value="search" class="btn btn-success btn-custom">
                      </div>  </div>
					 
					  
	
	

							 

                        
							 </form><center>
</div>
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center>Bill Display<center>

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
<?php
echo $header;
echo $data;
?>
</table>
 <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff;padding-left:5px;"type="submit" name="submit" value="print" class="btn btn-success btn-custom">
                      </div> 
</div>
</div>
</div>
</div>


</div>
<script>
function getdetail(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'detail2='+val,
	success: function(data){
		$("#ss").html(data);
	}
	});
}


function gettot(val) {
	var ph=parseInt($("#ph").val());
var tt= ph + parseInt(val);
	$("#tol").val(tt);
}
</script>
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