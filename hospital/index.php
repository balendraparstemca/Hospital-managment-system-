<?PHP

include "HEADER.PHP";

?>
<!-- !PAGE CONTENT! -->


<?php 
$status="";
$sql = "SELECT * FROM ac_machine";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
}
	
else
{
	$sql = "SELECT * FROM computers";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
	 if(strcmp($row['STATUS'],"Working")!=0)
      {
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
      }
	  else
	  {
	$sql = "SELECT * FROM equipment_icu";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
	 if(strcmp($row['STATUS'],"Working")!=0)
      {
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
      }
	   else
	  {
	$sql = "SELECT * FROM equipment_labour_room";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
	 if(strcmp($row['STATUS'],"Working")!=0)
      {
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
      }
	   else
	  {
	$sql = "SELECT * FROM equipment_ot";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
	 if(strcmp($row['STATUS'],"Working")!=0)
      {
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
      }
	   else
	  {
	$sql = "SELECT * FROM  equipment_pow";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
	 if(strcmp($row['STATUS'],"Working")!=0)
      {
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
      }
	   else
	  {
	$sql = "SELECT * FROM  telephone";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
	 if(strcmp($row['STATUS'],"Working")!=0)
      {
	$status="<img src='images/alert1.gif' width='50px' height='50px'/>";
      }
	  
	 
	  }
	 
	  }
	 
	  }
	 
	  }
	  }
}
	
 ?>

<div class="w3-main" id="main" style="margin-left:260px;margin-top:33px;">

  <!-- Header -->
  <span><button style="color:#052559;float:right;margin-top:15px;margin-right:5px;"onclick="goBack()" type="submit" class="btn btn-default"><img src="images/group.png" width="25px" height="25px"/>Nurse<br/>0
		   </button></span><span><button style="color:#052559;float:right;margin-top:15px;margin-right:5px;"onclick="goBack()" type="submit" class="btn btn-default"><img src="images/group.png" width="25px" height="25px"/>Patient<br/>0
		   </button></span><span><button style="color:#052559;float:right;margin-top:15px;margin-right:5px;"onclick="goBack()" type="submit" class="btn btn-default"><img src="images/group.png" width="25px" height="25px"/>Docter<br/>0
		   </button></span>
  <header class="w3-container" style="padding-top:60px">
    <h5><b><img src="images/group.png" width="25px" height="25px"/>Dashboard</h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
        <a href="" ><div id="box1" class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/group.jpg" width="60px" height="60px"/></div>
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>Patients</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
       <a href="" ><div id="box1"class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/pharma.png" width="60px" height="60px"/></div>
        <div class="w3-right">
		
        
		  
        </div>
        <div class="w3-clear"></div>
        <h4>Pharmacy</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
      <a onclick="" href="#"id="asset"> <div id="box1"class="w3-container w3-padding-16">
        <div class="w3-left"><img src="images/voucher.png" width="60px" height="60px"/></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Training</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
       <a onclick="" href="#"id="ledgergroup"><div id="box1" class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/report.png" width="60px" height="60px"/></div>
        <div class="w3-right">
        
        </div>
        <div class="w3-clear"></div>
        <h4>Report</h4>
      </div></a>
    </div>
  </div>
  
<div class="w3-row-padding w3-margin-bottom">
 <div class="w3-quarter">
       <a href="assets.php"id="assets"><div id="box1" class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/report.png" width="60px" height="60px"/></div>
        <div class="w3-right">
        <?php echo $status;?>
        </div>
        <div class="w3-clear"></div>
        <h4>Assets</h4>
      </div></a>
    </div>
	<div class="w3-quarter">
       <a href="manage-doctors.php"id="assets"><div id="box1" class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/report.png" width="60px" height="60px"/></div>
        <div class="w3-right">
      
        </div>
        <div class="w3-clear"></div>
        <h4>Docter</h4>
      </div></a>
    </div>
	<div class="w3-quarter">
       <a href="assets.php"id="assets"><div id="box1" class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/report.png" width="60px" height="60px"/></div>
        <div class="w3-right">
      
        </div>
        <div class="w3-clear"></div>
        <h4>Nurse</h4>
      </div></a>
    </div>
	<div class="w3-quarter">
       <a href="assets.php"id="assets"><div id="box1" class="w3-container  w3-padding-16">
        <div class="w3-left"><img src="images/report.png" width="60px" height="60px"/></div>
        <div class="w3-right">
        
        </div>
        <div class="w3-clear"></div>
        <h4>Setting</h4>
      </div></a>
    </div>
  </div>
</div>
</div>
  
  
  
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>
  <script>
  $(document).ready(function(){

$('#ledgergroup').click(function() {
 
    $('#main').load('ledgergroup1.php');

});


	
	
})</script>
  