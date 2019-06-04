<?php
use App\Core\App;

class Product_attribute
{
    public $productid;
    public $attribId;

    public static function deleteProductAttribut($prId, $atrId)
    {
        $sql = "DELETE FROM product_attribute WHERE productid = {$prId} AND attributeid={$atrId}";
        App::get('database')->delete($sql);
    }

    public static function ProductAttribAllValues($product)
    {
        $productAttributes = App::get('database')->selectAttributes($product->getProductid(), 'Attribut');
        if($product->getProductAttrib()) {
            foreach ($productAttributes as $attribute)
            {
                $productAttribNames[] = $attribute->attribName;
            }
            foreach ($productAttribNames as $attribName)
            {
                $productAttribAllValues[$attribName] = Attribut::attributeValuesByName($attribName);
            }
        }
        return $productAttribAllValues;
    }
}