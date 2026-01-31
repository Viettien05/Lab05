<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-3">Danh sách sản phẩm</h2>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= number_format($item['price']) ?> VNĐ</td>
                <td>
                    <img src="<?= $item['image'] ?>" width="80">
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                    <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
<a 
  href="index.php?page=product-delete&id=<?= $item['id'] ?>"
  class="btn btn-sm btn-danger"
  onclick="return confirm('Bạn có chắc muốn xóa không?')"
>
  Xóa
</a>

<a 
  href="index.php?page=product-detail&id=<?= $item['id'] ?>"
  class="btn btn-sm btn-info"
>
  Chi tiết
</a>