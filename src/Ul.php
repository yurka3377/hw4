<?php 

declare(strict_types=1);
namespace App;

class Ul extends Tag
{
    public function __construct()
    {
        parent::__construct('ul', 
            [ 
                'type' => ['disc', 'circle', 'square' ]
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
