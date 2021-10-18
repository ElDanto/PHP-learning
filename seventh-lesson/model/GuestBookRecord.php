<?php
    class GuestBookRecord
    {
        public $author; 
        public $message;
        public $rating;

        protected $data = [];

        public function __construct(string $author, $message, $rating)
        {
            $this->data = [
                'author'    => $author,
                'message'   => $message,
                'rating'    => $rating, 
            ];
            return $this;
        }
        public function getRecord() {
            return $this->data;
        }
    }