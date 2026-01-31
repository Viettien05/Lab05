<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
<h2>Danh sách sản phẩm</h2>
<a href="?page=product-add" class="btn btn-success mb-2">➕ Thêm mới</a>

<table class="table table-bordered">
<tr>
<th>ID</th><th>Tên</th><th>Giá</th><th>Hình</th><th>Hành động</th>
</tr>

<?php foreach ($products as $p): ?>
<tr>
<td><?= $p['id'] ?></td>
<td><?= $p['name'] ?></td>
<td><?= number_format($p['price']) ?></td>
<td><img src="<?= $p['image'] ?>" width="60"></td>
<td>
<a href="?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-info btn-sm">Xem</a>
<a href="?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
<a href="?page=product-delete&id=<?= $p['id'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Xóa?')">Xóa</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>