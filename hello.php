<?php 


class Hello
{
    private $x,$y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
        echo 'Learning PHP';
    }
    public static function display()
    {
        echo "it's complete static function!";
    }
    public function add()
    {
        return $this->x + $this->y;
    }
}






