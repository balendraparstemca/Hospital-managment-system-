<?PHP
include "db.php";
include "HEADER.PHP";
function integerToRoman($integer)
{
 // Convert the integer into an integer (just to make sure)
 $integer = intval($integer);
 $result = '';
 
 // Create a lookup array that contains all of the Roman numerals.
 $lookup = array('M' => 1000,
 'CM' => 900,
 'D' => 500,
 'CD' => 400,
 'C' => 100,
 'XC' => 90,
 'L' => 50,
 'XL' => 40,
 'X' => 10,
 'IX' => 9,
 'V' => 5,
 'IV' => 4,
 'I' => 1);
 
 foreach($lookup as $roman => $value){
  // Determine the number of matches
  $matches = intval($integer/$value);
 
  // Add the same number of characters to the string
  $result .= str_repeat($roman,$matches);
 
  // Set the integer to be the remainder of the integer and the value
  $integer = $integer % $value;
 }
 
 // The Roman numeral should be built, return it
 return $result;
}
///////



  if(isset($_REQUEST['group']))
  { 


 
 $groupv=$_REQUEST['group'];
  $leve=$_REQUEST['g_type'];
  $datev=$_REQUEST['year'];
$datef='01';
$monthf='04';
$datet='31';
$montht='03';
$yeart=$datev+1;
$fromdate=date("Y/m/d", mktime(0, 0, 0,(int)$monthf,(int)$datef,(int)$datev));
$todate=date("Y/m/d", mktime(0, 0, 0,(int)$montht,(int)$datet,(int)$yeart));


 if($leve==1)
 {
 $rs_result= mysqli_query($con,"SELECT * from groupnew where GROUPA='Incomes'");

	  
 }  
else if($leve==2)
{
	$rs_result= mysqli_query($con,"SELECT * from groupnew where GROUPA='Expenses'");


}	
   
	
}
	
 
  else
 {
	  
	  echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        exit();
	
	  
 }
 
?>
<!-- !PAGE CONTENT! -->




<div class="w3-main" id="main">

  <!-- Header -->

    <h3 style="padding-top:18px;"><center> <?php echo $groupv;?><?php echo $datev."-".date('y', strtotime('+1 year',strtotime($datev)));?><button style="background-color:#052559;color:#ffffff;float:right;margin-right:2px;"onclick="goBack()" type="submit" class="btn btn-default">Go Back
		   </button></center></h3>


<div style="overflow-x:auto;"class="w3-container" style="border:1px solid blue;padding-top:5px;">


<table style="font-family: 'Verdana', Sans-serif;margin-top:0px;margin-left:0px;width:200px;" id="table1" class="w3-table-all w3-hoverable w3-twothird">
  <tr class="w3-small"style="background-color:#052559;color:#ffffff">
  <th>S.no</th>
  <th>Expenses</th>
 	    <th>Grand Total As On Date</br>
 </th>
		  
	
	
  </tr>

  <?php 
  $i=0;
  while($row = mysqli_fetch_assoc($rs_result)) 
  {
	  $i=$i+1; $datt=$row['NAME'];
	  $level=2;
   ?>
   <tr style="font-size:small;color:black;bottom;">
 <td  id="<?php echo $datt;?>"onclick="myFunctionn(<?php echo preg_replace('/[^a-zA-Z]/','',$datt).'1';?>)"><center><?php echo integerToRoman($i); ?></center>
 </td>
 <td  style="color:blue;padding-bottom:0px;"><?php echo $datt; ?>
 <br/><div style="float:left;padding-left:20px;"id="<?php echo preg_replace('/[^a-zA-Z]/','',$datt).'1';?>" class="w3-hide">
  <table id="tb2"style="white-space: nowrap;"></table>
  </div>
 </td>
 

 

 <?php 
 $rs_result4= mysqli_query($con,"SELECT NAME from groupnew where GROUPA='$datt'");
$totalamount1=0;


while ($row = mysqli_fetch_assoc($rs_result4)) 
{
	$td3=0;
	$dat=$row['NAME'];?>
<?php $rs_result3= mysqli_query($con,"SELECT AMOUNTDR,AMOUNTCR from transaction where AC_NAME='$dat' AND STR_TO_DATE(VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate'");
     while ($row = mysqli_fetch_assoc($rs_result3)) 
	 {
	 if($row>0)
	 {
		 if($leve==1)
		 {
			 $td3+=$row['AMOUNTCR']-$row['AMOUNTDR'];
		 }
		 else{
		 $td3+=$row['AMOUNTDR']-$row['AMOUNTCR'];}
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

    <td style="vertical-align:bottom;"><span id="m" style="display:block"><?php echo 'Rs. '. number_format($totalamount1, 2, '.', ',');?></span></td>
   
 
  
 </tr>
<?php  
	 }
 ?>
  
  
  

  </TABLE>

</div>
</div>



</div>

<script>

$("#table1").delegate("td","click",function(event){
	event.preventDefault();
		
		var cid = $(this).attr('id');
		var kid='#'+$(this).next().children().next().attr('id');
				$(this).next().next().children().toggle();
		console.log(kid);
			$.ajax({
			url		:	"action1.php",
			method	:	"POST",
			data	:	{ledger:cid,gtyp:<?php echo $leve?>,year:<?php echo $datev?>},
			success	:	function(data){
				$(kid).html(data).on("click","td",function(event){
	 w3_open();
	 w3_open();
		event.preventDefault();
		var jid = $(this).attr('id');
		var pid=$(this).children().next().attr('id');
	$(this).children().toggle();
		console.log(pid);
		$.ajax({
			url		:	"action1.php",
			method	:	"POST",
			data	:	{name:jid,level:3,gtyp:<?php echo $leve?>,year:<?php echo $datev?>},
			success	:	function(data){
				$('#'+pid).html(data).on("click","a",function(event){
	
		event.preventDefault();
		var cid = $(this).attr('href');
		$(location).attr('href',cid);
		
	
	});
				
			}
		})
	
	});
				
			}
		})
	
	})

</script>


<script>

function myFunctionn(x)
 {
  
    
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
function myFunction2(x)
 {
   
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
  
}
function locate(y)
{
	var b=document.getElementById(y).href;
	window.location.href=b;
}
</script>

  
  <!-- Footer -->
  <?php
  include "FOOTER.PHP"
  ?>