<?php
class Uploader {
    protected $input_name;
    protected $new_file_path = false;
    public function __construct($input_name){
        $this->input_name = $input_name; 
    }
    public function isUploaded(){
        if(!empty($_FILES)){
            if(isset($_FILES[$this->input_name])){
                return true;
            }else{
                return false;
            }
        }
    }
    public function upload(){
        $input_name = $this->input_name;
        $date = date("d.m.Y");
        $dir = __DIR__ . '/images/' . $date;
        if (!file_exists($dir)) {
            mkdir($dir);
        }
        if($this->isUploaded()){
            if (0 === $_FILES[$input_name]['error']) {
                $name = $_FILES[$input_name]['name'];
                $file = $_FILES[$input_name]['tmp_name'];
                move_uploaded_file($file, $dir . DIRECTORY_SEPARATOR  . $name);
                $this->new_file_path = $dir . DIRECTORY_SEPARATOR  . $name;
            }
        }
        return $this;
    }
    public function getUploadedFilePath() {
        return $this->new_file_path;
    }
}