<?php 

declare(strict_types=1);
namespace App;
use \App\Input;


class InputFile extends Input
{
    public function __construct($name)
    {
        parent::__construct();
        $this->setAttribute('type', 'file');
        $this->setAttribute('name', $name);
    }
}
