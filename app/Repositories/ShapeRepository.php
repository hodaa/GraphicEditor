<?php

namespace  App\Repositories;

use App\Colors\Colors;
class ShapeRepository implements Repository
{
    private $color;
    private $width;



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
        return $this->width ;
    }
}
