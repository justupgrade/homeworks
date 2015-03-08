<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (13)</title>
</head>
<body>
<pre>
<?php
	#displays numbers on screen (loop 13 exercise)
   
   //1,3,5,7,9,1,3,5  += 2
   
   for($row = 0; $row < 8; $row++) { //8 rows
   	for($col = 0; $col < 15; $col++) {//15 cols
   		if($col < 7) {
   			if($col >= 7-$row){
   				echo convert_too_small_result(
   					convert_too_big_result($row*2 + 1) - (7-$col)
   				);
   			}
   			else echo " ";
   		} elseif($col == 7) {
   			echo convert_too_big_result($row*2 + 1);
   		} else { //col > 7
   			if($col - 7 <= $row) {
   				echo convert_too_small_result(
   					convert_too_big_result($row*2 + 1) + (7-$col)
   				);
   			} else echo " ";
   		}
   		echo " ";
   	}
   	echo "<br>";
   }
   
   //converts two-digit number to single digit number (if neccessary)
   function convert_too_big_result($num) {
   	return $num < 10 ? $num : $num-10;
   }
   
   //converts to N
   //keeps number between [0-9] 
   function convert_too_small_result($num) {
   	return $num >= 0 ? $num : $num+10;
   }
    
?>
</pre>
</body>
</html>