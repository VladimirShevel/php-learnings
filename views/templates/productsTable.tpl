<table class="table-bordered table responsive">
    <tr>
        <th>Code</th>
        <th>Product name</th>
        <th>Product Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>{productId}</td>
        <td>{productName}</td>
        <td>{productDescription}</td>
        <td>{ProductPrice}</td>
        <td><a href="details?id={productId}" class="btn btn-default">Show Details</a>
            <a href="deleteProduct?id={productId}" class="btn btn-default">Delete this One</a>
        </td>
    </tr>
</table>