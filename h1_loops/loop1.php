<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (1)</title>
</head>
<body>
<pre>
<?php
	#displays hashtags [square (only border)]
	
    $length = 7;
    
    for($i = 0; $i < $length; $i++) {
    	for($j = 0; $j < $length; $j++) {
    		if($i == 0 || $i == $length-1) {
    			echo "# ";
    			continue; //skip rest of inner loop code; 
    		}
    		
    		if($j == 0 || $j == $length -1) {
    			echo "#";
    		} else echo " ";
    		
    		echo " ";
    	} 
    	echo "<br>";
    }
?>
</pre>
</body>
</html>