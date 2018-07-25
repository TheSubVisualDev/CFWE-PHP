<!DOCTYPE html>
<html>
<head>
	<?php include 'menu.php';?> <!--Note : Menu Contains CSS! -->
	

</head>
<body>
	<div class="parallax"></div>
	<br>
	<h3>Welcome to my website!</h3><br>

	<p>Welcome to my testbed website! I'll be posting a multitude of things on here, from small useful tools to aid DMs in D&D to 3D models!<br><br>Thank you for visiting my testbed.</p>
	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->

	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}
</script>

</body>
</html>