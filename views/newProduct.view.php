<?php require 'views/templates/header.php'; ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Product Details</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/">Product List</a></li>
            <li><a href="editAtr">Add new attribut</a></li>
        </ul>
    </div>
</nav>
<div class="container">
<div>
<form method="POST" id="edit" action="insertProd">
    <fieldset>
        <br>
        Product Name <br>
        <input type="text" name="productName"> <br>
        <br>
        Product description<br>
        <textarea name="productDescription" rows="5" cols="40"></textarea><br>
        <br>
        Product Price <br>
        <input type="text" name="productPrice"><br>
        <br>

    </fieldset>
    <input type="submit" name="submit" value="Add prod">
        </form>
<?php require 'views/templates/footer.php' ?>