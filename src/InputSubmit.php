<?php 

declare(strict_types=1);
namespace App;
use \App\Input;



class InputSubmit extends Input
{
    public function __construct($name, $value)
    {
        $this->setAttribute('type', 'submit');
        $this->setAttribute('name', $name);
        $this->setAttribute('value', $value);
    }
}
