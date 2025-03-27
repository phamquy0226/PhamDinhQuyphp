<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ece9e6, #ffffff);
            min-height: 100vh;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 15px;
        }
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }
        .btn-primary {
            background: #4caf50;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: #45a049;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .category-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: all 0.3s ease;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }
        .category-name {
            font-weight: 600;
            color: #34495e;
            font-size: 1.5rem;
            margin-bottom: 15px;
            height: 2.4em;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .description {
            color: #7f8c8d;
            font-size: 1rem;
            margin-bottom: 20px;
            height: 3em;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .btn-action {
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 1rem;
            width: auto;
        }
        .btn-warning {
            background: #f39c12;
            border: none;
        }
        .btn-warning:hover {
            background: #e67e22;
        }
        .btn-danger {
            background: #e74c3c;
            border: none;
        }
        .btn-danger:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <h1>Danh sách danh mục</h1>
            <a href="?controller=category&action=add" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Thêm danh mục
            </a>
        </div>

        <div class="category-grid">
            <?php foreach ($categories as $category): ?>
            <div class="category-card">
                <div class="category-name"><?= htmlspecialchars($category['name']) ?></div>
                <div class="description"><?= htmlspecialchars($category['description'] ?? 'Không có mô tả') ?></div>
                <div class="action-buttons">
                    <a href="?controller=category&action=edit&id=<?= $category['id'] ?>" class="btn btn-warning btn-action">
                        <i class="fas fa-edit"></i> Sửa
                    </a>
                    <a href="?controller=category&action=delete&id=<?= $category['id'] ?>" class="btn btn-danger btn-action" 
                       onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>