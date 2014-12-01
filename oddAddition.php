<html>
	<form method = "get" action = "if_1.php" name = "php1">
		input a number: <input type = "text" name = "number1">
	<input type = "submit" name = "sendByGet" value = "submit">
	</form>
	<?
		$n1 = $_GET["number1"];
		$n2 = 1;
		$sum = 0;
		
		if($_GET["sendByGet"]){
			if($n1%2){
				for($i = 1; $i <= $n1; $i = $i + 2, $sum = $sum + $i);
				echo "1 + 3 + ......"." + ".$n1." = ".$sum;
			}else{
				echo "Error input.";
			}
		}else{
			echo "No input";
		}
	?>
</html>
