<?php
    class Grid {
        //array[col][row]
        public $grid; //array containing the type of cells
        
        public function displayGrid() {
            $cols = count($this->grid[0]);
            $rows = count($this->grid);
            for($row = 0; $row < $rows; $row++) {
                for($col = 0; $col < $cols; $col++) {
                    echo $this->getCellContent($row,$col);
                    echo " ";
                }
                echo "<br>";
            }
        }
        
        public function getCellContent($row,$col) {
            return $this->convertTypeToContent($this->grid[$row][$col]);
        }
        
        private function convertTypeToContent($type) {
            $content = "";
            
            switch($type) {
                case 0: $content = " "; break;
                case 1: $content = "#"; break;
                default: $content = " "; break;
            }
            
            return $content;
        }
    }
?>

