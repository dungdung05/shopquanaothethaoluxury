<h2>Danh sách đơn hàng</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID Đơn hàng</th>
            <th>Người đặt</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($listdanhmuc)) : ?>
            <?php foreach ($listdanhmuc as $dh) : ?>
                <tr>
                    <td><?= htmlspecialchars($dh['id']) ?></td>
                    <td><?= htmlspecialchars($dh['user_name'] ?? 'Không rõ') ?></td>
                    <td><?= htmlspecialchars($dh['ngaydat'] ?? '') ?></td>
                    <td><?= number_format($dh['tongtien'] ?? 0) ?> VND</td>
                    <td><?= htmlspecialchars($dh['trangthai'] ?? 'Chưa xử lý') ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5">Chưa có đơn hàng nào.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
