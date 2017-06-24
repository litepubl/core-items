<?php

namespace LitePubl\Core\Items;

use Psr\Container\ContainerInterface;

interface ItemsInterface extends ContainerInterface
{
    public function getCount(): int;
    public function getValue($id, $name);
    public function setValue($id, $name, $value);
    public function indexOf($name, $value);
    public function addItem(array $item);
    public function delete($id);
}
