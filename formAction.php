<?php

if($_SERVER['REQUEST_METHOD'] === "POST")
	if(empty($_POST['value'])){
		echo "<h1 style='color:red'>Value can't be left blank</h1>";
	}
	else {
	echo  $_POST['result'];
	}
}

?>