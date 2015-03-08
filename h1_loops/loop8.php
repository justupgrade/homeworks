<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (8)</title>
</head>
<body>
<pre>
<?php
	#displays hashtags [loop(6) + reflected loop(6) over X axis]
	
    $width = 11;
    $height = 11;
    $middleIDX = 5;
    //j=6 - i =0
    //j=5,6,7, i=1
    //j=4,5,6,7,8, i=2
    for($i = 0; $i < $height; $i++) {
    	for($j = 0; $j < $width; $j++) {
    		if(
    			//upper part:
    			($j >= $middleIDX - $i && $j <= $middleIDX + $i && $i <= $middleIDX) ||
    			//lower part:
    			($j >= $i-$middleIDX && $j < $width-($i-$middleIDX) && $i > $middleIDX)
    		) echo "#";
    		else echo " ";
    		echo " ";
    	} 
    	echo "<br>";
    }
?>
</pre>
</body>
</html>