<?php
require __DIR__ . '/../classes/EditFile.php';

class Article extends EditFile
{
    public $pattern = ['title', 'content', 'id'];
    
}