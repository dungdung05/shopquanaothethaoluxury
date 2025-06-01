<h3>Danh sách bình luận</h3>
<table >
    <tr>
        <th>Sản phẩm</th>
        <th>Nội dung</th>
        <th>Người dùng</th>
        <th>Ngày bình luận</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($listbinhluan as $bl): ?>
        <tr>
            <td><?= $bl['tensp'] ?></td>
            <td><?= $bl['noidung'] ?></td>
            <td><?= $bl['user'] ?></td>
            <td><?= $bl['ngaybinhluan'] ?></td>
            <td><a href="index.php?act=xoabl&id=<?= $bl['id'] ?>">Xoá</a></td>
        </tr>
    <?php endforeach; ?>
</table>
