<?php 

declare(strict_types=1);
namespace App;
use \App\Input;


class InputText extends Input
{
    public function __construct($name, $value)
    {
        parent::__construct();
        $this->setAttribute('type', 'text');
        $this->setAttribute('name', $name);
        $this->setAttribute('value', $value);
    }
}
