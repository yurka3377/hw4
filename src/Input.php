<?php 

declare(strict_types=1);
namespace App;


class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input', 
            [ 
                'type' => [ 'text', 'checkbox', 'file' ],
                'name' => 'string',
                'value' => 'string',
                'checked' => 'novalue',
                // ...
            ],
            false   // это одинарный тэг
        );
    }
}

