<?php
include "db.php";
$typ=$_POST["type"];
if($typ==1)
{
$sql = "UPDATE ". $_POST["formid"] . " set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"];
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

if($typ==2)
{
$sql = "DELETE FROM " . $_POST["formid"] . " WHERE  ID=".$_POST["id"];
if (mysqli_query($con, $sql)) {
    echo " record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

?>