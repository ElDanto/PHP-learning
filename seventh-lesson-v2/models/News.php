<?php
require __DIR__ . '/../classes/EditFile.php';

class News extends EditFile
{
    public $pattern = ['title', 'content', 'id'];
}