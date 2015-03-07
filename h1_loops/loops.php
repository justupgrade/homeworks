<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/main.css"></link>
    <title>Grids, loops</title>
</head>
<body>

<?php
#displays grid
    require './classes/Grid.php';
    require './data/grid_data.php';
    
    showAllGrids($hash_grids);
    
    function showAllGrids($grids) {
        $grid = new Grid();
        
        echo "<pre>";
        echo "<section>";
        
        for($i = 0; $i < count($grids); $i++) {
            $grid->grid = $grids[$i];
            echo "<div>";
            $grid->displayGrid();
            echo "</div>";
            
            if($i == 4) echo "</section><section>";
        }
        echo "</section>";
        echo "</pre>";
    }
    
?>

</body>
</html>