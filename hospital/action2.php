<?php
include "db.php";
$num=$_POST['formid'];
if($num==10)
{
$location=$_POST['location'];
$make=$_POST['make'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase']; 
$warranty=$_POST['warranty'];
$amc=$_POST['amc'];
$status=$_POST['status'];
 $sql = "INSERT INTO television(LOCATION,MAKE,YEAR_OF_PURCHASE,COST_OF_PURCHASE,WARRANTY_PERIOD,AMC_DETAIL,STATUS)VALUES('$location','$make','$yearpurchase','$costpurchase','$warranty','$amc','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}	

if($num==11)
{
	$model=$_POST['model'];
$printer=$_POST['printer'];
	$location=$_POST['location'];
	$warranty=$_POST['warranty'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$daterenewalamc=$_POST['daterenewalamc'];
$status=$_POST['status'];

 $sql = "INSERT INTO printers(LOCATION,PRINTER_TYPE,YEAR_OF_PURCHASE,COST,WARRANTY,MODEL,AMC_WITH,COST_OF_AMC,RENEWAL_DATE,STATUS)VALUES('$location','$printer','$yearpurchase','$costpurchase','$warranty','$model','$amc','$costamc','$daterenewalamc','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}

if($num==15)
{
	$make=$_POST['make'];
$model=$_POST['model'];
	$location=$_POST['location'];
	$status=$_POST['status'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$maintain=$_POST['maintain'];
$configuration=$_POST['configuration'];
$warranty=$_POST['warranty'];
$status=$_POST['status'];

 $sql = "INSERT INTO  motors(MAKE,LOCATION,YEAR_OF_PURCHASE,WARRANTY,COST,MODEL,CONFIGURATION,AMC_WITH,Cost_of_AMC,MAINTENANCE,STATUS)VALUES('$make','$location','$yearpurchase','$warranty','$costpurchase','$model','$configuration','$amc','$costamc','$maintain','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}


if($num==13)
{
	$ename=$_POST['ename'];
	$make=$_POST['make'];
$model=$_POST['model'];
$snv=$_POST['snv'];
$suplier=$_POST['suplier'];
$inv=$_POST['inv'];
	$yearpurchase=$_POST['yearpurchase']; 
$cost=$_POST['cost'];
$install=$_POST['install'];
$location=$_POST['location'];
	$status=$_POST['status'];
$warrantyp=$_POST['warrantyp']; 
$warrantyend=$_POST['warrantyend'];
$amc=$_POST['amc']; 
$cmc=$_POST['cmc'];
$amcperiod=$_POST['amcperiod'];
$amcend=$_POST['amcend'];
$amcamount=$_POST['amcamount'];
$frequency=$_POST['frequency'];
$lastservice=$_POST['lastservice']; 
$spare=$_POST['spare'];


 $sql = "INSERT INTO  equipment_ot(EQUIPMENT,MANUFACTURER,MODEL,SERIAL_NO,SUPPLIER,DATE_OF_PURCHASE,COST_OF_MACHINE,INV_NO_DATE,DATE_INSTALLATION,LOCATION,WARRANTY_PERIOD,
WARRANTY_END_DATE,AMC,CMC,AMC_OR_CMC_PERIOD,AMC_OR_CMC_ENDDATE,AMC_OR_CMC_AMOUNT,FREQUENCY_OF_PM,LAST_SEREVICE_DETAIL,SPARE_ACCESSORIES_REPLACED_ON,STATUS)
VALUES('$ename','$make','$model','$snv','$suplier','$yearpurchase','$cost','$inv','$install','$location','$warrantyp','$warrantyend','$amc','$cmc',
'$amcperiod','$amcend','$amcamount','$frequency','$lastservice','$spare','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}

if($num==3)
{
	$ename=$_POST['ename'];
	$make=$_POST['make'];
$model=$_POST['model'];
$snv=$_POST['snv'];
$suplier=$_POST['suplier'];
$inv=$_POST['inv'];
	$yearpurchase=$_POST['yearpurchase']; 
$cost=$_POST['cost'];
$install=$_POST['install'];
$location=$_POST['location'];
	$status=$_POST['status'];
$warrantyp=$_POST['warrantyp']; 
$warrantyend=$_POST['warrantyend'];
$amc=$_POST['amc']; 
$cmc=$_POST['cmc'];
$amcperiod=$_POST['amcperiod'];
$amcend=$_POST['amcend'];
$amcamount=$_POST['amcamount'];
$frequency=$_POST['frequency'];
$lastservice=$_POST['lastservice']; 
$spare=$_POST['spare'];


 $sql = "INSERT INTO  equipment_labour_room(EQUIPMENT_NAME,MANUFACTURER,MODEL,SERIAL_NO,SUPPLIER,PURCHASE_DATE,COST_OF_MACHINE,INV_NO_DATE,INSTALLATION_DATE,LOCATION,
 WARRANTY_PERIOD,
WARRANTY_ENDDATE,AMC,CMC,AMC_CMC_PERIOD,AMC_CMC_ENDDATE,AMC_CMC_AMOUNT,FREQUENCY_OF_PM,LAST_SERVICE_DETAIL,SPARE_ACCESSORIES_REPLACED_ON,STATUS)
VALUES('$ename','$make','$model','$snv','$suplier','$yearpurchase','$cost','$inv','$install','$location','$warrantyp','$warrantyend','$amc','$cmc',
'$amcperiod','$amcend','$amcamount','$frequency','$lastservice','$spare','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}



if($num==5)
{
	$ename=$_POST['ename'];
	$make=$_POST['make'];
$model=$_POST['model'];
$snv=$_POST['snv'];
$suplier=$_POST['suplier'];
$inv=$_POST['inv'];
	$yearpurchase=$_POST['yearpurchase']; 
$cost=$_POST['cost'];
$install=$_POST['install'];
$location=$_POST['location'];
	$status=$_POST['status'];
$warrantyp=$_POST['warrantyp']; 
$warrantyend=$_POST['warrantyend'];
$amc=$_POST['amc']; 
$cmc=$_POST['cmc'];
$amcperiod=$_POST['amcperiod'];
$amcend=$_POST['amcend'];
$amcamount=$_POST['amcamount'];
$frequency=$_POST['frequency'];
$lastservice=$_POST['lastservice']; 
$spare=$_POST['spare'];


 $sql = "INSERT INTO  equipment_pow(EQUIPMENT,MANUFACTURER,MODEL,SERIAL_NO,SUPPLIER,DATE_OF_PURCHASE,COST_OF_MACHINE,INV_NO_DATE,DATE_INSTALLATION,LOCATION,WARRANTY_PERIOD,
WARRANTY_END_DATE,AMC,CMC,AMC_OR_CMC_PERIOD,AMC_OR_CMC_ENDDATE,AMC_OR_CMC_AMOUNT,FREQUENCY_TO_PM,LAST_SERVICE_DETAIL,SPARE_ACCESSORIES_REPLACED_ON,STATUS)
VALUES('$ename','$make','$model','$snv','$suplier','$yearpurchase','$cost','$inv','$install','$location','$warrantyp','$warrantyend','$amc','$cmc',
'$amcperiod','$amcend','$amcamount','$frequency','$lastservice','$spare','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}


if($num==4)
{
	$ename=$_POST['ename'];
	$make=$_POST['make'];
$model=$_POST['model'];
$snv=$_POST['snv'];
$suplier=$_POST['suplier'];
$inv=$_POST['inv'];
	$yearpurchase=$_POST['yearpurchase']; 
$cost=$_POST['cost'];
$install=$_POST['install'];
$location=$_POST['location'];
	$status=$_POST['status'];
$warrantyp=$_POST['warrantyp']; 
$warrantyend=$_POST['warrantyend'];
$amc=$_POST['amc']; 
$cmc=$_POST['cmc'];
$amcperiod=$_POST['amcperiod'];
$amcend=$_POST['amcend'];
$amcamount=$_POST['amcamount'];
$frequency=$_POST['frequency'];
$lastservice=$_POST['lastservice']; 
$spare=$_POST['spare'];


 $sql = "INSERT INTO  equipment_icu(EQUIPMENT_NAME,MANUFACTURER,MODEL,SERIAL_NO,SUPPLIER,DATE_OF_PURCHASE,COST_OF_MACHINE,INV_NO_DATE,INSTALLATIO_DATE,LOCATION,WARRANTY_PERIOD,
WARRANTY_END_DATE,AMC,CMC,AMC_CMC_PERIOD,AMC_CMC_ENDDATE,AMC_CMC_AMOUNT,FREQUENCY_TO_PM,LAST_SEREVICE_DATE,SPARE_ACCESSORIES_REPLACED_ON,STATUS)
VALUES('$ename','$make','$model','$snv','$suplier','$yearpurchase','$cost','$inv','$install','$location','$warrantyp','$warrantyend','$amc','$cmc',
'$amcperiod','$amcend','$amcamount','$frequency','$lastservice','$spare','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}



if($num==14)
{
	$make=$_POST['make'];
$number=$_POST['number'];
	$location=$_POST['location'];
	$status=$_POST['status'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$daterenewalamc=$_POST['daterenewalamc'];

 $sql = "INSERT INTO  computers(LOCATION,MAKE,NO_OF_COMPUTERS,YEAR_OF_PURCHASE,COST_OF_PURCHASE,COST_OF_AMC,AMC_WITH,RENEWAL_DATE_AMC,STATUS)VALUES('$location','$make','$number','$yearpurchase','$costpurchase','$costamc','$amc','$daterenewalamc','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}

if($num==12)
{
	$make=$_POST['make'];
$serial=$_POST['serial'];
	$watts=$_POST['watts'];
	$configuration=$_POST['configuration'];
$yearpurchase=$_POST['yearpurchase']; 

$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$oilchange=$_POST['oilchange'];
$general=$_POST['general'];
$status=$_POST['status'];

 $sql = "INSERT INTO  generators(MAKE,SERIAL_NO,WATTS,CONFIGURATION,YEAR_OF_PURCHASE,AMC_WITH,COST_OF_AMC,OIL_CHANGE,GENERAL_SERVICING,STATUS)VALUES('$make','$serial','$watts','$configuration','$yearpurchase','$amc','$costamc','$oilchange','$general','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    ?>
	<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($con);?>");</script>
	<?php
}
}




if($num==2)
{$floor=$_POST['floor'];
	$location=$_POST['location'];
	$make=$_POST['make'];
	$idno=$_POST['idno'];
	$capacity=$_POST['capacity'];
	$warranty=$_POST['warranty'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$daterenewalamc=$_POST['daterenewalamc'];
$status=$_POST['status'];

 $sql = "INSERT INTO ac_machine(FLOOR,LOCATION,CAPACITY,MAKE,ID_NO,YEAR_OF_PURCHASE,COST_OF_PURCHASE,WARRANTY,COMPANY_AMC,RENEWAL_DATE_AMC,COST_OF_AMC,STATUS)VALUES('$floor','$location','$capacity','$make','$idno','$yearpurchase','$costpurchase','$warranty','$amc','$daterenewalamc','$costamc','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

if($num==6)
{$ename=$_POST['ename'];
$make=$_POST['make'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$amc=$_POST['amc']; 
$idno=$_POST['idno']; 
$warranty=$_POST['warranty']; 


 $sql = "INSERT INTO phyjiotherepy_instrument(NAME,MAKE,ID_NO,YEAR_OF_PURCHASE,COST_OF_PURCHASE,WARRANTY,AMC)VALUES('$ename','$make','$idno','$yearpurchase','$costpurchase','$warranty','$amc')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

if($num==7)
{$floor=$_POST['floor'];
	$location=$_POST['location'];
	$make=$_POST['make'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$daterenewalamc=$_POST['daterenewalamc'];
$status=$_POST['status'];

 $sql = "INSERT INTO cctv_camera(LOCATION,FLOOR,MAKE,YEAR_OF_PURCHASE,COST_OF_PURCHASE,AMC_WITH,COST_OF_AMC,DATE_AMC_RENEWAL,STATUS)VALUES('$location','$floor','$make','$yearpurchase','$costpurchase','$amc','$costamc','$daterenewalamc','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}


if($num==8)
{
	$location=$_POST['location'];
	$make=$_POST['make'];
$yearpurchase=$_POST['yearpurchase']; 
$costpurchase=$_POST['costpurchase'];
$suplier=$_POST['suplier'];
$status=$_POST['status'];

 $sql = "INSERT INTO xerox_machine(MAKE,LOCATION,SUPPLIER,YEAR_OF_PURCHASE,COST,STATUS)VALUES('$make','$location','$suplier','$yearpurchase','$costpurchase','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}


if($num==9)
{
	$location=$_POST['location'];
$telephone=$_POST['telephone'];
$amc=$_POST['amc']; 
$costamc=$_POST['costamc']; 
$daterenewalamc=$_POST['daterenewalamc'];
$status=$_POST['status'];
 $sql = "INSERT INTO telephone(LOCATION,TELEPHONE_NO,AMC,COST_OF_AMC,DATE_RENEWAL_AMC,STATUS)VALUES('$location','$telephone','$amc','$costamc','$daterenewalamc','$status')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>