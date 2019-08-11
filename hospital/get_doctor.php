<?php
include "db.php";
if(!empty($_POST["detail"])) 
{

 $sql=mysqli_query($con,"select * from patient where ID='".$_POST['detail']."'");
 while($row=mysqli_fetch_array($sql))
 	{
		$g=$row['DR'];
		$h=$row['NAME'];
  echo "<div class='form-group'>
      <label class='control-label col-sm-5' for='email'>PatientName:</label>
      <div class='col-sm-7'>
        <input type='text' class='form-control' id='email' placeholder='Enter name' name='4' value='$h' required></div>

    </div>
	
	<div class='form-group'>
      <label class='control-label col-sm-5' for='email'>DocterName:</label>
      <div class='col-sm-7'>
       <input type='text' class='form-control' id='email' placeholder='Enter email' name='5'  value='$g' required></div>
		
		 
    </div>";?>
 <?php
}
}

if(!empty($_POST["detail2"])) 
{

 $sql=mysqli_query($con,"select * from patient where ID='".$_POST['detail2']."'");
 while($row=mysqli_fetch_array($sql))
 	{
		$g=$row['DR'];
		$h=$row['NAME'];
  echo "<div class='form-group'>
      <label class='control-label col-sm-5' for='email'>PatientName:</label>
      <div class='col-sm-7'>
        <input type='text' class='form-control' id='email' placeholder='Enter name' name='4' value='$h' required></div>

    </div>
	
	<div class='form-group'>
      <label class='control-label col-sm-5' for='email'>DocterName:</label>
      <div class='col-sm-7'>
       <input type='text' class='form-control' id='email' placeholder='Enter email' name='5'  value='$g' required></div>
		
		 
    </div>";?>
 <?php
}
}
if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select docFees from doctors where doctorName='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}


if(!empty($_POST["ip"])) 
{

 $sql=mysqli_query($con,"select * from patient where ID='".$_POST['ip']."'");
 echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Sex</th><th>Address</th><th>Contact No</th><th>Admission Date</th><th>Doctor</th></tr>";

 while($row=mysqli_fetch_array($sql))
 	{
		$a=$row['ID'];
		$b=$row['NAME'];
		$c=$row['AGE'];
		$d=$row['SEX'];
		$e=$row['MONO'];
		$f=$row['DATE'];
		$g=$row['DR'];
		$h=$row['ADDRESS'];
 	echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$h</td><td>$e</td><td>$f</td><td>$g</td></tr>";


}
}


if(!empty($_POST["op"])) 
{

 $sql=mysqli_query($con,"select * from patient where ID='".$_POST['op']."'");
 echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Sex</th><th>Address</th><th>Contact No</th><th>Admission Date</th><th>Doctor</th></tr>";

 while($row=mysqli_fetch_array($sql))
 	{
		$a=$row['ID'];
		$b=$row['NAME'];
		$c=$row['AGE'];
		$d=$row['SEX'];
		$e=$row['MONO'];
		$f=$row['DATE'];
		$g=$row['DR'];
		$h=$row['ADDRESS'];
 	echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$h</td><td>$e</td><td>$f</td><td>$g</td></tr>";


}
}
?>

