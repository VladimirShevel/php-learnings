<?php require 'views/templates/header.php'; ?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Product Details</a>
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
<form method="POST" id="edit" action="editproduct">
    <fieldset>
        <p>Product code: <?= $product->getProductId() ?></p>
        <input type="hidden" id = "productid" name="productid" value="<?= $product->getProductId() ?>">
        <input type="hidden" name="showProduct" value="1">
        <br>
        Product Name <br>
        <input type="text" size="98" value="<?php echo $product->getProductName()?>" disabled> <br>
        <br>
        Product description<br>
        <textarea disabled <?php echo $product->getProductDescription()?> rows="20" cols="100"><?php echo $product->getProductDescription()?></textarea><br>
        <br>
        Product Price <br>
        <input type="text" value="<?php echo $product->getProductPrice()?>" disabled><br>
        <br>

    </fieldset>
    <p>Product Attributes</p>

            <div>
                <table class="table table-bordered">
                    <?php 
                    
                    foreach ($product->productAttrib as $attribut => $value)
                            {
                                echo '<tr><td>'.$value->attribName.'</td><td>'.$value->attributeValue.'</td></tr>';
                            }
                    ?>
                </table>
            </div>
        </form>
    </div>
    <button id="editbtn">Edit Product</button>


<?php require 'views/templates/footer.php' ?>

<script>
    $(document).ready(function(){
        $("#editbtn").click(function(){
            $("#edit").submit();
        });
    });
</script>