<html lang="en">
<head>
    <title>ProductCard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="nav navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Product List</a></li>
        <li class="nav-item"><a class="nav-link" href="new_product">Add new product</a></li>
        <li class="nav-item"><a class="nav-link" href="editAtr">Add new attribut</a></li>
    </ul>
</nav>
<br>
</div>
<div class="container" style="margin-top:80px">
    <div class="card" style="width:800px">
        <div class="card-header">
            <h4>productCode: {$product->getProductId()}</h4>
        </div>
        <img class="card-img-top" src="data/images/default_image.jpg" alt="Card image"
             style=" margin-left: auto; margin-right: auto; width: 50%;">
        <div class="card-body">
            <h4 class="card-title">{$product->getProductName()}</h4>
            <p class="card-text">{$product->getProductDescription()}</p>

            {if $product->getProductAttrib()}
                <p>Product Attributes</p>
                <table class="table table-bordered">
                    {foreach from = $product->getProductAttrib() item = $attribut}
                        <tr>
                            <td>{$attribut->attribName}</td>
                            <td>{$attribut->attributeValue}</td>
                        </tr>
                    {/foreach}
                </table>
            {/if}
        </div>
        <div class="card-footer">
            <h4>Price: {$product->getProductPrice()} UAH.</h4>
        </div>
    </div>
    <br>
    <a href="edit_product?id={$product->getProductId()}" class="btn btn-primary">Edit Product</a>
    <a href="/" class="btn btn-primary">Product List</a>
</div>
</body>
</html>
