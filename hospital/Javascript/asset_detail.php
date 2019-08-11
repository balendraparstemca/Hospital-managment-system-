<?PHP
include "db.php";
include "HEADER.PHP";

?>
<style type="text/css">
form{
	 max-width: 800px;
        margin-top: 10px;
		
		background-color:white;
		border-radius:5px;
		border:solid 2px;
		
}

    .form-group{
        max-width: 290px;
		color:#052559;
        padding: 20px;
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
<?php
if($_GET['name']==1)
{
$rs_result= mysqli_query($con,"SELECT * from vehicle");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Vehicle</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Vehicle</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">Vehicle Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Name</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Company</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date Of Service</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Mil at Service</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Work Performed</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Performed By</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Notes</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["id"]; ?></td>  
            <td><?php echo $row["veh_name"]; ?></td> 
			    <td><?php echo $row["company"]; ?></td> 
				<td><?php echo $row["dateofservice"]; ?></td> 
				 <td><?php echo $row["mileageatservice"]; ?></td>
				 <td><?php echo $row["workperformed"]; ?></td>
				 <td><?php echo $row["performedby"]; ?></td>
				 <td><?php echo $row["cost"]; ?></td>
				 <td><?php echo $row["notes"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'vehicle');"  class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;">

</div>
</div>
<?php  
};  
?> 

<?php
if($_GET['name']==2)
{
$rs_result= mysqli_query($con,"SELECT * from ac_machine");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> A/C Machine</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Floor</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">A/c Location</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Capacity of A/c</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID No.</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Name of Company(AMC)</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of Renewal(AMC)</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of AMC</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
			 
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'FLOOR',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["FLOOR"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
				<td onBlur="saveToDatabase(this,'CAPACITY',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["CAPACITY"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'ID_NO',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["ID_NO"]; ?></td>
				 <td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_PURCHASE',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COMPANY_AMC',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["COMPANY_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'RENEWAL_DATE_AMC',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["RENEWAL_DATE_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'ac_machine')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'ac_machine');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form2' style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="FLOOR" placeholder="FLOOR" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="CAPACITY" placeholder="CAPACITY" required>
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="MAKE"  placeholder="MAKE" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control"  name="ID_NO" placeholder="ID_NO" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="YEAR_OF_PURCHASE" placeholder="YEAR_OF_PURCHASE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_PURCHASE" placeholder="COST_OF_PURCHASE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="WARRANTY" placeholder="WARRANTY" >   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COMPANY_AMC" placeholder="COMPANY_AMC" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="RENEWAL_DATE_AMC"  placeholder="RENEWAL_DATE_AMC" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control" id="COST_OF_AMC" name="COST_OF_AMC" placeholder="COST_OF_AMC" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
						   </div>
                            </div>
							
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>
</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==3)
{
$rs_result= mysqli_query($con,"SELECT * from equipment_labour_room");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Equipment in Labour Room</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Equipment<br>Name</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Manufacturer</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Model</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Serial No.</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Supplier/<br>Dealer</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of<br>Machine</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Inv. No. & Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Installation</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>End date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">CMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Amount</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Frequency<br>of PM</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Last Service<br>Details</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Spare Accessories<br>Replaced on</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty End<br>date</th>
			 
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'EQUIPMENT_NAME',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["EQUIPMENT_NAME"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MANUFACTURER',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["MANUFACTURER"]; ?></td> 
				<td onBlur="saveToDatabase(this,'MODEL',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["MODEL"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'SERIAL_NO',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["SERIAL_NO"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SUPPLIER',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["SUPPLIER"]; ?></td>
				 <td onBlur="saveToDatabase(this,'PURCHASE_DATE',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["PURCHASE_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_MACHINE',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_MACHINE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'INV_NO_DATE',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["INV_NO_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'INSTALLATION_DATE',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["INSTALLATION_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_PERIOD',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_ENDDATE',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_ENDDATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'CMC',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["CMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_CMC_PERIOD',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["AMC_CMC_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_CMC_ENDDATE',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["AMC_CMC_ENDDATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_CMC_AMOUNT',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["AMC_CMC_AMOUNT"]; ?></td>
				 <td onBlur="saveToDatabase(this,'FREQUENCY_OF_PM',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["FREQUENCY_OF_PM"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LAST_SERVICE_DETAIL',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["LAST_SERVICE_DETAIL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SPARE_ACCESSORIES_REPLACED_ON',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["SPARE_ACCESSORIES_REPLACED_ON"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'equipment_labour_room')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'equipment_labour_room');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form3'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="EQUIPMENT_NAME" placeholder="EQUIPMENT_NAME" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MANUFACTURER" placeholder="MANUFACTURER" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MODEL" placeholder="MODEL" required>
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="SERIAL_NO"  placeholder="SERIAL_NO" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control"  name="SUPPLIER" placeholder="SUPPLIER" required>
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" onfocus="(this.type='date')" class="form-control" name="PURCHASE_DATE" placeholder="PURCHASE_DATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_MACHINE" placeholder="COST_OF_MACHINE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="INV_NO_DATE" placeholder="INV_NO_DATE" >   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" onfocus="(this.type='date')"class="form-control" name="INSTALLATION_DATE" placeholder="INSTALLATION_DATE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="LOCATION"  placeholder="LOCATION" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control" id="WARRANTY_PERIOD" name="WARRANTY_PERIOD" placeholder="WARRANTY_PERIOD" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text"onfocus="(this.type='date')" class="form-control" name="WARRANTY_ENDDATE" placeholder="WARRANTY_ENDDATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC" placeholder="AMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="CMC" placeholder="CMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_PERIOD" placeholder="AMC/CMC PERIOD" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_ENDDATE" placeholder="AMC/CMC ENDDATE" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_AMOUNT" placeholder="AMC/CMC AMOUNT" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="FREQUENCY_OF_PM" placeholder="FREQUENCY_OF_PM" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="LAST_SERVICE_DETAIL" placeholder="LAST_SERVICE_DETAIL" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="SPARE_ACCESSORIES_REPLACED_ON" placeholder="SPARE_ACCESSORIES_REPLACED_ON" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
						   </div>
                            </div>
							
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==4)
{
$rs_result= mysqli_query($con,"SELECT * from equipment_icu");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Equipments in ICU</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Equipment</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Manufacturer</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Model</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Serial No.</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Supplier/<br>Dealer</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of<br>Machine</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Inv. No. & <br>Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Installation</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">CMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Amount</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Frequency of PM</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Last Service<br>Details</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Spare Accessories<br>Replaced on</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
			 
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'EQUIPMENT_NAME',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["EQUIPMENT_NAME"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MANUFACTURER',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["MANUFACTURER"]; ?></td> 
				<td onBlur="saveToDatabase(this,'MODEL',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["MODEL"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'SERIAL_NO',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["SERIAL_NO"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SUPPLIER',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["SUPPLIER"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_OF_PURCHASE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["DATE_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_MACHINE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_MACHINE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'INV_NO_DATE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["INV_NO_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'INSTALLATION_DATE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["INSTALLATIO_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_PERIOD',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_END_DATE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_END_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'CMC',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["CMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_CMC_PERIOD',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["AMC_CMC_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_CMC_ENDDATE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["AMC_CMC_ENDDATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_CMC_AMOUNT',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["AMC_CMC_AMOUNT"]; ?></td>
				 <td onBlur="saveToDatabase(this,'FREQUENCY_TO_PM',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["FREQUENCY_TO_PM"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LAST_SERVICE_DATE',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["LAST_SERVICE_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SPARE_ACCESSORIES_REPLACED_ON',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["SPARE_ACCESSORIES_REPLACED_ON"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'equipment_icu')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#" onClick="delet(<?php echo $row["ID"]; ?>,'equipment_icu');"class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form4'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="EQUIPMENT_NAME" placeholder="EQUIPMENT_NAME" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MANUFACTURER" placeholder="MANUFACTURER" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MODEL" placeholder="MODEL" required>
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="SERIAL_NO"  placeholder="SERIAL_NO" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control"  name="SUPPLIER" placeholder="SUPPLIER" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" onfocus="(this.type='date')" class="form-control" name="PURCHASE_DATE" placeholder="PURCHASE_DATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_MACHINE" placeholder="COST_OF_MACHINE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="INV_NO_DATE" placeholder="INV_NO_DATE" >   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" onfocus="(this.type='date')"class="form-control" name="INSTALLATION_DATE" placeholder="INSTALLATION_DATE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="LOCATION"  placeholder="LOCATION" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control" id="WARRANTY_PERIOD" name="WARRANTY_PERIOD" placeholder="WARRANTY_PERIOD" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text"onfocus="(this.type='date')" class="form-control" name="WARRANTY_ENDDATE" placeholder="WARRANTY_ENDDATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC" placeholder="AMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="CMC" placeholder="CMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_PERIOD" placeholder="AMC/CMC PERIOD" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_ENDDATE" placeholder="AMC/CMC ENDDATE" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_AMOUNT" placeholder="AMC/CMC AMOUNT" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="FREQUENCY_OF_PM" placeholder="FREQUENCY_OF_PM" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="LAST_SERVICE_DATE" placeholder="LAST_SERVICE_DATE" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="SPARE_ACCESSORIES_REPLACED_ON" placeholder="SPARE_ACCESSORIES_REPLACED_ON" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
						   </div>
                            </div>
							
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 

<?php
if($_GET['name']==5)
{
$rs_result= mysqli_query($con,"SELECT * from equipment_pow");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Equipments in POW</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Equipment Name</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Manufacturer</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Model</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Serial No.</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Supplier/<br>Dealer</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of<br>Machine</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Inv. No. <br>& Date</th>
			 		 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Installation</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">CMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Amount</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Frequency of PM</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Last Service<br>Details</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Spare Accessories<br>Replaced on</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'EQUIPMENT',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["EQUIPMENT"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MANUFACTURER',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["MANUFACTURER"]; ?></td> 
				<td onBlur="saveToDatabase(this,'MODEL',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["MODEL"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'SERIAL_NO',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["SERIAL_NO"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SUPPLIER',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["SUPPLIER"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_OF_PURCHASE',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["DATE_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_MACHINE',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_MACHINE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'INV_NO_DATE',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["INV_NO_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_INSTALLATION',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["DATE_INSTALLATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_PERIOD',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_END_DATE',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_END_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'CMC',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["CMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_OR_CMC_PERIOD',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["AMC_OR_CMC_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_OR_CMC_ENDDATE',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["AMC_OR_CMC_ENDDATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_OR_CMC_AMOUNT',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["AMC_OR_CMC_AMOUNT"]; ?></td>
				 <td onBlur="saveToDatabase(this,'FREQUENCY_TO_PM',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["FREQUENCY_TO_PM"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LAST_SERVICE_DETAIL',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["LAST_SERVICE_DETAIL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SPARE_ACCESSORIES_REPLACED_ON',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["SPARE_ACCESSORIES_REPLACED_ON"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'equipment_pow')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#" onClick="delet(<?php echo $row["ID"]; ?>,'equipment_pow');"class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form5'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="EQUIPMENT_NAME" placeholder="EQUIPMENT_NAME" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MANUFACTURER" placeholder="MANUFACTURER" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MODEL" placeholder="MODEL" required>
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="SERIAL_NO"  placeholder="SERIAL_NO" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control"  name="SUPPLIER" placeholder="SUPPLIER" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" onfocus="(this.type='date')" class="form-control" name="PURCHASE_DATE" placeholder="PURCHASE_DATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_MACHINE" placeholder="COST_OF_MACHINE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="INV_NO_DATE" placeholder="INV_NO_DATE" >   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" onfocus="(this.type='date')"class="form-control" name="INSTALLATION_DATE" placeholder="INSTALLATION_DATE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="LOCATION"  placeholder="LOCATION" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control" id="WARRANTY_PERIOD" name="WARRANTY_PERIOD" placeholder="WARRANTY_PERIOD" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text"onfocus="(this.type='date')" class="form-control" name="WARRANTY_END_DATE" placeholder="WARRANTY_END_DATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC" placeholder="AMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="CMC" placeholder="CMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_PERIOD" placeholder="AMC/CMC PERIOD" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_ENDDATE" placeholder="AMC/CMC ENDDATE" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_AMOUNT" placeholder="AMC/CMC AMOUNT" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="FREQUENCY_OF_PM" placeholder="FREQUENCY_OF_PM" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="LAST_SERVICE_DETAIL" placeholder="LAST_SERVICE_DETAIL" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="SPARE_ACCESSORIES_REPLACED_ON" placeholder="SPARE_ACCESSORIES_REPLACED_ON" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
						   </div>
                            </div>
							
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 

<?php
if($_GET['name']==6)
{
$rs_result= mysqli_query($con,"SELECT * from phyjiotherepy_instrument");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Physiotherapy Department Instruments</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Instrument Name</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Id. No.</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC</th>
			
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'NAME',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["NAME"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
				<td onBlur="saveToDatabase(this,'ID_NO',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["ID_NO"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_PURCHASE',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC',<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument')"ondblclick="showEdit(this);"><?php echo $row["AMC"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'phyjiotherepy_instrument');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form6'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="EQUIPMENT_NAME" placeholder="EQUIPMENT_NAME" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" >   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="ID_NO" placeholder="ID_NO" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="YEAR_OF_PURCHASE"  placeholder="YEAR_OF_PURCHASE" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                           
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_PURCHASE" placeholder="COST_OF_PURCHASE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="WARRANTY" placeholder="WARRANTY" >   </div>
                            </div>
                            
							 <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC" placeholder="AMC" >   </div>
                            </div>
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==7)
{
$rs_result= mysqli_query($con,"SELECT * from cctv_camera");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> CC TV Camera</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Floor</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">MAKE</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC with</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of AMC</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of AMC<br>Renewal</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'FLOOR',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["FLOOR"]; ?></td> 
				<td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_PURCHASE',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_WITH',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["AMC_WITH"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_AMC_RENEWAL',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["DATE_AMC_RENEWAL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'cctv_camera')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'cctv_camera');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form7'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="FLOOR" placeholder="FLOOR" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="YEAR_OF_PURCHASE"  placeholder="YEAR_OF_PURCHASE" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                           
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_PURCHASE" placeholder="COST_OF_PURCHASE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_WITH" placeholder="AMC_WITH" required>   </div>
                            </div>
                            
							 <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_AMC" placeholder="COST_OF_AMC" required>   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text"onfocus="(this.type='date');" class="form-control" name="RENEWAL_AMC_DATE" placeholder="RENEWAL_AMC_DATE" >   </div>
                            </div>
							 <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text"onfocus="(this.type='date');" class="form-control" name="STATUS" placeholder="STATUS" >   </div>
                            </div>
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==8)
{
$rs_result= mysqli_query($con,"SELECT * from xerox_machine");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Xerox Machines</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Supllier</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'xerox_machine')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'xerox_machine')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
				<td onBlur="saveToDatabase(this,'SUPPLIER',<?php echo $row["ID"]; ?>,'xerox_machine')"ondblclick="showEdit(this);"><?php echo $row["SUPPLIER"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'xerox_machine')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST',<?php echo $row["ID"]; ?>,'xerox_machine')"ondblclick="showEdit(this);"><?php echo $row["COST"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'xerox_machine')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#" onClick="delet(<?php echo $row["ID"]; ?>,'xerox_machine');"class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form8'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="SUPPLIER" placeholder="SUPPLIER" required>   </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="YEAR_OF_PURCHASE"  placeholder="YEAR_OF_PURCHASE" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                           
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST" placeholder="COST" />
									
						   </div>
						 
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" />
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==9)
{
$rs_result= mysqli_query($con,"SELECT * from telephone");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Telephones</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Area</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Telephone Nos.</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of AMC</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>AMC Renewal</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
			 
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'telephone')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'TELEPHONE_NO',<?php echo $row["ID"]; ?>,'telephone')"ondblclick="showEdit(this);"><?php echo $row["TELEPHONE_NO"]; ?></td> 
				<td onBlur="saveToDatabase(this,'AMC',<?php echo $row["ID"]; ?>,'telephone')"ondblclick="showEdit(this);"><?php echo $row["AMC"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'telephone')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_RENEWAL_AMC',<?php echo $row["ID"]; ?>,'telephone')"ondblclick="showEdit(this);"><?php echo $row["DATE_RENEWAL_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'telephone')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'telephone');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form9'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">


                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="TELEPHONE_NO" placeholder="TELEPHONE_NO" required>
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC" placeholder="AMC" >   </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="COST_OF_AMC"  placeholder="COST_OF_AMC" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                           
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" onfocus="(this.type='date');"class="form-control" name="DATE_RENEWAL_AMC" placeholder="DATE_RENEWAL_AMC" />
									
						   </div>
						 
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required/>
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==10)
{
$rs_result= mysqli_query($con,"SELECT * from television");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Television</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">TV Location</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty Period</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC Details</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
			 <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
				<td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'COST_OF_PURCHASE',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_PERIOD',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_DETAIL',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["AMC_DETAIL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'television')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'television');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form10' style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">


                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="YEAR_OF_PURCHASE" placeholder="YEAR_OF_PURCHASE" >
						      </div>
                            </div>
								<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_PURCHASE" placeholder="COST_OF_PURCHASE" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="WARRANTY_PERIOD" placeholder="WARRANTY_PERIOD" >
						      </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_DETAIL" placeholder="AMC_DETAIL" >   </div>
                            </div>
							
                           
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==11)
{
$rs_result= mysqli_query($con,"SELECT * from printers");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Printers</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Detaills</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Type of Printer</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchse</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Model</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC with</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of AMC</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of Renewal</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'PRINTER_TYPE',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["PRINTER_TYPE"]; ?></td> 
				<td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'COST',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["COST"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY"]; ?></td>
				 <td onBlur="saveToDatabase(this,'MODEL',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["MODEL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_WITH',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["AMC_WITH"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'RENEWAL_DATE',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["RENEWAL_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'printers')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#" onClick="delet(<?php echo $row["ID"]; ?>,'printers');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form11' style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">


                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="PRINTER_TYPE" placeholder="PRINTER_TYPE" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="YEAR_OF_PURCHASE" placeholder="YEAR_OF_PURCHASE" >
						      </div>
                            </div>
								<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_PURCHASE" placeholder="COST_OF_PURCHASE" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="WARRANTY" placeholder="WARRANTY" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MODEL" placeholder="MODEL" >
						      </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_WITH" placeholder="AMC_WITH" >   </div>
                            </div>
							
                           <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_AMC" placeholder="COST_OF_AMC" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text"ONFOCUS="(this.type='date')" class="form-control" name="DATE_AMC_RENEWAL" placeholder="DATE_AMC_RENEWAL" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==12)
{
$rs_result= mysqli_query($con,"SELECT * from generators");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Generators</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Serial No.</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">K Watts</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Configuration</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC with</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of AMC</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Oil Changing</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of General<br>Servicing & <br>done by</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'SERIAL_NO',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["SERIAL_NO"]; ?></td> 
				<td onBlur="saveToDatabase(this,'WATTS',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["WATTS"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'CONFIGURATION',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["CONFIGURATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_WITH',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["AMC_WITH"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'OIL_CHANGE',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["OIL_CHANGE"]; ?></td>
				 <td style="white-space:normal;" onBlur="saveToDatabase(this,'GENERAL_SERVICING',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["GENERAL_SERVICING"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'generators')" ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'generators');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form12'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">


                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="SERIAL_NO" placeholder="SERIAL_NO" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="WATTS" placeholder="WATTS" required>
						      </div>
                            </div>
								<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="CONFIGURATION" placeholder="CONFIGURATION" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="YEAR_OF_PURCHASE" placeholder="YEAR_OF_PURCHASE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_WITH" placeholder="AMC_WITH" >   </div>
                            </div>
							
                           <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_AMC" placeholder="COST_OF_AMC" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="OIL_CHANGE" placeholder="OIL_CHANGE" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="GENERAL_SERVICING" placeholder="GENERAL_SERVICING" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?>
<?php
if($_GET['name']==13)
{
$rs_result= mysqli_query($con,"SELECT * from equipment_ot");

?>
  <!-- Header -->
 <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Equipments in OT</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Equipment</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Manufacturer</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Model</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Serial No.</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Supplier/<br>Dealer</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of<br>Machine</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Inv. No. & <br>Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Installation</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">CMC<br>Yes or No</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Period</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>End Date</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC/CMC<br>Amount</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Frequency of PM</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Last Service<br>Details</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Spare Accessories<br>Replaced on</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
			 
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'EQUIPMENT',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["EQUIPMENT"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MANUFACTURER',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["MANUFACTURER"]; ?></td> 
				<td onBlur="saveToDatabase(this,'MODEL',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["MODEL"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'SERIAL_NO',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["SERIAL_NO"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SUPPLIER',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["SUPPLIER"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_OF_PURCHASE',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["DATE_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_MACHINE',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_MACHINE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'INV_NO_DATE',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["INV_NO_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'DATE_INSTALLATION',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["DATE_INSTALLATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_PERIOD',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'WARRANTY_END_DATE',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY_END_DATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'CMC',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["CMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_OR_CMC_PERIOD',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["AMC_OR_CMC_PERIOD"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_OR_CMC_ENDDATE',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["AMC_OR_CMC_ENDDATE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_OR_CMC_AMOUNT',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["AMC_OR_CMC_AMOUNT"]; ?></td>
				 <td onBlur="saveToDatabase(this,'FREQUENCY_OF_PM',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["FREQUENCY_OF_PM"]; ?></td>
				 <td onBlur="saveToDatabase(this,'LAST_SEREVICE_DETAIL',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["LAST_SEREVICE_DETAIL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'SPARE_ACCESSORIES_REPLACED_ON',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["SPARE_ACCESSORIES_REPLACED_ON"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'equipment_ot')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'equipment_ot');"  class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form13'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
<input type="text" class="form-control" name="EQUIPMENT" placeholder="EQUIPMENT_NAME" required>
                                </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MANUFACTURER" placeholder="MANUFACTURER" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MODEL" placeholder="MODEL" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="SERIAL_NO"  placeholder="SERIAL_NO" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control"  name="SUPPLIER" placeholder="SUPPLIER" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" onfocus="(this.type='date')" class="form-control" name="DATE_OF_PURCHASE" placeholder="PURCHASE_DATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="COST_OF_MACHINE" placeholder="COST_OF_MACHINE" />
									
						   </div>
						 
                            </div>
							 
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="INV_NO_DATE" placeholder="INV_NO_DATE" >   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" onfocus="(this.type='date')"class="form-control" name="DATE_INSTALLATION" placeholder="INSTALLATION_DATE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="LOCATION"  placeholder="LOCATION" required>
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                   <input type="text" class="form-control" id="WARRANTY_PERIOD" name="WARRANTY_PERIOD" placeholder="WARRANTY_PERIOD" >
							   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text"onfocus="(this.type='date')" class="form-control" name="WARRANTY_END_DATE" placeholder="WARRANTY_ENDDATE" >
						   </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC" placeholder="AMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="CMC" placeholder="CMC" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_PERIOD" placeholder="AMC/CMC PERIOD" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_ENDDATE" placeholder="AMC/CMC ENDDATE" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="AMC_CMC_AMOUNT" placeholder="AMC/CMC AMOUNT" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="FREQUENCY_OF_PM" placeholder="FREQUENCY_OF_PM" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="LAST_SERVICE_DETAIL" placeholder="LAST_SERVICE_DETAIL" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="SPARE_ACCESSORIES_REPLACED_ON" placeholder="SPARE_ACCESSORIES_REPLACED_ON" >
						   </div>
                            </div><div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
						   </div>
                            </div>
							
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 
<?php
if($_GET['name']==14)
{
$rs_result= mysqli_query($con,"SELECT * from computers");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Computers</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">No. of<br>Computers</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of<br>Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of<br>Purchase</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of<br>AMC</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Name of<br>Company(AMC)</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Date of<br>Renewal(AMC)</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
				<td onBlur="saveToDatabase(this,'NO_OF_COMPUTERS',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["NO_OF_COMPUTERS"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_PURCHASE',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_PURCHASE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_WITH',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["AMC_WITH"]; ?></td>
				 <td onBlur="saveToDatabase(this,'RENEWAL_DATE_AMC',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["RENEWAL_DATE_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'computers')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'computers');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form14'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">
 <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="LOCATION" required>   </div>
                            </div>

                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="NO_OF_COMPUTERS" placeholder="NO_OF_COMPUTERS" >
						      </div>
                            </div>
							
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="YEAR_OF_PURCHASE" placeholder="YEAR_OF_PURCHASE" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_PURCHASE" placeholder="COST_OF_PURCHASE" >
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_WITH" placeholder="AMC_WITH" >   </div>
                            </div>
							
                           <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_AMC" placeholder="COST_OF_AMC" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_RENEWAL_DATE" placeholder="AMC_RENEWAL_DATE" >
						      </div>
                            </div>
							
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required/>
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>


</div>
</div>
<?php  
};  
?>  
<?php
if($_GET['name']==15 )
{
$rs_result= mysqli_query($con,"SELECT * from motors");

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Motors</b></center></h2>
  </header>
<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">Details</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">New Entry</button>

</div>
<div id="ACCOUNT" style="overflow-x:auto;"class="w3-container city">
 <div class="w3-container" style="overflow-x:auto;border:1px solid blue;padding:9px;box-shadow: 10px 10px 5px #aaaaaa;">

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr style="background-color:#052559;color:#ffffff";>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">SN</th>
       
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Make</th>
	    
		   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Location</th>
		     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Year of Purchase</th> 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Warranty</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Model</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Configuration</th>
			 
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">AMC with</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Cost of AMC</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Maintenance</th>
			 <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">Status</th>
  <th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["ID"]; ?></td>  
            <td onBlur="saveToDatabase(this,'MAKE',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["MAKE"]; ?></td> 
			    <td onBlur="saveToDatabase(this,'LOCATION',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["LOCATION"]; ?></td> 
				<td onBlur="saveToDatabase(this,'YEAR_OF_PURCHASE',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["YEAR_OF_PURCHASE"]; ?></td> 
				 <td onBlur="saveToDatabase(this,'WARRANTY',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["WARRANTY"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["COST"]; ?></td>
				 <td onBlur="saveToDatabase(this,'MODEL',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["MODEL"]; ?></td>
				 <td onBlur="saveToDatabase(this,'CONFIGURATION',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["CONFIGURATION"]; ?></td>
				 <td onBlur="saveToDatabase(this,'AMC_WITH',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["AMC_WITH"]; ?></td>
				 <td onBlur="saveToDatabase(this,'COST_OF_AMC',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["COST_OF_AMC"]; ?></td>
				 <td onBlur="saveToDatabase(this,'MAINTENANCE',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["MAINTENANCE"]; ?></td>
				 <td onBlur="saveToDatabase(this,'STATUS',<?php echo $row["ID"]; ?>,'motors')"ondblclick="showEdit(this);"><?php echo $row["STATUS"]; ?></td>
<td><a  class="w3-button w3-indigo w3-round-large" href="">Edit</a></td>
<td><a href="#"onClick="delet(<?php echo $row["ID"]; ?>,'motors');" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
</tr>  
			
<?php  
};  
?>  
</table>
</div>
</div>
<div id="ADD" class="w3-container city" style="display:none">
<div class="w3-container" style="overflow-x:auto;box-shadow: 10px 10px 5px grey; padding:9px;">
<center><form id='form15'style="overflow-x:auto;box-shadow: 8px 8px 5px grey;color:#052559;"class="form-horizontal" method="post" action="">
 <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAKE" placeholder="MAKE" required>   </div>
                            </div>
 <div class="form-group ">
 
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="LOCATION" placeholder="Location" required>   </div>
                            </div>

                           
                           <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="YEAR_OF_PURCHASE" placeholder="YEAR_OF_PURCHASE" >
						      </div>
                            </div>
							
                           <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="WARRANTY" placeholder="WARRANTY" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST" placeholder="COST" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MODEL" placeholder="MODEL" required>
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="CONFIGURATION" placeholder="CONFIGURATION" required>
						      </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="AMC_WITH" placeholder="AMC_WITH" >   </div>
                            </div>
							
                           <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="COST_OF_AMC" placeholder="COST_OF_AMC" >
						      </div>
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="MAINTENANCE" placeholder="MAINTENANCE" >
						      </div>
                            </div>
							
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="STATUS" placeholder="STATUS" required>
									
						   </div>
						 
                            </div>
							 
                            
							 
							  <div class="form-group ">
							  <div class="input-group">
                                    
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>  </div>
</div>
                              </form><center>

</div>
</div>
<?php  
};  
?> 

</div>

    
  <script>
  $(document).ready(function(){
	  w3_open();
	  w3_open();
	  $("#form10").submit(function() {
		    var location = $("#form10 input[name='LOCATION']").val();  
        var make =$("input[name='MAKE']",'#form10').val();
        var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form10').val();
		  var costpurchase=$("input[name='COST_OF_PURCHASE']",'#form10').val();
		  var warranty=$("input[name='WARRANTY_PERIOD']",'#form10').val();
		   var amc=$("input[name='AMC_DETAIL']",'#form10').val();
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:10,location:location,make:make,yearpurchase:yearpurchase,costpurchase:costpurchase,warranty:warranty,amc:amc},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  $("#form9").submit(function() {
		    var location = $("#form9 input[name='LOCATION']").val();  
        var telephone =$("input[name='TELEPHONE_NO']",'#form9').val();
       var amc=$("input[name='AMC']",'#form9').val();
		   var costamc=$("input[name='COST_OF_AMC']",'#form9').val();
		    var daterenewalamc=$("input[name='DATE_RENEWAL_AMC']",'#form9').val();
		    var status=$("input[name='STATUS']",'#form9').val();
		 
		   console.log(amc);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:9,location:location,telephone:telephone,amc:amc,costamc:costamc,daterenewalamc:daterenewalamc,status:status},  
                success: function(){  
                    
                }  
            });
		   
	  });

	  	  $("#form8").submit(function() {
		  var make=$("input[name='MAKE']",'#form8').val();
		    var location = $("#form8 input[name='LOCATION']").val();  
        var suplier =$("input[name='SUPPLIER']",'#form8').val();
      var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form8').val();
		  var costpurchase=$("input[name='COST']",'#form8').val();
		
		    var status=$("input[name='STATUS']",'#form8').val();
		 
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:8,make:make,location:location,suplier:suplier,yearpurchase:yearpurchase,costpurchase:costpurchase},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	   $("#form7").submit(function() {
		   var floor=$("input[name='FLOOR']",'#form7').val();
		  var make=$("input[name='MAKE']",'#form7').val();
		    var location = $("#form7 input[name='LOCATION']").val();  
       
      var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form7').val();
		  var costpurchase=$("input[name='COST_OF_PURCHASE']",'#form7').val();
		  var amc=$("input[name='AMC_WITH']",'#form7').val();
		   var costamc=$("input[name='COST_OF_AMC']",'#form7').val();
		    var daterenewalamc=$("input[name='RENEWAL_AMC_DATE']",'#form7').val();
		 
		
		    var status=$("input[name='STATUS']",'#form7').val();
		 
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:7,floor:floor,make:make,location:location,yearpurchase:yearpurchase,costpurchase:costpurchase,amc:amc,costamc:costamc,daterenewalamc:daterenewalamc},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	  $("#form6").submit(function() {
		
		  var make=$("input[name='MAKE']",'#form6').val();
		    var ename= $("#form6 input[name='NAME']").val();  
        var idno=$("input[name='ID_NO']",'#form6').val();
		    var warranty=$("input[name='WARRANTY']",'#form6').val();
      var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form6').val();
		  var costpurchase=$("input[name='COST_OF_PURCHASE']",'#form6').val();
		  var amc=$("input[name='AMC']",'#form6').val();
		  
		 
		
		    //var status=$("input[name='STATUS']",'#form8').val();
		 
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:6,ename:ename,make:make,idno:idno,yearpurchase:yearpurchase,costpurchase:costpurchase,amc:amc,warranty:warranty},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	  $("#form2").submit(function() {
		var floor=$("input[name='FLOOR']",'#form2').val();
		var location = $("#form2 input[name='LOCATION']").val(); 
		  var make=$("input[name='MAKE']",'#form2').val();
		    var capacity= $("#form2 input[name='CAPACITY']").val();  
        var idno=$("input[name='ID_NO']",'#form2').val();
		    var warranty=$("input[name='WARRANTY']",'#form2').val();
      var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form2').val();
		  var costpurchase=$("input[name='COST_OF_PURCHASE']",'#form2').val();
		  var amc=$("input[name='COMPANY_AMC']",'#form2').val();
		  var costamc=$("input[name='COST_OF_AMC']",'#form2').val();
		    var daterenewalamc=$("input[name='RENEWAL_DATE_AMC']",'#form2').val();
		 var status=$("input[name='STATUS']",'#form2').val();
		 
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:2,floor:floor,location:location,capacity:capacity,make:make,idno:idno,yearpurchase:yearpurchase,costpurchase:costpurchase,amc:amc,costamc:costamc,daterenewalamc:daterenewalamc,warranty:warranty,status:status},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	  
	     $("#form11").submit(function() {
		   var printer=$("input[name='PRINTER_TYPE']",'#form11').val();
		  var model=$("input[name='MODEL']",'#form11').val();
		  var warranty=$("input[name='WARRANTY']",'#form11').val();
		    var location = $("#form11 input[name='LOCATION']").val();  
        var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form11').val();
		  var costpurchase=$("input[name='COST_OF_PURCHASE']",'#form11').val();
		  var amc=$("input[name='AMC_WITH']",'#form11').val();
		   var costamc=$("input[name='COST_OF_AMC']",'#form11').val();
		    var daterenewalamc=$("input[name='DATE_AMC_RENEWAL']",'#form11').val();
		 var status=$("input[name='STATUS']",'#form11').val();
		 
		   console.log(model);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:11,location:location,printer:printer,yearpurchase:yearpurchase,costpurchase:costpurchase,warranty:warranty,model:model,amc:amc,costamc:costamc,daterenewalamc:daterenewalamc},  
                success: function(){  
                   
                }  
            });
		   
	  });
	  
	   $("#form12").submit(function() {
		   var make=$("input[name='MAKE']",'#form12').val();
		  var serial=$("input[name='SERIAL_NO']",'#form12').val();
		  var watts=$("input[name='WATTS']",'#form12').val();
		    var configuration = $("#form12 input[name='CONFIGURATION']").val();  
        var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form12').val();
		 
		  var amc=$("input[name='AMC_WITH']",'#form12').val();
		   var costamc=$("input[name='COST_OF_AMC']",'#form12').val();
		    var oilchange=$("input[name='OIL_CHANGE']",'#form12').val();
			var general=$("input[name='GENERAL_SERVICING']",'#form12').val();
		 var status=$("input[name='STATUS']",'#form12').val();
		 
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:12,make:make,serial:serial,watts:watts,configuration:configuration,yearpurchase:yearpurchase,amc:amc,costamc:costamc,oilchange:oilchange,general:general},  
                success: function(){  
                   
                }  
            });
		   
	  });
	  $("#form14").submit(function() {
		   var number=$("input[name='NO_OF_COMPUTERS']",'#form14').val();
		  
		  var make=$("input[name='MAKE']",'#form14').val();
		    var location = $("#form14 input[name='LOCATION']").val();  
        var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form14').val();
		  var costpurchase=$("input[name='COST_OF_PURCHASE']",'#form14').val();
		  var amc=$("input[name='AMC_WITH']",'#form14').val();
		   var costamc=$("input[name='COST_OF_AMC']",'#form14').val();
		    var daterenewalamc=$("input[name='AMC_RENEWAL_DATE']",'#form14').val();
		    var status=$("input[name='STATUS']",'#form14').val();
		 
		   console.log(make);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:14,location:location,make:make,number:number,yearpurchase:yearpurchase,costpurchase:costpurchase,amc:amc,costamc:costamc,daterenewalamc:daterenewalamc,status:status},  
                success: function(){  
                   
				   
                }  
            });
		   
	  });
	    $("#form3").submit(function() {
		    var ename= $("#form3 input[name='EQUIPMENT_NAME']").val();
var make= $("#form3 input[name='MANUFACTURER']").val();			
        var model =$("input[name='MODEL']",'#form3').val();
		var sno=$("input[name='SERIAL_NO']",'#form3').val();
		var suplier =$("input[name='SUPPLIER']",'#form3').val();
		var inv=$("input[name='INV_NO_DATE']",'#form3').val();
		var install=$("input[name='INSTALLATION_DATE']",'#form3').val();
		var location=$("input[name='LOCATION']",'#form3').val();
		var warrantyp=$("input[name='WARRANTY_PERIOD']",'#form3').val();
		var warrantyend=$("input[name='WARRANTY_ENDDATE']",'#form3').val();
		var amc=$("input[name='AMC']",'#form3').val();
		var cmc=$("input[name='CMC']",'#form3').val();
		var  amcperiod=$("input[name='AMC_CMC_PERIOD']",'#form3').val();
		 var amcend=$("input[name='AMC_CMC_ENDDATE']",'#form3').val();
		 var amcamount=$("input[name='AMC_CMC_AMOUNT']",'#form3').val();
		  var frequency=$("input[name='FREQUENCY_OF_PM']",'#form3').val();
		
       var lastservice=$("input[name='LAST_SERVICE_DETAIL']",'#form3').val();
		   var spare=$("input[name='SPARE_ACCESSORIES_REPLACED_ON']",'#form3').val();
		    var yearpurchase =$("input[name='PURCHASE_DATE']",'#form3').val();
			var cost=$("input[name='COST_OF_MACHINE']",'#form3').val();
		    var status=$("input[name='STATUS']",'#form3').val();
		 
		   console.log(amc);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:3,ename:ename,make:make,model:model,sno:sno,suplier:suplier,inv:inv,install:install,location:location,warrantyp:warrantyp,
				yearpurchase:yearpurchase,cost:cost,warrantyend:warrantyend,amc:amc,cmc:cmc,amcperiod:amcperiod,amcend:amcend,amcamount:amcamount,
				frequency:frequency,lastservice:lastservice,spare:spare,yearpurchase:yearpurchase,cost:cost,status:status},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	   $("#form5").submit(function() {
		    var ename= $("#form5 input[name='EQUIPMENT']").val();
var make= $("#form5 input[name='MANUFACTURER']").val();			
        var model =$("input[name='MODEL']",'#form5').val();
		var sno=$("input[name='SERIAL_NO']",'#form5').val();
		var suplier =$("input[name='SUPPLIER']",'#form5').val();
		var inv=$("input[name='INV_NO_DATE']",'#form5').val();
		var install=$("input[name='DATE_INSTALLATION']",'#form5').val();
		var location=$("input[name='LOCATION']",'#form5').val();
		var warrantyp=$("input[name='WARRANTY_PERIOD']",'#form5').val();
		var warrantyend=$("input[name='WARRANTY_END_DATE']",'#form5').val();
		var amc=$("input[name='AMC']",'#form5').val();
		var cmc=$("input[name='CMC']",'#form5').val();
		var  amcperiod=$("input[name='AMC_CMC_PERIOD']",'#form5').val();
		 var amcend=$("input[name='AMC_CMC_ENDDATE']",'#form5').val();
		 var amcamount=$("input[name='AMC_CMC_AMOUNT']",'#form5').val();
		  var frequency=$("input[name='FREQUENCY_OF_PM']",'#form5').val();
		
       var lastservice=$("input[name='LAST_SERVICE_DETAIL']",'#form5').val();
		   var spare=$("input[name='SPARE_ACCESSORIES_REPLACED_ON']",'#form5').val();
		    var yearpurchase =$("input[name='DATE_OF_PURCHASE']",'#form5').val();
			var cost=$("input[name='COST_OF_MACHINE']",'#form5').val();
		    var status=$("input[name='STATUS']",'#form5').val();
		 
		   console.log(amc);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:5,ename:ename,make:make,model:model,sno:sno,suplier:suplier,inv:inv,install:install,location:location,warrantyp:warrantyp,
				yearpurchase:yearpurchase,cost:cost,warrantyend:warrantyend,amc:amc,cmc:cmc,amcperiod:amcperiod,amcend:amcend,amcamount:amcamount,
				frequency:frequency,lastservice:lastservice,spare:spare,yearpurchase:yearpurchase,cost:cost,status:status},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	  $("#form4").submit(function() {
		    var ename= $("#form4 input[name='EQUIPMENT_NAME']").val();
var make= $("#form4 input[name='MANUFACTURER']").val();			
        var model =$("input[name='MODEL']",'#form4').val();
		var sno=$("input[name='SERIAL_NO']",'#form4').val();
		var suplier =$("input[name='SUPPLIER']",'#form4').val();
		var inv=$("input[name='INV_NO_DATE']",'#form4').val();
		var install=$("input[name='INSTALLATION_DATE']",'#form4').val();
		var location=$("input[name='LOCATION']",'#form4').val();
		var warrantyp=$("input[name='WARRANTY_PERIOD']",'#form4').val();
		var warrantyend=$("input[name='WARRANTY_ENDDATE']",'#form4').val();
		var amc=$("input[name='AMC']",'#form4').val();
		var cmc=$("input[name='CMC']",'#form4').val();
		var  amcperiod=$("input[name='AMC_CMC_PERIOD']",'#form4').val();
		 var amcend=$("input[name='AMC_CMC_ENDDATE']",'#form4').val();
		 var amcamount=$("input[name='AMC_CMC_AMOUNT']",'#form4').val();
		  var frequency=$("input[name='FREQUENCY_OF_PM']",'#form4').val();
		
       var lastservice=$("input[name='LAST_SERVICE_DATE']",'#form4').val();
		   var spare=$("input[name='SPARE_ACCESSORIES_REPLACED_ON']",'#form4').val();
		    var yearpurchase =$("input[name='PURCHASE_DATE']",'#form4').val();
			var cost=$("input[name='COST_OF_MACHINE']",'#form4').val();
		    var status=$("input[name='STATUS']",'#form4').val();
		 
		   console.log(amc);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:4,ename:ename,make:make,model:model,sno:sno,suplier:suplier,inv:inv,install:install,location:location,warrantyp:warrantyp,
				yearpurchase:yearpurchase,cost:cost,warrantyend:warrantyend,amc:amc,cmc:cmc,amcperiod:amcperiod,amcend:amcend,amcamount:amcamount,
				frequency:frequency,lastservice:lastservice,spare:spare,yearpurchase:yearpurchase,cost:cost,status:status},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	    $("#form13").submit(function() {
		    var ename= $("#form13 input[name='EQUIPMENT']").val();
var make= $("#form13 input[name='MANUFACTURER']").val();			
        var model =$("input[name='MODEL']",'#form13').val();
		var sno=$("input[name='SERIAL_NO']",'#form13').val();
		var suplier =$("input[name='SUPPLIER']",'#form13').val();
		var inv=$("input[name='INV_NO_DATE']",'#form13').val();
		var install=$("input[name='DATE_INSTALLATION']",'#form13').val();
		var location=$("input[name='LOCATION']",'#form13').val();
		var warrantyp=$("input[name='WARRANTY_PERIOD']",'#form13').val();
		var warrantyend=$("input[name='WARRANTY_END_DATE']",'#form13').val();
		var amc=$("input[name='AMC']",'#form13').val();
		var cmc=$("input[name='CMC']",'#form13').val();
		var  amcperiod=$("input[name='AMC_CMC_PERIOD']",'#form13').val();
		 var amcend=$("input[name='AMC_CMC_ENDDATE']",'#form13').val();
		 var amcamount=$("input[name='AMC_CMC_AMOUNT']",'#form13').val();
		  var frequency=$("input[name='FREQUENCY_OF_PM']",'#form13').val();
		
       var lastservice=$("input[name='LAST_SERVICE_DETAIL']",'#form13').val();
		   var spare=$("input[name='SPARE_ACCESSORIES_REPLACED_ON']",'#form13').val();
		    var yearpurchase =$("input[name='DATE_OF_PURCHASE']",'#form13').val();
			var cost=$("input[name='COST_OF_MACHINE']",'#form13').val();
		    var status=$("input[name='STATUS']",'#form13').val();
		 
		   console.log(amc);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:13,ename:ename,make:make,model:model,sno:sno,suplier:suplier,inv:inv,install:install,location:location,warrantyp:warrantyp,
				yearpurchase:yearpurchase,cost:cost,warrantyend:warrantyend,amc:amc,cmc:cmc,amcperiod:amcperiod,amcend:amcend,amcamount:amcamount,
				frequency:frequency,lastservice:lastservice,spare:spare,yearpurchase:yearpurchase,cost:cost,status:status},  
                success: function(){  
                    
                }  
            });
		   
	  });
	  
	  
	  
	  
	    $("#form15").submit(function() {
		    var location = $("#form15 input[name='LOCATION']").val();
var make= $("#form15 input[name='MAKE']").val();			
        var model =$("input[name='MODEL']",'#form15').val();
		var configuration =$("input[name='CONFIGURATION']",'#form15').val();
		var maintain =$("input[name='MAINTENANCE']",'#form15').val();
		var warranty =$("input[name='WARRANTY']",'#form15').val();
		 var yearpurchase=$("input[name='YEAR_OF_PURCHASE']",'#form15').val();
		  var costpurchase=$("input[name='COST']",'#form15').val();
		
       var amc=$("input[name='AMC_WITH']",'#form15').val();
		   var costamc=$("input[name='COST_OF_AMC']",'#form15').val();
		    
		    var status=$("input[name='STATUS']",'#form15').val();
		 
		   console.log(amc);
		    $.ajax({  
                type: "POST",  
                url: "action2.php",  
                data: {formid:15,make:make,location:location,yearpurchase:yearpurchase,warranty:warranty,costpurchase:costpurchase,model:model,configuration:configuration,amc:amc,costamc:costamc,maintain:maintain},  
                success: function(){  
                    
                }  
            });
		   
	  });
  });
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}

function showEdit(editableObj) {
            $(editableObj).css("background","#FFF");
				editableObj.contentEditable = "true";
        } 
</script>
<script>
function saveToDatabase(editableObj,column,id,formid) {
	$(editableObj).css("background","#FFF url(tenor.gif) no-repeat right");
		   var vl=$(editableObj).html();
		   console.log(vl);
	$.ajax({
		url: "delete.php",
		type: "POST",
		data:{column:column,editval:vl,id:id,formid:formid,type:1},
		
		
		success: function(data){
			  $(editableObj).css("background","#F3F3FD");
			editableObj.contentEditable = "false";
		
		}        
   });	
}

function delet(id,formid) {
	console.log(id);
	$.ajax({
		url: "delete.php",
		type: "POST",
		data:{id:id,formid:formid,type:2},
		success: function(data){
			$(editableObj.next()).css("background","#FFF url(tenor.gif) no-repeat right");
		}        
   });	
}


</script>
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>
  