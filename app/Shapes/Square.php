<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Shapes;


class Square extends AbstractShape
{
    private $sideLength;

    public function __construct($shape)
    {
        $this->setSideLength($shape['sideLength']);
        $this->setBorderColor($shape['border']['color']);
        $this->setBorderWidth($shape['border']['width']);
    }

    /**
     * @param string $color
     */
    public function setSideLength(string $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    /**
     * @return mixed
     */
    public function getSideLength()
    {
        return $this->sideLength;
    }

    /**
     * @param $canvas
     */
    public function draw($canvas)
    {
        $length = $this->getSideLength();

        $color = $this->getBorderColor();

        $thickness = $this->getBorderWidth();

        $color = imagecolorallocate($canvas, $color['r'], $color['g'], $color['b']);

        imagesetthickness($canvas, $thickness);
        imagerectangle($canvas, 100, 100, $length, $length, $color);
    }
}
