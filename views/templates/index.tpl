<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>TEST</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="nav navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Product List</a></li>
        <li class="nav-item"><a class="nav-link" href="new_product">Add new product</a></li>
        <li class="nav-item"><a class="nav-link" href="editAtr">Add new attribut</a></li>
    </ul>
</nav>

<div class="container" id="pagination" style="margin-top:80px">
    <h4>Products: {$paginate.first}-{$paginate.last} of {$paginate.total} displayed.</h4>

    <table class="table-bordered table-sm">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price/uah</th>
        <th>Actions</th>
        </thead>
        <tbody>
        {foreach from = $results item = $result}
            <tr>
                <td>{$result->getProductId()}</td>
                <td>{$result->getProductName()}</td>
                <td>{substr($result->getProductDescription(), 0, 100)}...</td>
                <td>{$result->getProductPrice()}</td>
                <td><a href="details?id={$result->getProductId()}" title="ProductCard"><i class="fas fa-info-circle"></i></a>
                    <a href="edit_product?id={$result->getProductId()}" title="EditProduct"><i class="fas fa-pen-square"></i></a>
                    <a href="deleteProduct?id={$result->getProductId()}" title="DeleteProduct"><i class="fas fa-trash-alt"></i></a>

                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <div align="center">
    {paginate_prev} {paginate_middle} {paginate_next}
    </div>
</div>
</body>

</html>