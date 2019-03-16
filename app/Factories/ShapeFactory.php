<?php

namespace  App\Factories;


/**
 * Class ShapeFactory
 * @package App\Factories
 */
class ShapeFactory
{
    public static function create($resource)
    {
        $className="App\\Shapes\\".ucfirst($resource);
        $repoName="App\\Repositories\\".ucfirst($resource).'Repository';
        return new $className(new $repoName());
    }
}
