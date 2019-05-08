<?php
use App\Core\App;
Class Attribut {

    public $code;
    public $attribName;
    public $attributeValue;

    public static function attributeValuesByName($attributeName)
    {
        return (APP::get('database'))->selectColumnByColumnValue('attributeValue','attribute','attribName',$attributeName);
    }

    public static function getAttributeByNameValue($name, $value)
    {
        (App::get('database'))->selectToClassBySQL('SELECT * from attribute WHERE attribName = "'.$name.'" and attributeValue = "'.$value.'" ORDER BY attribName','Attribut');
        return ;
    }


    public function getCode(){}



}