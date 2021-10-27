<?php
require __DIR__ . '/../classes/EditFile.php';

class Uploader extends EditFile
{
    protected $inputName;
    protected $dirName;
    protected $newFilePath = false;

    public function setUploadData(string $inputName, $dirName = '/../uploads/'){
        $this->inputName = $inputName;
        $this->dirName = $dirName;
        return $this;
    }

    public function isUploaded(){
        if(!empty($_FILES)){
            if(isset($_FILES[$this->inputName])){
                return true;
            }else{
                return false;
            }
        }
    }
    public function upload(){
        $inputName = $this->inputName;
        $date = date("d.m.Y");
        $dir = __DIR__ . $this->dirName . $date;
        // var_dump($dir);
        if (!file_exists($dir)) {
            mkdir($dir);
        }
        if($this->isUploaded()){
            if (0 === $_FILES[$inputName]['error']) {
                $name = $_FILES[$inputName]['name'];
                $file = $_FILES[$inputName]['tmp_name'];
                move_uploaded_file($file, $dir . DIRECTORY_SEPARATOR  . $name);
                $this->newFilePath = $dir  . DIRECTORY_SEPARATOR  . $name;
            }
        }
        return $this;
    }
    public function getUploadedFilePath() {
        return $this->newFilePath;
    }
}