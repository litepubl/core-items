<?php

namespace LitePubl\Core\Items;

trait ItemsTrait
{

    abstract public function save();

    public function get($id)
    {
        if (isset($this->items[$id])) {
            return $this->items[$id];
        }

        throw new NotFound($this, $id);
    }

    public function has($id)
    {
        return isset($this->items[$id]);
    }

    public function getCount(): int
    {
        return count($this->items);
    }

    public function getValue($id, $name)
    {
        return $this->items[$id][$name];
    }

    public function setValue($id, $name, $value)
    {
        if (isset($this->items[$id])) {
                $this->items[$id][$name] = $value;
                $this->save();
        }
    }

    public function indexOf($name, $value)
    {
    }

    public function addItem(array $item)
    {
        $this->items = $item;
        $this->save();
    }

    public function delete($id)
    {
        if (isset($this->items[$id])) {
                unset($this->items[$id]);
                $this->save();
        }
    }
}
