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
use App\Repositories\LineRepository;

class Line implements Shape
{
    private $lineRepository;

    public function __construct(LineRepository $lineRepository)
    {
        $this->lineRepository = $lineRepository;
    }

    /**
     * @param $canvas
     */
    public function draw($shape,$canvas)
    {
        $RGB = $this->lineRepository->getBorderColor();
        $color = imagecolorallocate($canvas, $RGB['r'], $RGB['g'], $RGB['b']);
        imageline($canvas, 0, 130, 130, 100, $color);
    }
}
