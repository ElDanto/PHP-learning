<?php
require __DIR__ . '/TextFile.php';
class GuestBook extends TextFile {
    protected $data = [];
    protected $path;

    public function __construct($path){
        $this->path = $path; 
        $this->data = $this->getPosts($path);
    }
    public function getData() {
        return $this->data;
    }
    // public function get($id) {
    //     return $this->data[$id];
    // }
    // public function getByName($name){
    //     $array = $this->data;
    //     $temp = [];
    //     foreach($array as $line){
    //         $message = explode('|', $line);
    //         if($message[0] == $name){
    //             $temp[] = $message;
    //         }
    //     }
    //     return $temp;
    // }
    public function append($message, $name = "Guest", $rating = "10"){
        $line = ''; 
        if(!empty($message)){
            $line = "\n".  $name . '|' . $message . '|' . $rating . '/10';
        }
        if(!empty($line)){
            $this->data[] = $line;
        }
    }
    public function save(){
        $data = $this->data;
        file_put_contents($this->path, $data);
    }
} 