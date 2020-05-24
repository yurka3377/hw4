<?php 

declare(strict_types=1);
namespace App;
use \App\Input;


class InputCheckbox extends Input
{
    public function __construct($name, $value, $isChecked=false)
    {
        parent::__construct();
        $this->setAttribute('type', 'checkbox');
        $this->setAttribute('name', $name);
        $this->setAttribute('value', $value);
        if ($isChecked){
            $this->setAttribute('checked');
        }
    }
}
