<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $sv): ?>
        <tr>
            <td><?= $sv['id'] ?></td>
            <td><?= $sv['fullname'] ?></td>
            <td><?= $sv['student_code'] ?></td>
            <td><?= $sv['email'] ?></td>
            <td>
                <a href="#">Sửa</a> |
                <a href="#">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>