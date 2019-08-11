 <?PHP
include "db.php";
include "HEADER.PHP";
$datev=date("Y");
$fromdate=date('Y/04/01');
$todate=date('Y/03/31', strtotime('+1 year',strtotime($datev)));
?>
<?php
//1
$sql = "SELECT * FROM ac_machine";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status1']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status1']="";
}

//2
$sql = "SELECT * FROM equipment_labour_room";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status2']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status2']="";
}

//3
$sql = "SELECT * FROM  equipment_icu";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status3']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status3']="";
}

//4
$sql = "SELECT * FROM  equipment_pow";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status4']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status4']="";
}

//5
$sql = "SELECT * FROM  phyjiotherepy_instrument";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status5']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status5']="";
}

//6
$sql = "SELECT * FROM  cctv_camera";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status6']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status6']="";
}


//7
$sql = "SELECT * FROM  xerox_machine";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status7']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status7']="";
}

//8
$sql = "SELECT * FROM  telephone";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status8']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status8']="";
}

//9
$sql = "SELECT * FROM  television";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status9']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status9']="";
}

//10
$sql = "SELECT * FROM  printers";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status10']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status10']="";
}

//11
$sql = "SELECT * FROM  generators";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status11']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status11']="";
}

//12
$sql = "SELECT * FROM  equipment_ot";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status12']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status12']="";
}


//13
$sql = "SELECT * FROM  computers";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status13']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status13']="";
}

//14
$sql = "SELECT * FROM  motors";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if(strcmp($row['STATUS'],"Working")!=0)
{
	 $GLOBALS['status14']="<img src='images/alert1.gif' width='20px' height='20px'/>";
}
	
else
{
	$GLOBALS['status14']="";
}
?>




  <!-- Header -->
  <div class="w3-main" id="main">

  <!-- Header -->

  <header class="w3-container">
    <h2><center><b><i class="fa fa-dashboard"></i>Assets</b></center></h2><span><button style="background-color:#052559;color:#ffffff;float:right;margin-top:-40px;margin-right:5px;"onclick="goBack()" type="submit" class="btn btn-default">Go Back
		   </button></span>
  </header>
 
<div style="overflow-x:auto;"class="w3-container"style="margin-top:10px;">
      

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;margin-top:10px;font-size:small;color:black" id="table1" class="w3-table-all w3-hoverable w3-third">
  <tr style="background-color:#052559;color:#ffffff">
  <th>S.no</th>
  <th>NAME</th>
  <th></th>
</tr>
  <tr> <td id='1' style='vertical-align:bottom;'><center>1</center></td><td>General Surgery Instrument</td><td></td></tr>
 <tr><td onclick='asse(this);' id='2' style='vertical-align:bottom;'><center>2</center></td> <td>A/C Machines</td><td><?php echo $status1;?></td></tr>
 
 <tr>  <td onclick='asse(this);' id='3' style='vertical-align:bottom;'><center>3</center></td><td>Equipment In Labour Room</td><td><?php echo $status2;?></td></tr>
   <tr>  <td onclick='asse(this);' id='4' style='vertical-align:bottom;'><center>4</center></td><td>Equipment In ICU</td><td><?php echo $status3;?></td></tr>
    <tr>  <td onclick='asse(this);' id='5' style='vertical-align:bottom;'><center>5</center></td><td>Equipment In POW</td><td><?php echo $status4;?></td></tr>
	 <tr>  <td onclick='asse(this);' id='6' style='vertical-align:bottom;'><center>6</center></td><td>Physiotherapy Department Instrument</td><td><?php echo $status5;?></td></tr>
	  <tr>  <td onclick='asse(this);' id='7' style='vertical-align:bottom;'><center>7</center></td><td>CC TV Camera</td><td><?php echo $status6;?></td></tr>
	   <tr>  <td onclick='asse(this);' id='8' style='vertical-align:bottom;'><center>8</center></td><td>Xerox Machines</td><td><?php echo $status7;?></td></tr>
	    <tr>  <td onclick='asse(this);' id='9' style='vertical-align:bottom;'><center>9</center></td><td>Telephones</td><td><?php echo $status8;?></td></tr>
		 <tr>  <td onclick='asse(this);' id='10' style='vertical-align:bottom;'><center>10</center></td><td>Television</td><td><?php echo $status9;?></td></tr>
		  <tr>  <td onclick='asse(this);' id='11' style='vertical-align:bottom;'><center>11</center></td><td>Printers</td><td><?php echo $status10;?></td></tr>
		   <tr>  <td onclick='asse(this);' id='12' style='vertical-align:bottom;'><center>12</center></td><td>Generators</td><td><?php echo $status11;?></td></tr>
		    <tr>  <td onclick='asse(this);' id='13' style='vertical-align:bottom;'><center>13</center></td><td>Equipment In OT</td><td><?php echo $status12;?></td></tr>
			 <tr>  <td onclick='asse(this);' id='14' style='vertical-align:bottom;'><center>14</center></td><td>Computers</td><td><?php echo $status13;?></td></tr>
			  <tr>  <td onclick='asse(this);' id='15' style='vertical-align:bottom;'><center>15</center></td><td>Motors</td><td><?php echo $status14;?></td></tr>
			
		  
   
 
</table>

</div>
</div>
	 <?php
  include "FOOTER.PHP"
  ?>		

<script>
$("#table1").delegate("td","click",function(event){
	
		
		var cid = $(this).attr('id');
		 if (cid!= undefined && cid != null) {
		window.location = 'asset_detail.php?name='+ cid;
		 }
	
	});

</script>
	
 
  
