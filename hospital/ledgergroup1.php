 <?PHP
include "db.php";

$datev=date("Y");
$fromdate=date('Y/04/01');
$todate=date('Y/03/31', strtotime('+1 year',strtotime($datev)));
?>
<?php 
 $rs_result= mysqli_query($con,"SELECT * from groupnew where GROUPA='Incomes'");
?>
  <?php 
  $i=0;
  $totalamount1=0;
  while($row = mysqli_fetch_assoc($rs_result)) 
  { 
$i=$i+1; $datt=$row['NAME'];
   ?>
<?php 
 $rs_result4= mysqli_query($con,"SELECT NAME from groupnew where GROUPA='$datt'");


while ($row = mysqli_fetch_assoc($rs_result4)) 
{
	$td3=0;
	$dat=$row['NAME'];?>
<?php $rs_result3= mysqli_query($con,"SELECT AMOUNTDR,AMOUNTCR from transaction  where AC_NAME='$dat' AND STR_TO_DATE(VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate'");
     while ($row = mysqli_fetch_assoc($rs_result3)) 
	 {
	 if($row>0)
	 {
		$td3+=$row['AMOUNTCR']-$row['AMOUNTDR'];
	 }
	 else
	 {
		 $td3='0.00';
	 }
       
	 }	   ?>	
		
		<?php 
		$totalamount1+=$td3;?>
	
     
			
<?php  
} 
?>
 
<?php  
	 }
 ?>
 
 <?php/*--------------------------income*/?>
 
 
 
 <?php 
 $rs_result= mysqli_query($con,"SELECT * from groupnew where GROUPA='Expenses'");
?>
    
 <?php 
  $i=0;
  $totalamount2=0;

  while($row = mysqli_fetch_assoc($rs_result)) 
  { 
$i=$i+1; $datt=$row['NAME'];
   ?>
<?php 
 $rs_result4= mysqli_query($con,"SELECT NAME from groupnew where GROUPA='$datt'");


while ($row = mysqli_fetch_assoc($rs_result4)) 
{
	$td3=0;
	$dat=$row['NAME'];?>
<?php $rs_result3= mysqli_query($con,"SELECT AMOUNTDR,AMOUNTCR from transaction where AC_NAME='$dat' AND STR_TO_DATE(VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate'");
     while ($row = mysqli_fetch_assoc($rs_result3)) 
	 {
	 if($row>0)
	 {
		$td3+=$row['AMOUNTDR']-$row['AMOUNTCR'];
	 }
	 else
	 {
		 $td3='0.00';
	 }
       
	 }	   ?>	
		
		<?php 
		$totalamount2+=$td3;?>
		
		
		
     
			
<?php  
} 
?>
 
<?php  
	 }
 ?>
 
 
 <?php 
 $level=1;
 ?>


  <!-- Header -->
  <header class="w3-container" style="padding-top:0px">
    <h2><center><b><i class="fa fa-dashboard"></i>Hospital Expenditure  </b><?php echo $datev."-".date('y', strtotime('+1 year',strtotime($datev)));?></center></h2><span><button style="background-color:#052559;color:#ffffff;float:right;margin-right:5px;"onclick="goBack()" type="submit" class="btn btn-default">Go Back
		   </button></span>
  </header>
 
<div style="overflow-x:auto;"class="w3-container"style="margin-top:10px;">
      

<table style="overflow-x:auto;font-family: 'Verdana', Sans-serif;margin-top:40px;font-size:small;color:black" id="table1" class="w3-table-all w3-hoverable w3-third">
  <tr style="background-color:#052559;color:#ffffff">
  <th><center>S.no</center></th>
  <th>NAME</th>
  <th>Total As on</th>

 </tr>
  <tr>
  <td style='vertical-align:bottom;'><center>1</center></td>
 <th><a href="expenditure1.php?group=Incomes & g_type=1 & year=<?php echo $datev;?>">Income</a></th>
  
  
     
	 
  <td  class='1' style='white-space: nowrap; vertical-align:bottom;'id="Income" onclick="myFunctionn(incomed)" width="10%" ><span><?php echo 'Rs. '.number_format($totalamount1,2);?></span>
    <div id="incomed" class="w3-hide w3-white w3-card">
  
  </div>
 </td>
 </tr>
 <tr>
  <td style='vertical-align:bottom;'><center>2</center></td>
   <th><a href="expenditure1.php?group=Expenses & g_type=2 & year=<?php echo $datev;?>">Expenses</a></th>
 <td class='2' style='white-space: nowrap; vertical-align:bottom;'id="Expenses" onclick="myFunctionn(expensed)"><span><?php echo  'Rs. '.number_format($totalamount2, 2);?></span>
<div id="expensed" class="w3-hide w3-white w3-card">
  
  </div>

   </td>
   </tr>
   <tr>
   <td></td><th>Total</th>
   <th> <?php echo 'Rs. '.number_format(($totalamount1)-($totalamount2),2);?></th>
  </tr>
   
 
</table>

</div>
			
<script type="text/javascript">

$("#table1").delegate("td","click",function(event){
	
		
		var cid = $(this).attr('id');
		var gt = $(this).attr('class');
		
		var kid='#'+$(this).children().next().attr('id');
		$('#'+cid).children().toggle();
		
		w3_open();
		w3_open();
			$.ajax({
			url		:	"action1.php",
			method	:	"POST",
			data	:	{gname:cid,level:1,g_type:gt,year:<?php echo $datev?>},
			success	:	function(data){
				$(kid).html(data);
				
			}
		})
	
	})

</script>
<script>
function myFunctionn(x) {
   
    
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

	
 
  
