<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhân Sự</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header nav {
            display: flex;
            gap: 20px;
        }
        .header nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        .header nav a:hover {
            color: #d4f1d4;
        }
        .header nav a.active {
            font-weight: bold;
            border-bottom: 2px solid white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Quản Lý Nhân Sự</div>
        <nav>
            <a href="index.php?controller=employee&action=index" class="active">Danh Sách Nhân Viên</a>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'): ?>
                <a href="index.php?controller=employee&action=add">Thêm Nhân Viên</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="index.php?controller=auth&action=logout">Đăng Xuất (<?php echo htmlspecialchars($_SESSION['user']['fullname']); ?>)</a>
            <?php else: ?>
                <a href="index.php?controller=auth&action=login">Đăng Nhập</a>
            <?php endif; ?>
        </nav>
    </div>
</body>
</html>