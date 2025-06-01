<h3>Danh sách bình luận</h3>
<table>
    <tr>
        <th>Nội dung</th>
        <th>Người bình luận</th>
        <th>Ngày bình luận</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($listbinhluan as $bl): ?>
    <tr>
        <td><?= $bl['noidung'] ?></td>
        <td><?= $bl['user'] ?></td>
        <td><?= $bl['ngaybinhluan'] ?></td>
        <td>
            <a href="index.php?act=xoabl&id=<?= $bl['id'] ?>">Xoá</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
