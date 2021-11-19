<?php
namespace Classes\Models;

class Image
{
    public $id;
    public $subtitle;
    public $path;

    public function __construct(\stdClass $item)
    {
       $this->id = $item->id;
       $this->subtitle = $item->subtitle;
       $this->path = $item->image;
    }
}