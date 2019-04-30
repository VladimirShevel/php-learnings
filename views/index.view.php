<?php require 'views/templates/header.php'; ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Product List</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="addprod">Add new product</a></li>
                <li><a href="editAtr">Add new attribut</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <?php if(!$allProducts) echo '<h2>Trere are no any products in DB, please Add some<h2>' ?>
    <table class="table-bordered table responsive">
      <?php
        foreach ($allProducts as $data => $row)
            {
                echo '<tr><td>'.$row->getProductName().'</td>';
                echo '<td>'.$row->getProductDescription().'</td>';
                echo '<td>'.$row->getProductPrice().'</td>';
                echo '<td><a href="details?id='.$row->getProductId().'" class="btn btn-default">Show Details</a>
<a href="deleteProduct?id='.$row->getProductId().'" class="btn btn-default">Delete this One</a></td></tr>';
            }
      ?>
    </table>
    <div id="pagination">

        <?php if ($currentpage != 1) { ?>
            <a href="/" title="First Page">First</a>
            <a href="<?php if ($currentpage == 2) { ?><?=$url?><?php } else { ?><?=$url_page.($currentpage - 1)?><?php } ?>" title="Previous Page">Prev</a>
        <?php } ?>
        <?php for ($i = $start; $i <= $end; $i++) { ?>
            <?php if ($i == $currentpage) { ?><span><?=$i?></span><?php } else { ?><a href="<?php if ($i == 1) { ?><?=$url?><?php } else { ?><?=$url_page.$i?><?php } ?>"><?=$i?></a><?php } ?>
        <?php } ?>
        <?php if ($currentpage != $totalpages) { ?>
            <a href="<?=$url_page.($currentpage + 1)?>" title="Next Page">Next</a>
            <a href="<?=$url_page.$totalpages?>" title="Last Page">Last</a>
        <?php } ?>
    </div>

<?php require 'views/templates/footer.php'; ?>