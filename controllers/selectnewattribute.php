<?php
use App\Core\App;
    if (isset($_POST["id"]))
    {
        $productID = $_POST["id"];
        $productAttributes = App::get('database')->selectAttributes($productID, 'Attribut');

    $atrNumber = count($productAttributes)+1;

    foreach ($productAttributes as $attribute)
    {
        if ($attribute->code===null) {
            $atrNumber --; break;
        }
        $productAttribNames[] = $attribute->attribName;
    }

    $allAttributesNames = APP::get('database')->selectColumn('attribute','attribName');

    $allAttributesNames = ($productAttribNames) ? array_diff($allAttributesNames, $productAttribNames) : $allAttributesNames;

    foreach ($allAttributesNames as $attribName)
    {
        $selectAtribute[$attribName]=Attribut::attributeValuesByName($attribName);
    }

    $html = '<select id="nextAttribName" name = "attribName'. + ($atrNumber) .'">
    <option>Chose Attribute</option>';
    foreach($allAttributesNames as $name) {
        $html.='<option>'. $name . '</option>';
    }
    $html.='</select>';
    $data["nextAtr"] = $atrNumber;
    $data["text"] = $html;
    $data["json"] = $selectAtribute;

    echo  json_encode($data,JSON_UNESCAPED_SLASHES);

    }




























