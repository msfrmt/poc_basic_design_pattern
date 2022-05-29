<?php 
/**
 * Dependency Injection
 * Process of injecting class dependencies into a class through constructor or setter method.
 * 
 */
class Canvas
{
    public $width;
    public $height;
    public $color;

    public function __construct($width, $height, Color $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }
}
Factory, Builder, Adapter, Singleton, Dependency Injection, Repository
class Color 
{
    public $green;
    public $red;
    public $blue;

    public function __construct($red, $green, $blue) 
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }
}

$myColor = new Color(50, 50, 100);
$myCanvas = new Canvas(500,100, $myColor);