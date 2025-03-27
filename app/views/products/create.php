<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            color: #333;
        }
        h1 {
            color: #333;
            font-size: 2rem;
            font-weight: 700;
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
            box-shadow: 0 4px 15px rgba(37, 117, 252, 0.5);
        }
        .form-control, .form-control-file {
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 10px;
        }
        label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }
        .alert {
            border-radius: 10px;
        }
        .btn-link {
            color: #6a11cb;
            font-weight: 600;
            text-decoration: none;
        }
        .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h1>Thêm sản phẩm</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" action="?controller=product&action=add" enctype="multipart/form-data">
            <div>
                <label for="name">Tên sản phẩm:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
            </div>
            <div>
                <label for="price">Giá:</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Nhập giá (VNĐ)" required>
            </div>
            <div>
                <label for="description">Mô tả:</label>
                <textarea id="description" name="description" class="form-control" placeholder="Nhập mô tả sản phẩm" rows="4"></textarea>
            </div>
            <div>
                <label for="category_id">Danh mục:</label>
                <select id="category_id" name="category_id" class="form-control">
                    <option value="">Chọn danh mục</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="image">Hình ảnh:</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Thêm sản phẩm
            </button>
        </form>
        <a href="?controller=product&action=index" class="btn btn-link mt-3 d-block text-center">Quay lại</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>