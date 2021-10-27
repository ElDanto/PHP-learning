<?php
require __DIR__ . '/../classes/EditFile.php';

class GuestBook extends EditFile
{
    public $pattern = ['author', 'message', 'rating'];
}