<?php
use App\Core\App;
    if (isset($_POST["id"])) { //Checks if action value exists
        $productID = $_POST["id"];

    try {
            $productAttributes = App::get('database')->selectAttributes($productID, 'Attribut');
        }
    catch(Exception $e)
    {
       // header('Location /');
    }

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




























