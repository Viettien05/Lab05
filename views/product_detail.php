<div class="container mt-4">
<h2><?= $product['name'] ?></h2>
<img src="<?= $product['image'] ?>" width="200">
<p>Giá: <?= number_format($product['price']) ?></p>
<p><?= $product['description'] ?></p>
<a href="?page=product-list" class="btn btn-secondary">⬅ Quay lại</a>
</div>
