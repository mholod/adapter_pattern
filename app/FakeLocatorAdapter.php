<?php


namespace App;


class FakeLocatorAdapter implements Locator
{
    public $mark;
    
    public function __construct(Mark $mark)
    {
        $this->mark = $mark;
    }
    
    public static function returning(Mark $mark)
    {
        return new static($mark);
    }

    public function fromIp($ipAddress): Mark
    {
        return $this->mark;
    }
}