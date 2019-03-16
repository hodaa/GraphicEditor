<?php

namespace  App\Repositories;

class SquareRepository extends ShapeRepository
{
    private $sideLength;
    private $shape;

    /**
     * @param string $color
     */
    public function setSideLength(string $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function getSideLength()
    {
        return $this->sideLength;
    }
}
