<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (nums)</title>
</head>
<body>
<pre>
<?php
	#displays numbers on screen (loop exercise)
   
   $count = 0;
   $middle_id = 7;
   
   for($i = 7; $i >= 0; $i--) { //row
   	for($j = 0; $j < 15; $j++) { //col
   		if($j == $middle_id) echo ($i+1); //middle
   		elseif($j < $middle_id) { //numbers are increasing
   			//$i -> specifies total count => i=0 -> no numbers, i=7-> 7 numbers
   			if($j >= $middle_id-$i) echo ++$count;
   			else echo " ";
   		} else { //col_nr > 7 -> numbers are decreasing
   			if($j-$middle_id <= $i ) echo $count--;
   			else echo " ";
   		}
   		
   		echo " "; //white space after sign/space
   	}	
   	echo "<br>";
   	$count = 0; //reset counter
   }
    
?>
</pre>
</body>
</html>