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
        if(class_exists($className)) {

            return new $className(new $repoName());
        }else{
            abort(404,"The {$resource} shape does not Exist");
        }
    }
}
