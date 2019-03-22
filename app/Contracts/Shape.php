<?php

namespace  App\Contracts;
/**
 * Interface Shape
 * @package App\Contracts
 */
interface  Shape{

    /**
     * @param string $color
     * @return mixed
     */
    public function setBorderColor(string $color);

    /**
     * @return mixed
     */
    public function getBorderColor();

    /**
     * @param $width
     * @return mixed
     */
    public function setBorderWidth(int $width);

    /**
     * @return mixed
     */
    public function getBorderWidth();


}

