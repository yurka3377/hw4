<?php 

declare(strict_types=1);
namespace App;

use App\Li;


class Menu extends Tag
{
    public function __construct()
    {
        parent::__construct('menu', 
            [ 
                'label' => 'string',
                'type' => [ 'context', 'toolbar', 'list' ]
            ]
        );
    }

    public function li($inner)
    {
        $li = new Li();
        $li->inner = $inner;
        $this->nestedTags[] = $li;
        return $li;
    }
}

