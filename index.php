<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Tag;
use App\Ul;
use App\Menu;
use App\Table;
use App\InputText;
use App\InputSubmit;
use App\InputCheckbox;
use App\InputFile;

$menu = new Menu();
$menu->setAttribute('type', 'list');
$menu->setAttribute('label', 'MainMenu');
$menu->li('Каталог');
$menu->li('Новости');
$menu->li('Контакты');
echo $menu->getView()."\n";


$ul = new Ul();
$ul->setAttribute('type', 'disc');
$ul->li('пихта');
$ul->li('сосна');
$ul->li('кедр');
echo $ul->getView()."\n";


$table = new Table();
$table->setAttribute('border', 2)
        ->setAttribute('align', 'center');
$row = $table->tr()->setAttribute('align', 'left');   
    $row->td('1');
    $row->td('2');
    $row->td('3');
$row = $table->tr()->setAttribute('align', 'center');
    $row->td('4');
    $row->td('5');
    $row->td('6');
echo $table->getView()."\n";

$inputText = new InputText("firstName", 'Vasa');
echo $inputText->getView()."\n";

$inputCheckbox = new InputCheckbox("lang", 'PHP', false);
echo $inputCheckbox->getView()."\n";

$inputFile = new InputFile("image");
echo $inputFile->getView()."\n";