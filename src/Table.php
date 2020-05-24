<?php 

declare(strict_types=1);
namespace App;


class Td extends Tag
{
    public function __construct()
    {
        parent::__construct('td', 
            [
                'abbr' => 'string',
                'align' => [ 'left', 'center', 'right', 'justify', 'char' ],
                'axis' => 'string',
                'background' => 'string',
                'bgcolor' => 'string',
                'bordercolor' => 'string',
                'char' => 'string',
                'charof' => 'integer',
                'colspan' => 'integer',
                'headers' => 'string',
                'height' => 'string',
                'nowrap' => 'none',
                'rowspan' => 'integer',
                'scope' => [ 'col', 'colgroup', 'row', 'rowgroup' ],
                'valign' => [ 'top', 'middle', 'bottom', 'baseline' ],
                'width' => 'string'
            ]
        );
    }
}


class Tr extends Tag
{
    public function __construct()
    {
        parent::__construct('tr', 
            [
                'align' => [ 'left', 'center', 'right', 'justify', 'char' ],
                'bgcolor' => 'string',
                'bordercolor' => 'string',
                'char' => 'string',
                'charof' => 'integer',
                'valign' => [ 'top', 'middle', 'bottom', 'baseline' ]
            ]
        );
    }

    public function td($inner)
    {
        $td = new Td();
        $td->inner = $inner;
        $this->nestedTags[] = $td;
        return $td;
    }
}


class Table extends Tag
{
    public function __construct()
    {
        parent::__construct('table', 
            [ 
                'align' => [ 'left', 'center', 'right' ],
                'background' => 'string',
                'bgcolor' => 'string',
                'border' => 'integer',
                'bordercolor' => 'string',
                'cellpadding' => 'integer',
                'cellspacing' => 'integer',
                'cols' => 'integer',
                'frame' => [ 'void', 'border', 'above', 'below', 'hsides', 'vsides', 'rhs', 'lhs' ],
                'height' => 'integer',
                'rules' => [ 'all', 'groups', 'cols', 'none', 'rows' ],
                'summary' => 'string',
                'width' => 'integer'
            ]
        );
    }

    public function tr()
    {
        $tr = new Tr();
        $this->nestedTags[] = $tr;
        return $tr;
    }
}

