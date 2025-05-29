<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỏi Đáp</title>
</head>
<body>
    <div class="row">
        <div class="boxtitle">HỎI ĐÁP</div>
        <div class="row boxcontent">
            <h2>Gửi Câu Hỏi Của Bạn</h2>
            <form action="#" method="post">
                <label for="name">Họ và tên:</label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="question">Câu hỏi của bạn:</label><br>
                <textarea id="question" name="question" rows="5" required></textarea><br><br>

                <input type="submit" value="Gửi">
            </form>
        </div>
    </div>
</body>
</html>
