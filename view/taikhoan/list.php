<!-- admin/view/taikhoan/list.php -->
<h2>Danh sách tài khoản</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Vai trò</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($listtaikhoan)) : ?>
            <?php foreach ($listtaikhoan as $tk) : ?>
                <tr>
                    <td><?= htmlspecialchars($tk['id']) ?></td>
                    <td><?= htmlspecialchars($tk['user']) ?></td>
                    <td><?= htmlspecialchars($tk['email']) ?></td>
                    <td><?= htmlspecialchars($tk['address']) ?></td>
                    <td><?= htmlspecialchars($tk['tel']) ?></td>
                    <td><?= $tk['role'] == 1 ? 'Admin' : 'User' ?></td>
                    <td>
                        <a href="index.php?act=xoatk&id=<?= $tk['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                        <!-- Bạn có thể thêm sửa tài khoản nếu muốn -->
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Chưa có tài khoản nào.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
