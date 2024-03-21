<?php
class Categories
{
    public function __construct(public $name, public $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}
