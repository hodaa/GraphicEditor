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

namespace  App\Http\Controllers;

use App\Factories\ShapeFactory;
use App\Shapes\Canvas;
use Illuminate\Http\Request;

/**
 * Class GraphicEditorController
 * @package App\Http\Controllers
 */
class GraphicEditorController extends Controller
{
    /**
     * @param Request $request
     * @return bool
     */
    public function draw(Request $request)
    {
        $input = $request->all();
        $shapes = $input['shapes'];

        $canvas=new Canvas();
        $canvas=$canvas->drawCanvas();

        foreach ($shapes as $shape) {
            $resource = ShapeFactory::create($shape);
            $resource->draw($canvas);
        }

        return imagepng($canvas);

    }
}
