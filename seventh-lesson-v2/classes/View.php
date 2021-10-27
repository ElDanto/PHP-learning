<?php
class View
{
    protected $data = [];

    public function __construct()
    {

    }

    public function assign(string $key, $value)
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function display(string $template)
    {
        if(!empty($this->data))
        {   
            $data = $this->data;
            include $template; 
        }
    }

    public function render(string $template) :string
    {
        $render = '';
        ob_start();
            if(!empty($this->data)){
                $data = $this->data;
                include $template;
            }
            $render = ob_get_contents();
        ob_end_clean();
        
        return $render;
    }
}