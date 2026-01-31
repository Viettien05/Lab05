<div class="container mt-4">
<h2>Cập nhật sản phẩm</h2>

<form method="post" action="?page=product-update">
<input type="hidden" name="id" value="<?= $product['id'] ?>">
<input class="form-control mb-2" name="name" value="<?= $product['name'] ?>">
<input class="form-control mb-2" name="price" value="<?= $product['price'] ?>">
<input class="form-control mb-2" name="image" value="<?= $product['image'] ?>">
<textarea class="form-control mb-2" name="description"><?= $product['description'] ?></textarea>
<button class="btn btn-warning">Cập nhật</button>
</form>
</div>
