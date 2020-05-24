<?php 

declare(strict_types=1);
namespace App;

class Li extends Tag
{
    public function __construct()
    {
        parent::__construct('li', 
            [ 
                'value' => 'integer',
                'type' => ['disc', 'circle', 'square', 'A', 'a', 'I', 'i', '1' ]
            ]
        );
    }
}
