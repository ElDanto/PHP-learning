<?php
// namespace App\Models;
require __DIR__ . '/Album.php';
class Albums
{
    protected $data = [];
    
    public function __construct($sqlArray)
    {
        $this->setData($sqlArray);
    }
    public function setData(array $sqlArray)
    {
        foreach($sqlArray as $item){
            $albumData = new Album($item);
            $this->data[] = $albumData;
        }
    }
    public function getData()
    {
        return $this->data;
    }
}