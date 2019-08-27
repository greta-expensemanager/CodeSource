<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
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