<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            color: #333;
        }
        h1 {
            color: #333;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .btn-primary {
            background: #6a11cb;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background: #2575fc;
            box-shadow: 0 4px 15px rgba(37, 117, 252, 0.4);
        }
        .form-control {
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 10px 15px;
            font-size: 1rem;
        }
        label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        .btn-link {
            color: #6a11cb;
            font-weight: 500;
            text-decoration: none;
        }
        .btn-link:hover {
            color: #2575fc;
            text-decoration: underline;
        }
        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h1>Chỉnh sửa danh mục</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" action="?controller=category&action=edit&id=<?= $category['id'] ?>">
            <input type="hidden" name="id" value="<?= $category['id'] ?>">
            <div>
                <label for="name">Tên danh mục:</label>
                <input type="text" id="name" name="name" class="form-control" 
                       value="<?= htmlspecialchars($category['name']) ?>" required>
            </div>
            <div>
                <label for="description">Mô tả:</label>
                <textarea id="description" name="description" class="form-control" rows="4"><?= htmlspecialchars($category['description'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-2"></i>Cập nhật danh mục
            </button>
        </form>
        <a href="?controller=category&action=index" class="btn btn-link mt-3 d-block text-center">Quay lại</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>