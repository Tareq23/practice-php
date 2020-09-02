<?php 


class Hello
{
    public function __construct()
    {
        echo 'Hello PHP';
    }
    public static function display()
    {
        echo "it's complete static function!";
    }
    public function square($x)
    {
        return $x*$x;
    } 
}






