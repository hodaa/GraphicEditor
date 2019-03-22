<?php

namespace  App\Shapes;

use App\Colors\Colors;
use App\Contracts\Shape;

abstract  class AbstractShape implements Shape
{
    private $color;
    private $width;

    abstract  function draw($shape);

    /**
     * @param string $color
     * @return mixed|void
     */
    public function setBorderColor(string $color)
    {
        $this->color = Colors::convertToRGB($color);
    }

    /**
     * @return array
     */
    public function getBorderColor()
    {
        return $this->color;
    }

    public function setBorderWidth(int $width)
    {
        $this->width = $width;
    }

    public function getBorderWidth()
    {
        return $this->width;
    }

}
