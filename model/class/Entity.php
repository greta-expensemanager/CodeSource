<?php
/**
 * Created by PhpStorm.
 * User: x_sal
 * Date: 13/06/2019
 * Time: 16:01
 */

abstract class Entity
{
    protected function hydrate(array $values){
        foreach ($values as $key => $value){
            $methodName = 'set'.ucfirst($key);
            if(method_exists($this,$methodName)){
                $this->$methodName($value);
            }
        }
    }
}