<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (11)</title>
</head>
<body>
<pre>
<?php
	#displays numbers on screen (loop 11 exercise)
   
   $count = 0;
   $rows = 8;
   $cols = 15;
   $middle_id = ($cols-1)/2;
   
   //15 cols 8 rows
   for($i = 0; $i < $rows; $i++) {
		for($j = 0; $j < $cols; $j++) {
			//j < $middle_id => count++
			//j == $middle_id => $i == max ? echo i : " "
			//j > $middle_id => count--
			//n = i+1 for each (but middle!) section 	
			if($j < $middle_id) {
				if($j <= $i) echo ++$count;
				else echo " ";
			} elseif($j == $middle_id) {
				if($i == $middle_id) echo $count+1;
				else echo " ";
			} else {
				if(($cols-1)-$j <= $i) echo $count--;
				else echo " ";
			}
			
			echo " ";
		}
		
		echo "<br>";
		$count = 0; 
   }
   
    
?>
</pre>
</body>
</html>