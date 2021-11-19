<?php
namespace Classes;

class Uploader
{
    protected $inputName;
    protected $dirName;
    protected $newFileName = false;

    public function __construct(string $inputName, $dirName = '/../uploads/'){
        $this->inputName = $inputName;
        $this->dirName = $dirName;
        return $this;
    }

    public function isUploaded(){
        if(!empty($_FILES)){
            if(isset($_FILES[$this->inputName]) && $_FILES[$this->inputName]['error'] === 0){
                return true;
            }else{
                return false;
            }
        }
    }
    public function upload(){
        $inputName = $this->inputName;
        $dir = __DIR__ . $this->dirName;
        // if (!file_exists($dir)) {
        //     mkdir($dir);
        // }
        if($this->isUploaded()){
            if (0 === $_FILES[$inputName]['error']) {
                $name = $_FILES[$inputName]['name'];
                $file = $_FILES[$inputName]['tmp_name'];
                move_uploaded_file($file, $dir . DIRECTORY_SEPARATOR  . $name);
                $this->newFileName = $name;
            }
        }
        return $this;
    }
    public function getUploadedFileName() {
        return $this->newFileName;
    }
}