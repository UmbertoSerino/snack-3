<?php
class Type
{
    public $element;
    public $image;

    public function __construct($_element, $_image = null)
    {
        $this->element = $_element;
        $this->image = $_image;
    }
}
