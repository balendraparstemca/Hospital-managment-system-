<?PHP

session_start();

		include("db.php");
		//include_once 'connection.php';
			
	if ($_SESSION['login']=="")
	{
		header("Location:login.php");
	}

?>

<!DOCTYPE html>
<html>
<title>hms</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="Javascript/jquery2.js"></script>

<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/w3min.css">
<link rel="stylesheet" href="css/w3.css">
<script href="Javascript/w3.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
body {

     background: linear-gradient(to bottom, #ffffff -4%, #ccccff 100%);
	
	color:#052559;
}
#box1{
border-radius:25px;
 
   
    box-shadow: 10px 10px 5px #aaaaaa;
	 border: 1px solid #052559;
	background-color:#052559;
	color:#ffffff;
}
#box1:hover{

background-color:grey;
}


#table1 td, #table1 th {
    border: 1px solid #ddd;
    padding: 1px;
	word-spacing:0px;
	white-space:nowrap;

border-collapse:collapse;
cellSpacing:'0'; cellPadding:'0';
	
}
#main{
	margin-left:260px;margin-top:33px;
	 
   
}


</style>
<script>
function goBack()
{
	window.history.back();
}
</script>
<body >

<!-- Top container -->
<div class="w3-bar w3-top w3-large" style="z-index:4;background-color:#052559;color:#ffffff;">
  <button class="w3-bar-item w3-button w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"> <img src='images/menu-icon.png' height="30px" width="30px"/>  Menu</button>
  <span class="w3-bar-item w3-right">HMS</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-text-indigo w3-animate-left" style="z-index:3;width:260px;box-shadow: 10px 10px 5px #aaaaaa;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span >Welcome, <strong><?php echo $_SESSION['login'];?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr style="border:solid 2px;">
  <div class="w3-container w3-grey">

  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a style="background-color:#052559;color:#ffffff;"href="index.php" class="w3-bar-item w3-button w3-padding "><img src="images/group.png" width="25px" height="25px"/>Dashboard</a>
	 <a href="user.php" class="w3-bar-item w3-button w3-padding"><img src="images/group.png" width="25px" height="25px"/>Users</a>
    <a href="" class="w3-bar-item w3-button w3-padding"><img src="images/group.jpg" width="25px" height="25px"/>Patients</a>
    <a href="" class="w3-bar-item w3-button w3-padding"><img src="images/pharma.png" width="25px" height="25px"/>Pharmacy</a>
    
	  <button class="w3-button w3-block w3-left-align" onclick="myFunction()"><img src="images/group.png" width="25px" height="25px"/>
  Report <img src='images/arow.png' height="20px" width="20px"/>
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
  <a href="Assets.php" class="w3-bar-item w3-button">Assets</a>
   <a href="vehicle.php" class="w3-bar-item w3-button">Training</a>
		    <a href="ledgergroup1.php" class="w3-bar-item w3-button">Income & Expense</a>
			
  </div>
   
   
     <button class="w3-button w3-block w3-left-align" onclick="myFunction()"><img src="images/group.png" width="25px" height="25px"/>
  Setting <img src='images/arow.png' height="20px" width="20px"/>
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
  <a href="Assets.php" class="w3-bar-item w3-button">Assets</a>
   <a href="vehicle.php" class="w3-bar-item w3-button">System setting</a>
		    <a href="ledgergroup1.php" class="w3-bar-item w3-button">Backup Restore</a>
			
  </div>
  
   <a href="logout.php" class="w3-bar-item w3-button w3-padding"><img src="images/logout.png" width="25px" height="25px"/>Logout</a>
<br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

