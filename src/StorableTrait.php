<?php

namespace LitePubl\Core\Items;

use litepubl\core\storage\storables\StorableInterface;

trait StorableTrait
{
    protected $baseName = 'items';

    public function getBaseName(): string
    {
        return $this->baseName;
    }

    public function getData(): array
    {
        if (get_parent_class (__CLASS__) instanceof StorableInterface) {
                $result = parent::getData();
        } else {
                $result = [];
        }

        $result['items'] = $this->items;
        return $result;
    }

    public function setData(array $data)
    {
        $this->items = $data['items'];

        if (get_parent_class (__CLASS__) instanceof StorableInterface) {
                parent::setData($data);
        }
    }
}
