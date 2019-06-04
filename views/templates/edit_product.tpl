<html lang="en">
<head>
    <title>ProductCard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/views/js/Image_Preview/jpreview.css">

    {*<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>*}
    {*<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>*}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="/views/js/add_product_attribute.js"></script>
    <script src="/views/js/Image_Preview/bootstrap-prettyfile.js"></script>
    <script src="/views/js/Image_Preview/jpreview.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Product Details</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Product List</a></li>
            <li class="nav-item"><a class="nav-link" href="../../index.php">Add new attribut</a></li>
        </ul>
    </div>
</nav>
<div class="container">
<form method="POST" id="edit" action="update_product">
    <fieldset>
        <input type="hidden" id = "productid" name="productid" value="{$product->getProductId()}">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="productName" value="{$product->getProductName()}">
        </div>
        <div class="form-group">
            <label>Product description</label>
            <textarea class="form-control" name="productDescription" rows="15">{$product->getProductDescription()}</textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" size="15" name="productPrice" value="{$product->getProductPrice()}">UAH<br>
        </div>
        {*{if !empty($product->getProductAttrib())}*}
        <p>Product Attributes</p>
        <div>
            <table id="myTable" class="table table-bordered">
                <input type='hidden' name='_ATTRIBUTES_'>
                {foreach from = $product->getProductAttrib() key = $index item = $prod_attribute}
                    {if (item == null)}
                        {break}
                    {/if}
                    <input name="attribName{$index}" type="hidden" value="{$prod_attribute->attribName}">
                    <div>
                        <tr>
                            <td>{$prod_attribute->attribName}</td>
                            <td>
                                {foreach from = $productAttribAllValues key = $attribute  item = $attribute_values}
                                    {if $attribute == $prod_attribute->attribName}
                                        <select name="attribValue{$index}">
                                            <option>{$prod_attribute->attributeValue}</option>
                                            {foreach from = $attribute_values item = $value}
                                                {if $value!=$prod_attribute->attributeValue}
                                                    <option>{$value}</option>
                                                {/if}

                                            {/foreach}
                                        </select>
                                    {/if}
                                {/foreach}
                            </td>
                            <td>
                                <a href="deleteAtr?id={$product->getProductId()}&attribut={$prod_attribute->code}" title="delete">delete</a>
                            </td>
                        </tr>
                    </div>
                {/foreach}
                <tr id="new_attrib" name=""></tr>
            </table>
        </div>
        {*{/if}*}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Add images</span>
            </div>
            <div class="custom-file">
                <input type="file" name="pictures[]" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01" multiple data-jpreview-container="#demo-1-container">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <div id="demo-1-container" class="jpreview-container"></div>
    </fieldset>

    {*<button type="submit" name="submit" class="btn btn-primary mb-2">Save</button>*}
</form>
</div>

<div class="container">
<button id="btn1" class="btn btn-primary mb-2">Add new Attribut</button>  <button id="setAttribute" class="btn btn-primary mb-2">Save Changes</button>
</div>

<script>

</script>



<script>
    $('input[type="file"]').prettyFile();
    $('.custom-file-input').jPreview();
</script>

</body>
</html>