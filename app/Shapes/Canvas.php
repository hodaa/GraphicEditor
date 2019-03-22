<?php

namespace  App\Shapes;

class Canvas
{
    /**
     * @return resource
     */
    public function drawCanvas()
    {
        header("Content-type: image/png");

        $canvas = imagecreatetruecolor(800, 800);

        $white = imagecolorallocate($canvas, 255, 255, 255);

        imagefill($canvas, 0, 0, $white);

        return $canvas;
    }
}
