<?php



namespace App\Shapes;


class Line extends AbstractShape
{
    /**
     * @var
     */
    private $length;

    /**
     * Line constructor.
     * @param $shape
     */
    public function __construct($shape)
    {
        $this->setLength($shape['length']);
        $this->setBorderColor($shape['border']['color']);
        $this->setBorderWidth($shape['border']['width']);
    }
    /**
     * @param $length
     */
    private function setLength($length)
    {
        $this->length = $length;
    }


    /**
     * @return mixed
     */
    private function getLength()
    {
        return $this->length ;
    }


    /**
     * @param $canvas
     * @param mixed $shape
     */
    public function draw($canvas)
    {
        $RGB = $this->getBorderColor();
        $length=$this->getLength();
        $thickness=$this->getBorderWidth();

        $color = imagecolorallocate($canvas, $RGB['r'], $RGB['g'], $RGB['b']);
        imagesetthickness($canvas, $thickness);
        imageline($canvas, 100, 200, $length, $length, $color);
    }




}
