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

namespace  App\Shapes;

use App\Contracts\Shape;
use App\Repositories\CircleRepository;

class Circle implements Shape
{
    private $circleRepository;

    public function __construct(CircleRepository $circleRepository)
    {
        $this->circleRepository = $circleRepository;
    }

    public function draw($shape,$canvas)
    {

        $this->circleRepository->setArea($shape['perimeter']);
        $x = $this->circleRepository->getArea();

        $this->circleRepository->setBorderColor($shape['border']['color']);
        $color = $this->circleRepository->getBorderColor();

        $this->circleRepository->setBorderWidth($shape['border']['width']);
        $thickness=$this->circleRepository->getBorderWidth();

        $color = imagecolorallocate($canvas, $color['r'], $color['g'], $color['b']);

//        imagesetthickness($canvas, $thickness);
        imageellipse($canvas, 200, 200, $x, $x, $color);
//        $this->drawBorder($canvas,$color,$thickness,$x);

        return $canvas;




    }

    private function drawBorder(&$img, &$color, $thickness = 1,&$x)
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
