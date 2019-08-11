<?PHP
include "db.php";
include "HEADER.PHP";

 
if(isset($_POST['id']))
{
	$sql = "DELETE FROM vehicle WHERE ID=".$_POST["id"];
if (mysqli_query($con, $sql)) {
    echo " record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
//$sql = "SELECT * FROM transaction ORDER BY id ASC LIMIT $start_from, $limit";  
//$rs_result = mysqli_query($con, $sql);  


$rs_result= mysqli_query($con,"SELECT * from vehicle");



?>
<!-- !PAGE CONTENT! -->

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

<?php
if(isset($_POST['submit']))
{
$n1=$_POST['1'];
$n2=$_POST['2'];
$n3=$_POST['3'];
$n4=$_POST['4'];
$n5=$_POST['5'];
$n6=$_POST['6'];
$n7=$_POST['7'];
$n8=$_POST['8'];


$query=mysqli_query($con,"insert into vehicle(veh_name,company,dateofservice,mileageatservice,workperformed,performedby,cost,notes) values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8')");
	if($query)
	{
		echo "<script>alert(' successfully ');</script>";
	}
	else {echo "<script>alert(' unsuccessfully ');</script>";}
	

}
?>
<div class="w3-main" id="main" style="margin-left:260px;margin-top:43px;">

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

                        <td><a href="#" onClick="delet(<?php echo $row["id"]; ?>);" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
     			
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
                                    <input type="text" class="form-control" name="1" placeholder="Name" required>   </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="text" class="form-control" name="2" placeholder="Company" required>
						      </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <input type="Date" class="form-control" name="3" placeholder="Date of service" >   </div>
                            </div>
							
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                  <input type="text" class="form-control" name="4"  placeholder="Mil at service" >
								       <span id="user-availability-status1" style="font-size:12px;"></span> </div>
                            </div>
                           
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="5" placeholder="Work performed" />
									
						   </div>
						 
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="6" placeholder="performed by" required/>
									
						   </div>
						 
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="7" placeholder="cost" required/>
									
						   </div>
						 
                            </div>
							<div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                  	<input type="text" class="form-control" name="8" placeholder="Notes" required/>
									
						   </div>
						 
                            </div>
							 
                            
							 
							 <div class="input-group">
                                    <div class="col-sm-6">
									<input style="background-color:#052559;color:#ffffff"type="submit" name="submit" value="submit" class="btn btn-success btn-custom">
                      </div>        <div class="col-sm-6">
									<input style="background-color:#052559;color:#ffffff"type="reset" name="submit" value="Reset" class="btn btn-success btn-custom">
                      </div>  </div>

                              </form><center>

</div>
</div>
</div>
<script>
function delet(id) {
	console.log(id);
	$.ajax({
		url: "vehicle.php",
		type: "POST",
		data:{id:id},
		success: function(data){
			
		}        
   });	
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
  
  
  
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>