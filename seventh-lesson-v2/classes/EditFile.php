<?php 
require __DIR__ . '/../classes/ReadFile.php';

class EditFile extends ReadFile
{
    public function getPosts()
    {
        $data = [];
        foreach ($this->getData() as $record) {
            $tempRecord = [];
            foreach($record as $key => $item){
                $tempRecord[$this->pattern[$key]] = $item;
                
            }
            $data[] = $tempRecord;
        }

        return $data;
    }

    /**
     * Add Record
     * [
     *  'title',
     *  'description',
     *  'other_field',
     *  .....
     * ]
     *
     * @param array $item
     * @return bool
     */
    public function addRecord(array $item, string $separator = '|')
    {
        $this->separator = $separator;
        $raw = implode($separator, $item). "\n";
        $result = file_put_contents($this->path, $raw, FILE_APPEND);
        // if($result){
        //     return true;
        // }else{
        //     return false;
        // }
        return $result;
    }
}