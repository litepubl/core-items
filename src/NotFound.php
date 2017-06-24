<?php

namespace LitePubl\Core\Items;

use Psr\Container\NotFoundExceptionInterface ;

class NotFound extends \UnexpectedValueException implements NotFoundExceptionInterface
{
    protected $className;
    protected $id;

    public function construct($instance, $id)
    {
        $this->className = get_class($instance);
        $this->id = $id;

        parent::__construct(sprintf('Item %s not found in class %s', $id, $this->className));
    }
}
