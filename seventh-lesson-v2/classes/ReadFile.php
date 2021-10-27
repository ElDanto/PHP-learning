<?php
class ReadFile
{
    protected $path = '';
    protected $data = [];
    protected $separator = '|';

    public function __construct($path)
    {
        $this->setData($path);
        $this->path = $path;
    }

    public function setData($path)
    {
        $raw_items = file($path, FILE_IGNORE_NEW_LINES);
        foreach($raw_items as $line) {
            $this->data[] = explode('|', $line);
        }
    }

    public function getData()
    {
        return $this->data;
    }
    public function getByID(int $id)
    {
        foreach($this->getPosts() as $post){
            if($post['id'] == $id){
                return $post;
            }
        }
    }
}