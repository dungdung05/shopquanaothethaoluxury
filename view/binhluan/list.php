<h3>Danh sách bình luận</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Sản phẩm</th>
        <th>Người dùng</th>
        <th>Nội dung</th>
        <th>Ngày bình luận</th>
        <th>Thao tác</th>
    </tr>
  <?php if (!empty($listbl)): ?>
    <?php foreach ($listbl as $bl): ?>
        <tr>
            <td><?= $bl['id'] ?></td>
            <td><?= $bl['idpro'] ?></td>
            <td><?= $bl['username'] ?></td>
            <td><?= $bl['noidung'] ?></td>
            <td><?= $bl['ngaybinhluan'] ?></td>
            <td>
                    <a href="index.php?act=xoabl&id=<?= $bl['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa bình luận này?');">Xóa</a>
                </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="6">Không có bình luận nào.</td></tr>
<?php endif; ?>

</table>
