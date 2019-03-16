<?php


namespace  App\Repositories;

interface Repository
{
    public function setBorderColor(string $color);

    public function setBorderWidth(int $width);
}
