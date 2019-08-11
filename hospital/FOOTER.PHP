

<div class="w3-main" style="margin-left:10px;margin-top:43px;">
<hr style="border:solid 2px;"></hr>

 

  <!-- End page content -->
</div>


<script>
function myFunction() {
    var x = document.getElementById("demoAcc");
    
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");
var my = document.getElementById("main");
// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = "none";
    overlayBg.style.display = "none";
	mySidebar.style.width='0px';
my.style.marginLeft='0%';
      
    } else {
		 mySidebar.style.width='260px';
		my.style.marginLeft='260px';
        mySidebar.style.display = 'block';
   overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";

}

</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
