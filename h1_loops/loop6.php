<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (6)</title>
</head>
<body>
<pre>
<?php
	#displays hashtags ]
	
    $width = 11;
    $height = 6;
    
    for($i = 0; $i < $height; $i++) {
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