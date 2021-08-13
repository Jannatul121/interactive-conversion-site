<!DOCTYPE html>
<html>
<head>
    <style>
.center {
  color: red;
}
</style>
<title>Validation</title>
<script src="javascript.js"></script>
</head>
<body>


	<div style="border: black; border-width: 2.5px; border-style: solid;">
	<p class="center"> [Home]</p> 
    <p class="center"> Interactive Conversion Site</p> 
    
    <p style="color: blue;"><a href="Home_page.php">  Home</a> <a href="Conversion_page.php"> Conversion Rate</a> <a href="History_page.php"> History</a></p>
    

    
 
	<br>
    <p class="center"> Converter:</p> 
    
	<form action="formAction.php" target="_self" onsubmit="return validateForm()" method="POST" name="My form" id="mForm">
		<p style=" margin: 5px;"> 
        <select name="type" id="type">
  		<option value="feet to inch">feet to inch</option>
 	 	<option value="inch to feet">inch to feet</option>
		</select>
        </p>
		
		<br>
        <br>
        
		<label id="value">Value : </label>
		<input type="text" name="value" id="value">
		
		<br>
        <br>
		
		 <label for="result">Result :</label>
		 <input type="text" name="result" id="result">
		
		<br>
		<br>

		<input type="Submit" value="submit">


	</form>
    

</body>
</html>