<style>
    .container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .product-detail {
        display: flex;
        gap: 30px;
        margin-bottom: 30px;
    }

    .product-image img {
        max-width: 350px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .product-info {
        flex: 1;
    }

    .product-info h2 {
        margin-bottom: 15px;
        font-size: 26px;
        color: #333;
    }

    .product-info p {
        margin: 8px 0;
        font-size: 16px;
    }

    .btn-add-cart, .btn-order {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        margin-top: 15px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-add-cart {
        background-color: #007bff;
    }

    .btn-add-cart:hover {
        background-color: #0056b3;
    }

    .btn-order {
        background-color: #28a745;
        margin-left: 10px;
    }

    .btn-order:hover {
        background-color: #1e7e34;
    }

    .comment-section {
        margin-top: 40px;
    }

    .comment-section h3 {
        margin-bottom: 15px;
        font-size: 22px;
        color: #333;
    }

    .comment-section form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
    }

    .comment-section textarea {
        resize: vertical;
        min-height: 80px;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .comment-section input[type="submit"] {
        width: 160px;
        padding: 10px;
        background-color: #ff6600;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .comment-section input[type="submit"]:hover {
        background-color: #cc5200;
    }

    .comment-list {
        border-top: 1px solid #ccc;
        padding-top: 15px;
    }

    .comment-item {
        border-bottom: 1px solid #eee;
        padding: 10px 0;
    }

    .comment-item:last-child {
        border-bottom: none;
    }

    .comment-author {
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    .comment-content {
        font-size: 14px;
        color: #444;
    }

    .no-comments {
        font-style: italic;
        color: #777;
    }
</style>

<div class="container">
    <div class="product-detail">
        <div class="product-image">
            <img src="upload/<?= htmlspecialchars($onesp['img'] ?? '') ?>" alt="<?= htmlspecialchars($onesp['name'] ?? '') ?>">
        </div>
        <div class="product-info">
            <h2><?= htmlspecialchars($onesp['name'] ?? '') ?></h2>
            <p><strong>Giá:</strong> <?= number_format($onesp['price'] ?? 0, 0, ',', '.') ?> VNĐ</p>
            <p><?= nl2br(htmlspecialchars($onesp['mota'] ?? '')) ?></p>
            <a class="btn-add-cart" href="index.php?act=addtocart&idsp=<?= $onesp['id'] ?? 0 ?>">Thêm vào giỏ hàng</a>
            <a class="btn-order" href="index.php?act=dat_hang&idsp=<?= $onesp['id'] ?? 0 ?>">Đặt hàng</a>
        </div>
    </div>

    <div class="comment-section">
        <h3>Bình luận sản phẩm</h3>
        <?php if (isset($_SESSION['user'])): ?>
            <form action="index.php?act=sanphamct&idsp=<?= $onesp['id'] ?? 0 ?>" method="post">
                <textarea name="noidung" placeholder="Viết bình luận..." required></textarea>
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        <?php else: ?>
            <p>Vui lòng <a href="index.php?act=dangnhap">đăng nhập</a> để bình luận!</p>
        <?php endif; ?>

        <div class="comment-list">
            <?php
            if (!empty($dsbl)) {
                foreach ($dsbl as $comment) {
                    echo '<div class="comment-item">';
                    echo '<div class="comment-author">' . htmlspecialchars($comment['username'] ?? '') . '</div>';
                    echo '<div class="comment-content">' . nl2br(htmlspecialchars($comment['noidung'] ?? '')) . '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="no-comments">Chưa có bình luận nào.</p>';
            }
            ?>
        </div>
    </div>
</div>
