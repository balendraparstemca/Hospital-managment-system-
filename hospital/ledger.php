<?PHP
include "db.php";
include "HEADER.PHP";
$datev=$_REQUEST['datek'];
$monthn=$_REQUEST['monthk'];
$year=$_REQUEST['year'];
$groupv=$_REQUEST['name'];

$dated=date("Y/m/d", mktime(0, 0, 0,(int)$monthn,(int)$datev,(int)$year));
$datekd=date("d/m/Y", mktime(0, 0, 0,(int)$monthn,(int)$datev,(int)$year));

	
$rs_result= mysqli_query($con,"SELECT * from transaction where AC_NAME='$groupv' AND STR_TO_DATE(VOCH_DT,'%m/%d/%Y')='$dated'");


?>
<!-- !PAGE CONTENT! -->




<div class="w3-main" id="main" style="margin-left:260px;margin-top:40px;">

  <!-- Header -->
  



<div id="ACCOUNT" class="w3-container city">
  
  
  <h4><center><?php echo $groupv ?></center></h4><h4></h4>
   <span style="float:right;padding:9px;"><button onclick="goBack()" type="submit" class="btn btn-default">Go Back</button></span>
 	 
<p style="float:right;"><b>Date:<?php echo $datekd;?> </b>
</p>
  
  
<div class="w3-container" style="padding:9px;">

<table id="table1" class="w3-table-all w3-hoverable">
  <tr style="background-color:#052559;color:#ffffff">
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">VOCH_DT</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AC_NAME</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Debit</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Credit</th>
    
	
	
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            
            
			  <td><?php echo $row["VOCH_DT"]; ?></td> 
			   
			    <td><?php echo $row["AC_NAME"]; ?></td> 
				<td><?php echo $row["AMOUNTDR"]; ?></td> 
				 <td><?php echo $row["AMOUNTCR"]; ?></td>
			 
			
			
     			
            </tr>  
			
<?php  
};  
?>  

  

</table>


</div>
</div>



</div>


  
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>