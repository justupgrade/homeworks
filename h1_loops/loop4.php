<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Loops (4)</title>
</head>
<body>
<pre>
<?php
	#displays hashtags [Z + Z']
	
    $length = 7;
    
    for($i = 0; $i < $length; $i++) {
    	for($j = 0; $j < $length; $j++) {
    		if($i == 0 || $i == $length-1) {
    			echo "# ";
    			continue; //skip rest of inner loop code; 
    		}
    		
    		if($i == $j) {
    			echo "#";
    		} elseif($i == ($length-1)-$j) {
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