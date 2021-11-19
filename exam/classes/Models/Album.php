<?php
namespace Classes\Models;
class Album
{
    public $id;
    public $title;
    public $thumbnail;
    public $year;
    public $records;

    public function __construct(\stdClass $item)
    {
       $this->id = $item->id;
       $this->title = $item->title;
       $this->thumbnail = $item->thumbnail;
       $this->year = $item->year;
       $this->records = explode('|', $item->records);
    }
}