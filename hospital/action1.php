<?php
include "db.php";
 //Represents index # of month in array 
$month = array("","JANUARY", "FEBRUARY", "MARCH","APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER");




////////////monthly
if(isset($_POST["name"])&& isset($_POST["level"]))
{ $datev=$_POST['year'];
$datef='01';
$monthf='04';
$datet='31';
$montht='03';
$yeart=$datev+1;
$fromdate=date("Y/m/d", mktime(0, 0, 0,(int)$monthf,(int)$datef,(int)$datev));
$todate=date("Y/m/d", mktime(0, 0, 0,(int)$montht,(int)$datet,(int)$yeart));
$dat=$_POST["name"];
 $leve=$_POST["gtyp"];
$level=$_POST["level"];
		echo "<table> <tr>";
	 
$sql1="select AC_NAME AS NAMEA,
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
from transaction WHERE AC_NAME='$dat' AND STR_TO_DATE(VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate'";
   
	
	 $rs_result1= mysqli_query($con,$sql1);
 
  $total=0;
	while ($row = mysqli_fetch_assoc($rs_result1)) 
	 { 
 for($i=4;$i<=date('m');$i++)
 {
	 $i=$i%12;
$am=$row[$month[$i]];
  $nm=$month[$i];
 $mno=$i;
  $da=urlencode($dat);
	$amm='Rs. '.number_format($am,2);
  echo "
    <td style='white-space:nowrap'><a href='transaction6.php?datek=$mno & name=$da & name_type=$level & g_type=$leve & year=$datev'>$nm</a><br/>$amm</td>";
	 $total+=$am;
	 
 }
	 }
	 $tol=number_format($total,2);
  echo "<th style='vertical-align:bottom;'>Rs. $tol</th></tr></table>"; 
}


//////////////group monthly
if(isset($_POST["gname"])&& isset($_POST["level"]))
{ 
$datev=$_POST["year"];
$datef='01';
$monthf='04';
$datet='31';
$montht='03';
$yeart=$datev+1;
$fromdate=date("Y/m/d", mktime(0, 0, 0,(int)$monthf,(int)$datef,(int)$datev));
$todate=date("Y/m/d", mktime(0, 0, 0,(int)$montht,(int)$datet,(int)$yeart));

$dat=$_POST["gname"];
  $level=$_POST["level"];
  $l=$_POST["g_type"];
		echo "<table><tr>
  
  <th>APRIL</th>
 <th>MAY</th><th>JUNE</th><th>JULY</th><th>AUGUST</th><th>SEPTEMBER</th><th>OCTOBER</th><th>NOVEMBER</th><th>DECEMBER</th><th>JANUARY</th><th>FEBRUARY</th><th>MARCH</th><th>TOTAL</th>";
	 if($l==1)
	 {
		 $leve=1;
		 $sql1="SELECT  SUM(AMOUNTCR-AMOUNTDR) AS TOTALAMOUNT,MONTHNAME(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) AS mname,MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) AS mno FROM transaction INNER JOIN groupnew AS gb ON transaction.AC_NAME=gb.NAME JOIN groupnew AS gt ON gb.GROUPA=gt.NAME where STR_TO_DATE(transaction.VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate' AND gt.GROUPA='Incomes'  GROUP BY MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y'))";
	
	 }
	 else
	 {
		 $leve=2;
	 $sql1="SELECT  SUM(AMOUNTDR-AMOUNTCR) AS TOTALAMOUNT,MONTHNAME(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) AS mname,MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) AS mno FROM transaction INNER JOIN groupnew AS gb ON transaction.AC_NAME=gb.NAME JOIN groupnew AS gt ON gb.GROUPA=gt.NAME where STR_TO_DATE(transaction.VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate' AND gt.GROUPA='Expenses' GROUP BY MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y'))";
	 }
	$rs_result1= mysqli_query($con,$sql1);
 echo "</tr><tr>";
   $total=0;
   $i=0;
	while ($row = mysqli_fetch_assoc($rs_result1)) 
	 { 
 $i=$i+1;
 $am=$row["TOTALAMOUNT"];
  $nm=$row["mname"];
  $mno=$row["mno"];
  $da=urlencode($dat);
 $amm='Rs. '.number_format($am,2);
	
  echo "
    <td><a style='text-decoration:none;'href='transaction7.php?datek=$mno & name=$da & name_type=$level & g_type=$leve'>$amm</a></td>";
	 $total+=$am;
	 }
	for ($x = 1; $x <= 12-$i; $x++)
	{
		echo "<td></td>";
	}
  echo "<th>Rs. $total</th></tr></table>"; 

}

//////////ledger

if(isset($_POST["ledger"]))
{  $leve=$_POST["gtyp"]; 
$groupv=$_POST["ledger"];
$datev=$_POST["year"];
$datef='01';
$monthf='04';
$datet='31';
$montht='03';
$yeart=$datev+1;
$fromdate=date("Y/m/d", mktime(0, 0, 0,(int)$monthf,(int)$datef,(int)$datev));
$todate=date("Y/m/d", mktime(0, 0, 0,(int)$montht,(int)$datet,(int)$yeart));
$total=0;
$i=0;

$rs_result= mysqli_query($con,"SELECT * from groupnew where GROUPA='$groupv'");
while ($row = mysqli_fetch_assoc($rs_result)) {
	$i=$i+1;

	$totalamount=0;
	
	$td3=0;
	$dat=$row['NAME'];
	$level=3;
 echo "<tr style='font-size:small;color:black;'> <td style='vertical-align:bottom;'>$i.</td>";
 


 
  $rs_result3= mysqli_query($con,"SELECT AMOUNTDR,AMOUNTCR from transaction where STR_TO_DATE(VOCH_DT,'%m/%d/%Y') BETWEEN  '$fromdate' AND '$todate' AND AC_NAME='$dat'");
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
       
	 }	  
   $n=preg_replace('/[^a-zA-Z]/','',$dat).'1';	 
			
		$totalamount=$td3;
		$tol='Rs. '.number_format($totalamount,2);
		
	   
 echo "<td  style='white-space: nowrap;vertical-align:bottom;'>$dat</td><td id='$dat' onclick='myFunction2($n)'> <span>$tol</span> <div id='$n' class='w3-hide w3-white w3-card'></div></td>";
echo "</tr>";  
$total+=$totalamount;
} 
$total='Rs. '.number_format($total,2);
echo "<tr><td></td><th>TOTAL:</th><th style='float:right;'>$total</th></tr>";
  
}




