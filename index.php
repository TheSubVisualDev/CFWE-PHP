<!DOCTYPE html>
<html>
<body>
	<h1>Louis Testbed Website - Basic Numeric Calculator</h1>
	<p>Basic, first project made with php.</p>
	
	<p><i>please note that for 'Method', the only accepted methods are 'add', 'subtract', 'multiply' and 'divide'. (case sensitive)</i></p><br>

	<form action="calculator.php" method="post"> <!-- Gives the user frontend options to allow for desired use of tool -->
		Number1: <input type="text" name="numo"><br> <!-- 'numo' will be called as $numo in 'calculator.php' and is derived as global when moving to that instance -->
		Number2: <input type="text" name="numt"><br> <!-- 'type="text"' determines the type of box presented on frontend, does NOT determine variables in the slightest -->
		Method: <input type="text" name="method"><br> 
		<input type="submit"> <!-- 'This is the little 'Submit' button at the bottom of every form. -->
	</form>

	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>