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

use App\Contracts\Shape;
use App\Repositories\SquareRepository;

class Square implements Shape
{
    private $squareRepository;

    public function __construct(SquareRepository $squareRepository)
    {
        $this->squareRepository = $squareRepository;
    }

    public function draw($shape,$canvas)
    {

        $this->squareRepository->setSideLength($shape['sideLength']);
        $length=$this->squareRepository->getSideLength();

        $this->squareRepository->setBorderColor($shape['border']['color']);
        $color=$this->squareRepository->getBorderColor();

        $this->squareRepository->setBorderWidth($shape['border']['width']);
        $thickness=$this->squareRepository->getBorderWidth();

        $color = imagecolorallocate($canvas, $color['r'], $color['g'], $color['b']);

        imagesetthickness($canvas, $thickness);
        imagerectangle($canvas, 100, 100, $length, $length, $color);


    }
}
