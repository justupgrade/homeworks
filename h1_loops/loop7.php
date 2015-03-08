<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (7)</title>
</head>
<body>
<pre>
<?php
	#displays hashtags [reflected loop(6) over X axis]
	
    $width = 11;
    $height = 6;
    
    for($i = $height-1; $i >= 0; $i--) {
    	for($j = 0; $j < $width; $j++) {
    		if($j >= $i && $j < $width-$i) echo "#";
    		else echo " ";
    		echo " ";
    	} 
    	echo "<br>";
    }
?>
</pre>
</body>
</html>