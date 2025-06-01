<?php
// Hiển thị chi tiết sản phẩm và bình luận
?>

<style>
.container {
    max-width: 900px;
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
    max-width: 300px;
    border-radius: 8px;
}

.product-info {
    flex: 1;
}

.product-info h2 {
    margin-bottom: 15px;
}

.product-info p {
    margin: 10px 0;
    font-size: 16px;
}

.btn-add-cart, .btn-order {
    display: inline-block;
    padding: 12px 24px;
    border-radius: 6px;
    color: white;
    font-weight: bold;
    text-decoration: none;
    cursor: pointer;
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

/* Form bình luận */
.comment-section {
    margin-top: 40px;
}

.comment-section h3 {
    margin-bottom: 15px;
}

.comment-section form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.comment-section textarea {
    resize: vertical;
    min-height: 80px;
    padding: 10px;
    font-size: 14px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.comment-section button {
    width: 150px;
    padding: 10px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.comment-section button:hover {
    background-color: #cc5200;
}

/* Hiển thị danh sách bình luận */
.comment-list {
    margin-top: 20px;
    border-top: 1px solid #ccc;
    padding-top: 15px;
}

.comment-list .comment-item {
    border-bottom: 1px solid #eee;
    padding: 10px 0;
}

.comment-list .comment-item:last-child {
    border-bottom: none;
}

.comment-list .comment-author {
    font-weight: bold;
    margin-bottom: 5px;
}

.comment-list .comment-content {
    font-size: 14px;
}
</style>

<div class="container">
    <div class="product-detail">
        <div class="product-image">
            <img src="upload/<?= htmlspecialchars($onesp['img']) ?>" alt="<?= htmlspecialchars($onesp['name']) ?>">
        </div>
        <div class="product-info">
            <h2><?= htmlspecialchars($onesp['name']) ?></h2>
            <p><strong>Giá: </strong><?= number_format($onesp['price'], 0, ',', '.') ?> VNĐ</p>
            <p><?= nl2br(htmlspecialchars($onesp['mota'])) ?></p>
            
            <a class="btn-add-cart" href="index.php?act=addtocart&idsp=<?= $onesp['id'] ?>">Thêm vào giỏ hàng</a>
            <a class="btn-order" href="index.php?act=dat_hang&idsp=<?= $onesp['id'] ?>">Đặt hàng</a>
        </div>
    </div>

    <div class="comment-section">
        <h3>Bình luận sản phẩm</h3>
        <form action="index.php?act=post_comment&idsp=<?= $onesp['id'] ?>" method="post">
            <textarea name="noidung" placeholder="Viết bình luận..." required></textarea>
            <button type="submit">Gửi bình luận</button>
        </form>

        <div class="comment-list">
            <?php
            // Giả sử $comments chứa danh sách bình luận lấy từ database
            // Cấu trúc mỗi phần tử ví dụ: ['user' => 'Nguyễn Văn A', 'noidung' => 'Sản phẩm tốt!']
            if (!empty($comments)) {
                foreach ($comments as $comment) {
                    echo '<div class="comment-item">';
                    echo '<div class="comment-author">' . htmlspecialchars($comment['user']) . '</div>';
                    echo '<div class="comment-content">' . nl2br(htmlspecialchars($comment['noidung'])) . '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Chưa có bình luận nào.</p>';
            }
            ?>
        </div>
    </div>
</div>
