<?php
require __DIR__ . '/GuestBookRecord.php';

    class GuestBook
    {
        protected $data = [];
        protected $path;

        public function __construct($path){
            $this->path = $path; 
            $this->data = $this->getPosts($path);
        }
        public function getData() {
            return $this->data;
        }

        public function getPosts($path)
        {
            $data = [];
            $lines = file($path, FILE_IGNORE_NEW_LINES);
            foreach($lines as $line)
            {   
                $reviewing = explode('|', $line);
                
                $message = !empty($reviewing['1']) ? $reviewing['1'] : false;

                if($message)
                {
                    $name = !empty($reviewing['0']) ? $reviewing['0'] : 'Guest';
                    $rating = !empty($reviewing['2']) ? $reviewing['2'] : '10/10';

                    $record = new GuestBookRecord($name, $message, $rating);
                    $data[] = $record->getRecord();
                }
            }
            return $data;
        }
        public function save(){
            $data = $this->data;
            file_put_contents($this->path, $data);
        }
    }
