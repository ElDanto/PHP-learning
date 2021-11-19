<?php
namespace Classes;

class Valid
{
    protected $result;

    public function __construct($data, $patterns)
    {
        $this->result = $this->checkErrors($data, $patterns);
    }

    public function isValid($value, string $pattern, array $optional = []) 
    {
        $result = null;
        switch ($pattern) {
            case 'require':
                $result = !empty($value) ? true : false;
                break;
            case 'file':
                $result = false;
                if (!empty($value) && !empty($value['size']) && $value['size'] > 0) {
                    $result = true;
                }
            case 'image':
                $result = false;
                if (!empty($value) && !empty($value['size']) && $value['size'] > 0) {
                    $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                    if (!empty($value['type']) && in_array($value['type'], $allowedTypes)) {
                        $result = true;
                    }
                }
        }
        // var_dump($result);
        return $result;
    }
    function checkErrors($data, $patterns) {
        $hasErrors = [];
        foreach ($data as $key => $value) {
 
            if (!empty($patterns[$key])) {
                $pattern = $patterns[$key];
                $multiPattern = explode('|', $pattern);
                foreach ($multiPattern as $keyOne => $patternOne) {
                    $result = $this->isValid($value, $patternOne);
                    if (!$result) {
                        $hasErrors[] = [$key => $patternOne];
                    }
                }
            }
        }

        return $hasErrors;
    }

    public function getResult()
    {
        return $this->result;
    }
} 