////SUBGROUP LEDGER
if(isset($_POST["gname"])&&isset($_POST["month"]))
{
	$groupv=$_POST["gname"];
	$mname=$_POST["month"];
	$datek=$_POST["datek"];
	echo "<header style='color:#052559'class='w3-container w3-medium'> 
       
       $groupv
      </header>";
	
	echo "<table id='table1'><tr style='background-color:#052559;color:#ffffff'>
  <th>S.no</th>
  <th>ACCOUNT</th>
  
<th>AMOUNT</th>
</tr>";
	
$i=0;
$total=0;
$rs_result= mysqli_query($con,"SELECT * from groupnew where GROUPA='$groupv'");
while ($row = mysqli_fetch_assoc($rs_result))
{
	$i=$i+1;

	$totalamount=0;
	
	$td3=0;
	$dat=$row['NAME'];
	
 echo "<tr style='font-size:small;color:black;padding:0px;'> <td>$i</td>
 <td style='white-space: nowrap;padding:0px;'>$dat</td>";
 


 
  $rs_result3= mysqli_query($con,"SELECT AMOUNTDR,AMOUNTCR from transaction where AC_NAME='$dat' and DAY(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y')) = '$datek' and MONTH(STR_TO_DATE(`VOCH_DT`, '%m/%d/%Y'))='$mname'");
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
       
	 }	  
  
			
		$totalamount=abs($td3);
		 
		
		$tol='Rs. '.number_format($totalamount,2);
		
	   
	 echo "<td>$tol</td>";
	
	$total+=$totalamount;
	 
		} 	 
  
$total='Rs. '.number_format($total,2);
			
    echo "</tr><tr style='background-color:#052559;color:#ffffff'><td>Total</td><td></td><td>$total</total></tr></table>";  
			
  

  
}


?>







