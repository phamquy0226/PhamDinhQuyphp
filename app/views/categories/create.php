<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 500px;
            width: 100%;
            padding: 15px;
        }
        .form-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }
        h1 {
            color: #1a1a1a;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .btn-primary {
            background: #4caf50;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background: #45a049;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        .form-control {
            border-radius: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
        }
        label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }
        .btn-link {
            color: #4caf50;
            text-decoration: none;
            font-weight: 500;
        }
        .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h1>Thêm danh mục</h1>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form method="POST" action="?controller=category&action=add">
                <div>
                    <label for="name">Tên danh mục:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên danh mục" required>
                </div>
                <div>
                    <label for="description">Mô tả:</label>
                    <textarea id="description" name="description" class="form-control" placeholder="Nhập mô tả danh mục" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Thêm danh mục
                </button>
            </form>
            <a href="?controller=category&action=index" class="btn btn-link mt-3 d-block text-center">Quay lại</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>