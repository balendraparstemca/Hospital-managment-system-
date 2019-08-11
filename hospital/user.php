<?PHP
include "db.php";
include "HEADER.PHP";


$rs_result= mysqli_query($con,"SELECT * from users");

$rs_result1= mysqli_query($con,"SELECT * from userlog");

?>
<!-- !PAGE CONTENT! -->




<div class="w3-main" id="main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:5px">
    <h2><center><b><i class="fa fa-dashboard"></i> Users</b></center></h2>
  </header>

<div  style="margin-right:10px;margin-left:10px;background-color:#052559;color:#ffffff; box-shadow: 10px 10px 5px #aaaaaa;">
  <button class="w3-bar-item w3-button" onclick="openCity('ACCOUNT')">User</button>
  <button class="w3-bar-item w3-button" onclick="openCity('ADD')">User log</button>

</div>

<div id="ACCOUNT" class="w3-container city">
 <div class="w3-container" style="border:1px solid blue;padding:9px;">
<p><input id="myInput" class="form-control" oninput="w3.filterHTML('#table1', '.item', this.value)" class="w3-input" placeholder="Search for names..">
</p>
<table id="table1" class="w3-table-all w3-hoverable">
  <tr style="background-color:#052559;color:#ffffff;">
     <th onclick="w3.sortHTML('#table1', '.item', 'td:nth-child(1)')" style="cursor:pointer">ID</th>
       
	   <th onclick="w3.sortHTML('#table1', '.item', 'td:nth-child(1)')" style="cursor:pointer">Name</th>
	    
		   <th onclick="w3.sortHTML('#table1', '.item', 'td:nth-child(1)')" style="cursor:pointer">Email</th>
		     <th onclick="w3.sortHTML('#table1', '.item', 'td:nth-child(1)')" style="cursor:pointer">Registered Date</th> 
			 <th onclick="w3.sortHTML('#table1', '.item', 'td:nth-child(1)')" style="cursor:pointer">AC_TYPE</th>
    
	
	<th>Edit</th>
     <th>Delete</th>
  </tr>
  
 <?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr class="item">  
            <td><?php echo $row["id"]; ?></td>  
            <td><?php echo $row["fullName"]; ?></td> 
			    <td><?php echo $row["email"]; ?></td> 
				<td><?php echo $row["regDate"]; ?></td> 
				 <td><?php echo $row["ac_type"]; ?></td>
			 
			   
			
			
 <td><a  class="w3-button w3-indigo w3-round-large" href="{site_url()}admin/editFront/2">Edit</a></td>

                        <td><a href="#" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
     			
            </tr>  
			
<?php  
};  
?>  
 
</table>



</div>
</div>


<div id="ADD" class="w3-container city" style="display:none">
 <div class="w3-container" style="border:1px solid blue;padding:9px;">
<p><input id="myInput" class="form-control" oninput="w3.filterHTML('#id01', '.item', this.value)" class="w3-input" placeholder="Search for names..">
</p>
<table id="table1" class="w3-table-all w3-hoverable">
  <tr style="background-color:#052559;color:#ffffff;">
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">id</th>
     <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">username</th>
    <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">login time</th>
	   <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">logout time</th>
	      <th onclick="w3.sortHTML('#id01', '.item', 'td:nth-child(1)')" style="cursor:pointer">status</th>
	<th>Edit</th>
        <th>Delete</th>
  </tr>
  <?php  
while ($row = mysqli_fetch_assoc($rs_result1)) {
?>  
            <tr class="item">  
            <td><?php echo $row["id"]; ?></td>  
            <td><?php echo $row["username"]; ?></td> 
			    <td><?php echo $row["loginTime"]; ?></td> 
				<td><?php echo $row["logout"]; ?></td> 
				 <td><?php echo $row["status"]; ?></td>
			 
			   
			
			
 <td><a  class="w3-button w3-indigo w3-round-large" href="{site_url()}admin/editFront/2">Edit</a></td>

                        <td><a href="#" class="w3-button w3-indigo w3-round-large" role="button" data-title="kitty" data-id="2">Delete</a></td>
     			
            </tr>  
			
<?php  
};  
?>  
</tr></table>

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




  
  
  
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>