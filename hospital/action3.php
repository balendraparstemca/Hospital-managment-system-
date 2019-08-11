<?php
include "db.php";
if(isset($_POST["id"])&& isset($_POST["db"]))
{
	$id=$_POST["id"];
	$db=$_POST["db"];
	$sql1="select *  from $db where ID='$id'";
	$result1= mysqli_query($con,$sql1);
	while ($row = mysqli_fetch_assoc($result1)) 
	 {     $st=$row['STATUS'];
		 echo "<table><tr><th>Status</th></tr>
		 <tr><td>$st</td></tr></table>";
	 }
}
?>