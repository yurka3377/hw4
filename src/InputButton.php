<?php 

declare(strict_types=1);
namespace App;
use \App\Input;


class InputButton extends Input
{
    public function __construct($value)
    {
        parent::__construct();
        $this->setAttribute('type', 'button');
        $this->setAttribute('value', $value);
    }
}
