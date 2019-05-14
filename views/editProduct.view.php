<?php require 'views/templates/header.php'; ?>
    <script src="views/js/edit.view.js"></script>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Edit product Page</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/">Product List</a></li>
                <li><a href="addprod">Add new product</a></li>
                <li><a href="editAtr">Add new attribut</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <div>
<form method="POST" id="edit" action="editproduct" enctype="multipart/form-data" >
    <fieldset>
        <p>Product code: <?= $product->getProductId() ?></p>
        <input type="hidden" id = "productid" name="productid" value="<?= $product->getProductId() ?>">
        <input type="hidden" name="editProduct" value="1">
        <br>
        Product Name <br>
        <input type="text" size="98" name="name" value="<?php echo $product->getProductName()?>" required> <br>
        <br>
        Product description<br>
        <textarea name="description" <?php echo $product->getProductDescription()?> rows="20" cols="100"><?php echo $product->getProductDescription()?></textarea><br>
        <br>
        Product Price <br>
        <input type="text"  name="price" value="<?php echo $product->getProductPrice()?>">UAH<br>
        <br>

    </fieldset>
    <p>Product Attributes</p>
    <div>
        <table id="myTable" class="table table-bordered">
                    <input type='hidden' name='_ATTRIBUTES_'>
                    <?php
                        $counter = 1;
                            foreach ($product->productAttrib as $attribut => $value)
                            {
                                if ($value == null) break;
                                echo '<input name="attribName' . $counter . '" type="hidden" value="' . $value->attribName . '">';
                                echo '<div><tr><td>'.$value->attribName.'</td>';
                                echo '<td><select id="attribValue'.$counter .'" name="attribValue' . $counter . '"><option>' . $value->attributeValue . '</option>';
                                foreach ($productAttribAllValues as $attribName => $attribValues)
                                {
                                    if ($attribName == $value->attribName)
                                    {
                                        foreach ($attribValues as $attribvalue)
                                        {
                                            if (!($attribvalue == $value->attributeValue))
                                            echo "<option>{$attribvalue}</option>";
                                        }
                                    }
                                }
                            echo '</select></td><td><a href="http://php-learnings/deleteAtr?id='.$product->getProductId().'&attribut='.$value->code.'" title="delete">delete</a></td></tr></div>';
                            $counter++;
                            }
                    ?>
                    <tr id="new_attrib" name=""></tr>
                </table>
            </div>
        </form>
    </div>
    <button id="btn1">Add new Attribut</button><button id="setAttribute">Save Changes</button>
    <br>
<?php require 'views/templates/footer.php'; ?>