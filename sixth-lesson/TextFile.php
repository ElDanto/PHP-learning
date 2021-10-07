<?php
class TextFile
{
    public function getPosts($path){
        $file = fopen($path, 'r');
        $posts = []; 
        while(!feof($file)){
            $string = fgets($file);
            if($string && trim($string) != '' ){
                $posts[] = $string;
            }
        }
        fclose($file);
        return $posts;
    }
}
