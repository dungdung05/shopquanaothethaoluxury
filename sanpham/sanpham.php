<h1>Danh sách sản phẩm</h1>

<form action="index.php?act=sanpham" method="post">
    <input type="text" name="kyw" placeholder="Tìm kiếm..." value="<?= isset($kyw) ? htmlspecialchars($kyw) : '' ?>">
    <button type="submit">Tìm</button>
</form>

<?php if (!empty($dssp)): ?>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php foreach ($dssp as $sp): ?>
            <div style="border: 1px solid #ddd; padding: 10px; width: 200px;">
                <a href="index.php?act=sanphamct&idsp=<?= $sp['id'] ?>">
                    <img src="upload/<?= htmlspecialchars($sp['img']) ?>" alt="<?= htmlspecialchars($sp['name']) ?>" width="180" height="180" style="object-fit: contain;">
                    <h3><?= htmlspecialchars($sp['name']) ?></h3>
                </a>
                <p>Giá: <?= number_format($sp['price']) ?> VNĐ</p>
                <a href="index.php?act=addtocart&idsp=<?= $sp['id'] ?>">Thêm vào giỏ hàng</a>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>Không có sản phẩm nào.</p>
<?php endif; ?>
