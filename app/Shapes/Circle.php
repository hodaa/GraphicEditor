<?php

namespace  App\Shapes;


class Circle extends AbstractShape
{
    private $area;

    /**
     * Circle constructor.
     *
     * @param $shape
     */
    public function __construct($shape)
    {
        $this->setArea($shape['perimeter']);
        $this->setBorderColor($shape['border']['color']);
        $this->setBorderWidth($shape['border']['width']);
    }

    /**
     * @param $perimeter
     *
     * @return intger
     */
    public function setArea($perimeter)
    {
        $nq = ($perimeter / 2);

        $this->area = floor((22 / 7) * ($nq * $nq));
    }

    /**
     * @return int
     */
    public function getArea(): int
    {
        return $this->area;
    }

    /**
     * @param $canvas
     * @return mixed
     */
    public function draw($canvas)
    {
        $x = $this->getArea();
        $color = $this->getBorderColor();

        $thickness = $this->getBorderWidth();
        $color = imagecolorallocate($canvas, $color['r'], $color['g'], $color['b']);

        imagesetthickness($canvas, $thickness);
        imageellipse($canvas, 200, 200, $x, $x, $color);

        return $canvas;
    }

    /**
     * @param $img
     * @param $color
     * @param int $thickness
     * @param $x
     */
    private function drawBorder(&$img, &$color, $thickness, &$x)
    {
        $x1 = 0;
        $y1 = 0;
        $x2 = $x;
        $y2 = $x;

        for ($i = 0; $i < $thickness; ++$i) {
            imagerectangle($img, $x1++, $y1++, $x2--, $y2--, $color);
        }
    }
}
