<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (12)</title>
</head>
<body>
<pre>
<?php
	#displays numbers on screen (loop 12 exercise)
   
   $count = 0;
   $rows = 8;
   $cols = 15;
   $middle_id = ($cols-1)/2;
   
   //15 cols 8 rows
   for($i = $rows-1; $i >= 0; $i--) {
		for($j = 0; $j < $cols; $j++) {
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