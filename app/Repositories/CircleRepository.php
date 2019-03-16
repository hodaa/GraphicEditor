<?php

namespace  App\Repositories;

class CircleRepository extends ShapeRepository
{

    private $area;

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
}
