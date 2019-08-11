 <?PHP
include "db.php";
include "HEADER.PHP";

$datev = $_REQUEST['datek'];
$dat = $_REQUEST['name'];
$level=$_REQUEST['level'];
if($level==3)
{
	$level=1;
	
$sql1="select AC_NAME AS NAMEA,AMOUNTCR-AMOUNTCR AS TOTAL,VOCH_DT,
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '1' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'JANUARY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '2' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'FEBRUARY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '3' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'MARCH',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '4' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'APRIL',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '5' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'MAY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '6' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'JUNE',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '7' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'JULY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '8' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'AUGUST',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '9' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'SEPTEMBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '10' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'OCTOBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '11' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'NOVEMBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '12' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'DECEMBER'

from transaction WHERE AC_NAME='$dat'";
$rs_result1= mysqli_query($con,$sql1);
}
if($level==2)
{
	$level=3;

$sql1="select groupp.NAME AS NAMEA,
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '1' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'JANUARY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '2' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'FEBRUARY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '3' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'MARCH',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '4' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'APRIL',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '5' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'MAY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '6' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'JUNE',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '7' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'JULY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '8' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'AUGUST',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '9' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'SEPTEMBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '10' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'OCTOBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '11' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'NOVEMBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '12' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'DECEMBER'

from transaction INNER JOIN groupp ON transaction.AC_NAME=groupp.NAME WHERE groupp.GROUPA='$dat' GROUP BY groupp.NAME";
$rs_result1= mysqli_query($con,$sql1);
}
if($level==1)
{
	$level=1;
$sql1="select VOCH_DT,gt.GROUPA AS NAMEA,
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '1' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'JANUARY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '2' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'FEBRUARY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '3' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'MARCH',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '4' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'APRIL',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '5' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'MAY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '6' THEN AMOUNTDR-AMOUNTCR ELSE 0 END) AS 'JUNE',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '7' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'JULY',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '8' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'AUGUST',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '9' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'SEPTEMBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '10' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'OCTOBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '11' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'NOVEMBER',
SUM(CASE MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) WHEN '12' THEN AMOUNTCR-AMOUNTCR ELSE 0 END) AS 'DECEMBER'

from transaction INNER JOIN groupp AS gb ON transaction.AC_NAME=gb.NAME JOIN groupp AS gt ON gb.GROUPA=gt.NAME where gt.GROUPA='Direct Expenses' or gt.GROUPA='Indirect Expenses' GROUP BY gt.GROUPA";
$rs_result1= mysqli_query($con,$sql1);
}

  
?>
<div class="w3-main" id="main" style="margin-left:300px;margin-top:23px;background-color:gray;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:20px">
    <h1><center><b><?php echo $dat;?></b></h1></center>
  </header>
 <div style="overflow-x:auto;"class="w3-container" style="border:1px solid blue;padding:0px;">
 		   <span style="float:right;"><button onclick="goBack()" type="submit" class="btn btn-default">Go Back
		   </button></span>
 	
 <table style="overflow-x:auto;" id="id01" class="w3-table-all w3-hoverable">
  <tr class="w3-blue">
  <th>NAME</th>
  
  <th>APRIL</th>
  <th>MAY</th><th>JUNE</th><th>JULY</th><th>AUGUST</th><th>SEPTEMBER</th><th>OCTOBER</th><th>NOVEMBER</th><th>DECEMBER</th><th>JANUARY</th><th>FEBRUARY</th><th>MARCH</th><th>TOTAL AS ON</th>

   
	
   
	
	
  </tr>

<?php
     
	  
  
	  $TAPRIL=0;$TMAY=0;$TJUNE=0;$TJULY=0;$TAUG=0;$TSEPT=0;$TOCT=0;$TNOV=0;$TDEC=0;$TJAN=0;$TFEB=0;$TMARCH=0;$TTOT=0;$TOTAL=0;
	while ($row = mysqli_fetch_assoc($rs_result1)) 
	 { 
 ?>
 <tr>
       <td class="w3-gray"><?php echo $dat;?></td>
	   <td><a href="transaction6.php?datek=4 & name=<?php echo $dat; ?> & name_type=<?php echo $level;?>"><?php echo $row['APRIL'];?></a></td>
	   <td><a href="transaction6.php?datek=5 & name=<?php echo $dat; ?> & name_type=<?php echo $level;?>"><?php echo $row['MAY'];?></a></td>
	   <td><a href="transaction6.php?datek=6 & name=<?php echo $dat; ?> & name_type=<?php echo $level;?>"><?php echo $row['JUNE'];?></a></td>
	   <td><a href="transaction6.php?datek=7 & name=<?php echo $dat; ?> & name_type=<?php echo $level;?>"> <?php echo $row['JULY'];?></a></td>
       <td><a href="transaction6.php?datek=8 & name=<?php echo $dat; ?> & name_type=<?php echo $level;?>"><?php echo $row['AUGUST'];?></a></td> 
	   <td><a href="transaction6.php?datek=9 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['SEPTEMBER'];?></a></td>
	   <td><a href="transaction6.php?datek=10 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['OCTOBER'];?></a></td> 
	   <td><a href="transaction6.php?datek=11 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['NOVEMBER'];?></a></td> 
	   <td><a href="transaction6.php?datek=12 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['DECEMBER'];?></a></td>
   <td><a href="transaction6.php?datek=1 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['JANUARY'];?></a></td> 
   <td><a href="transaction6.php?datek=2 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['FEBRUARY'];?></a></td>
 
 <td><a href="ledger.php?datek=3 & name=<?php echo $dat; ?>& name_type=<?php echo $level;?>"><?php echo $row['MARCH'];?></a></td>
<td class="w3-hoverable w3-gray"><?php $TOTAL=$row['APRIL']+$row['MAY']+$row['JUNE']+$row['JULY']+$row['AUGUST']+$row['SEPTEMBER']+$row['OCTOBER']+$row['NOVEMBER']+$row['DECEMBER']+$row['JANUARY']+$row['FEBRUARY']+$row['MARCH'];
    echo $TOTAL;?></td>
<?PHP $TAPRIL+=$row['APRIL'];
       $TMAY+=$row['MAY'];
	   $TJUNE+=$row['JUNE'];
	   $TJULY+=$row['JULY'];
	   $TAUG+=$row['AUGUST'];
	   $TSEPT+=$row['SEPTEMBER'];
	   $TOCT+=$row['OCTOBER'];
	   $TNOV+=$row['NOVEMBER'];
	   $TDEC+=$row['DECEMBER'];
	   $TJAN+=$row['JANUARY'];
	   $TFEB+=$row['FEBRUARY'];
	   $TMARCH+=$row['MARCH'];
	   $TTOT+=$TOTAL;?>
	   
</tr> <?php
	 }?>

	
	</table>
	   
      
    </div>

 
</div>
<?php include "FOOTER.PHP";?>