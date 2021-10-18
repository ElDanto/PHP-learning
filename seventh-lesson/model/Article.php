<?php
    class Article
    {
        public $title;
        public $content; 
        public $id;

        public function __construct($article, $counter)
        {
            $this->getItems($article, $counter);
        }
        public function getItems($article, $counter)
        {
            $this->id = !empty($article[2]) ? $article[2] : $counter;
            $this->title = !empty($article[0]) ? $article[0] : 'Title: ' . $this->id;
            $this->content = !empty($article[1]) ? $article[1] : '';
        }
    }