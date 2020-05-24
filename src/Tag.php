<?php 

declare(strict_types=1);
namespace App;


class Tag implements ViewInterface
{
    protected $tagName;
    protected $isPair;
    protected $availableAtributes;
    protected $usedAttributes;
    protected $inner;

    public function __construct(string $tagName, $availableAttributes, $isPair=true)
    {
        $this->tagName = $tagName;
        $this->isPair = $isPair;
        $this->availableAttrbutes = $availableAttributes;
        $this->usedAttributes = [];
        $this->nestedTags = [];
        $this->inner = '';
    }

    public function setAttribute($attribute, $value = '')
    {
        if (!array_key_exists($attribute, $this->availableAttrbutes)){
            throw new \RuntimeException(sprintf('Неизвестный атрибут %s="%s"', $attribute, $value));
        }
        if (is_array($this->availableAttrbutes[$attribute])){
            if (!in_array($value, $this->availableAttrbutes[$attribute])){
                throw new \RuntimeException(sprintf('Неверное значение атрибута %s="%s"', $attribute, $value));
            }
        }else{
            if ($this->availableAttrbutes[$attribute] === "integer" && !is_int($value)){
                throw new \RuntimeException(sprintf('Значение атрибута должно быть целым числом %s="%s"', $attribute, $value));
            }
        }
        $this->usedAttributes[$attribute] = $value;
        return $this;
    }
 
    public function getAttribute($attribute)
    {
        $res = '';
        if (array_key_exists($attribute, $this->attributes)){
            $res = $this->usedAttributes[$attribute];
        }
        return $res;
    }

    public function getView(string $inner = ''): string
    {
        if (strlen($inner) > 0){
            $this->inner = $inner;
        }
        $attributes = '';
        foreach ($this->usedAttributes as $key => $value) {
            if ($this->availableAttrbutes[$key] === "novalue"){
                $attributes .= $key;
            }else{
                $attributes .= sprintf('%s="%s" ', $key, $value);
            }
            
        }
        $nestedTags = '';
        foreach ($this->nestedTags as $t) {
            $nestedTags .= $t->getView();
        }
        if ($this->isPair){
            $res = \sprintf('<%s %s>%s %s</%s>', $this->tagName, $attributes, $this->inner, $nestedTags, $this->tagName);
        }else{
            $res = \sprintf('<%s %s>', $this->tagName, $attributes);
        }
        return $res;
    }

}
