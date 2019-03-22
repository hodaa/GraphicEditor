<?php


namespace  App\Factories;

/**
 * Class ShapeFactory.
 */
class ShapeFactory
{
    public static function create($shape)
    {
        $resource = $shape['type'];
        $className = 'App\\Shapes\\'.ucfirst($resource);
        if (class_exists($className)) {
            return new $className($shape);
        }
        abort(404, "The {$resource} shape does not Exist");
    }
}
