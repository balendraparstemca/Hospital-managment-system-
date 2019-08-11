<?PHP
include "db.php";
include "HEADER.PHP";
$datev=$_REQUEST["year"];
$fromdate=date('Y/04/01');
$todate=date('Y/03/31', strtotime('+1 year',strtotime($datev)));
$monthk = $_REQUEST['datek'];
$dat = $_REQUEST['name'];
$sql1="select AC_NAME AS NAMEA,AMOUNTCR-AMOUNTCR AS TOTAL,VOCH_DT,
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '1' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '1',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '2' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '2',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '3' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '3',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '4' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '4',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '5' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '5',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '6' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '6',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '7' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '7',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '8' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '8',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '9' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '9',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '10' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '10',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '11' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '11',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '12' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '12',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '13' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '13',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '14' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '14',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '15' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '15',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '16' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '16',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '17' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '17',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '18' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '18',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '19' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '19',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '20' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '20',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '21' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '21',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '22' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '22',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '23' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '23',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '24' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '24',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '25' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '25',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '26' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '26',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '27' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '27',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '28' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '28',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '29' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '29',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '30' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '30',
SUM(CASE DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '31' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS '31'

from transaction where STR_TO_DATE(VOCH_DT, '%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate' AND AC_NAME='$dat' and MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y'))='$monthk'";
	
$rs_result1= mysqli_query($con,$sql1);




  
?>
<div  class="w3-main" id="main" style="margin-left:0px;margin-top:23px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:20px">
    <h1><center><b><?php echo $dat;?></b></h1></center>
	<span style="float:right;"><button onclick="goBack();" type="submit" class="btn btn-default">Go Back
		   </button></span>
  </header>

   
 <div style="overflow-x:auto;"class="w3-container" style="border:1px solid blue;padding:5px;">
 		  
 	
 <table style="overflow-y:auto;font-family: 'Verdana', Sans-serif;" id="table1" class="w3-table-all w3-hoverable w3-small">
  <tr>
  <th class="w3-blue">NAME</th>
  <?php
  $d=cal_days_in_month(CAL_GREGORIAN, (int)$monthk,(int)$datev);
   for ($x1 = 1; $x1 <= $d; $x1++)
		   {
			    echo "<th>$x1</th>";
 
		   }
?>
  <th>TOTAL AS ON</th>
</tr>

<?php
    
  
	  $t1=0;$t2=0;$t3=0;$t4=0;$t5=0;$t6=0;$t7=0;$t8=0;$t9=0;$t10=0;$t11=0;$t12=0;$t13=0;$t14=0;
	  $t15=0;$t16=0;$t17=0;$t18=0;$t19=0;$t20=0;$t21=0;$t22=0;$t23=0;$t24=0;$t25=0;$t26=0;$t27=0;$t28=0;$t29=0;$t30=0;$t31=0;
	  $TOTAL=0;
	while ($row = mysqli_fetch_assoc($rs_result1)) 
	 { 
 $TOl=0;
 ?>
 <tr >
      <td style='white-space: nowrap;' class="w3-gray"><?php echo $row['NAMEA'];?></td> 
	   <?php
	   for ($x = 1; $x <= $d; $x++)
		   {
		   
		    
		   
		   $nm=urlencode($row['NAMEA']);
		  
		  $n=abs($row[$x]);
	   echo "<td><a style='text-decoration:none;'href='ledger.php?datek=$x & monthk=$monthk & year=$datev & name=$nm'>$n</a></td>";
	   $TOl=$TOl+$row[$x];
	   	
	     }
		  $t1+=abs($row[1]);$t2+=abs($row[2]);$t3+=abs($row[3]);$t4+=abs($row[4]);$t5+=abs($row[5]);$t6+=abs($row[6]);$t7+=abs($row[7]);$t8+=abs($row[8]);$t9+=abs($row[9]);$t10+=abs($row[10]);
		$t11+=abs($row[11]);$t12+=abs($row[12]);$t13+=abs($row[13]);$t14+=abs($row[14]);$t15+=abs($row[15]);$t16+=abs($row[16]);$t17+=abs($row[17]);$t18+=abs($row[18]);$t19+=abs($row[19]);$t20+=abs($row[20]);
		$t21+=abs($row[21]);$t22+=abs($row[22]);$t23+=abs($row[23]);$t24+=abs($row[24]);$t25+=abs($row[25]);$t26+=abs($row[26]);$t27+=abs($row[27]);$t28+=abs($row[28]);$t29+=abs($row[29]);$t30+=abs($row[30]);$t31+=abs($row[31]);
		
	$TOTAL+=abs($TOl);
 ?>
 
 
<td class="w3-hoverable w3-gray">
<?php  echo 'Rs. '.number_format(abs($TOl),2);?></td>

	   
</tr> <?php
	 }?>
	

	
	</table>
	   
      
    </div>

 
</div>
 
 <script type="text/javascript">
 $(function(){
	 w3_open();
	 w3_open();
	 
 })
</script>

<?php include "FOOTER.PHP";?>