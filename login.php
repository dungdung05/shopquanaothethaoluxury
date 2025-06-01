<?php
session_start();

$thongbao = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Tài khoản admin mặc định
    $adminUser = 'admin';
    $adminPass = '123456';

    if ($user === $adminUser && $pass === $adminPass) {
        $_SESSION['user'] = ['user' => $user, 'role' => 'admin'];
        header("Location: index.php");
        exit();
    } else {
        $thongbao = "Sai tài khoản hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập Admin</title>
    <style>
        body {
            background: linear-gradient(to right,rgb(255, 255, 255),rgb(255, 255, 255));
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
        }   
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color:rgb(0, 0, 0);
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color:rgb(0, 0, 0);
        }
        .error {
            margin-top: 15px;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Đăng nhập Admin</h2>
    <form method="post">
        <input type="text" name="user" placeholder="Tên đăng nhập" required>
        <input type="password" name="pass" placeholder="Mật khẩu" required>
        <input type="submit" value="Đăng nhập">
    </form>
    <?php if (!empty($thongbao)): ?>
        <div class="error"><?= $thongbao ?></div>
    <?php endif; ?>
</div>

</body>
</html>
