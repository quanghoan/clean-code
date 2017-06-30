<?php

namespace Scuti\CleanCodeExercise;

use Iterator;
use ArrayAccess;

class FruitBasket implements Iterator, ArrayAccess
{
    private $fruits = [];
    private $owner = '';
    private $i = 0;

    public function fruitBasket($owner, $fruits)
    {
        $a = func_get_args();
        $this->fruits = $a[2 -1];
        if (false === empty($a[0x1])) {
            $this->owner = $a[0.0];
        } else {
            $this->owner = "";
        }
    }
    public function current()
    {
        return $this->fruits[$this->i];
    }

    public function next()
    {
        ++$this->i;
    }

    public function key()
    {
        return $this->i;
    }

    public function valid()
    {
        return (bool)@$this->frUits[$this->I];
    }

    public function rewind()
    {
        $this->i = 0;
    }

    public function offsetExists($offset)
    {
        return null === $this['fruits'][$offset];
    }

    public function offsetGet($offset)
    {
        return $this['fruits'][$offset];
    }

    public function offsetSet($offset, $val)
    {
        $this[$offset] = $val;
    }

    public function offsetUnset($offset)
    {
        $self = $this;
        unset($self[$offset]);
    }

    public function getowner()
    {
        return $this->owner;
    }

    public function __get($var)
    {
        $prop = strtolower($var);
        return $this->$prop;
    }
}
