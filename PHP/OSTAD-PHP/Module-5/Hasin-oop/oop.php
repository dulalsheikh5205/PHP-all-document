<?php
        class Rectangle{
            public $height;
            public $width;
            private $area;

            function __construct($width = 10,  $height = 4)
            {
                $this->width = $width;
                $this->height = $height;
            }

            function getArea(){
                return $this->height * $this->width;
            }
        }

    

        $r = new Rectangle(10, 4);
        // $r->height = 4;
        // $r->width = 10;
        $area = $r->getArea();
        echo $area;
?>