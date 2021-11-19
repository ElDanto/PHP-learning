<?php
// require __DIR__ . '/Image.php';
namespace Classes\Models;

class Gallery
{
    public function __construct($sqlArray)
    {
        $this->setData($sqlArray);
    }
    public function setData(array $sqlArray)
    {
        foreach($sqlArray as $item){
            $galleryItem = new Image($item);
            $this->data[] = $galleryItem;
        }
    }
    public function getData()
    {
        return $this->data;
    }
}