<?php
    require __DIR__ . '/Article.php';

    class News
    {
        protected $data = [];
        public $posts = [];

        public function __construct($path)
        {
            $this->data = file($path, FILE_IGNORE_NEW_LINES);
        }

        public function getData()
        {
            return $this->data;
        }

        public function getPosts()
        {
            $counter = 0;
            foreach($this->data as $post)
            {
                $article = explode('|', $post);
                $counter = $counter + 1;
                if(!empty($article[1]))
                {
                    $this->posts[] = new Article($article, $counter);
                }   
            }
            return $this->posts;
        }
        public function getPostByID($id)
        {            
            foreach($this->getPosts() as $post)
            {
                if($post->id == $id)
                {
                    return $post;
                }
            }

        }
    }