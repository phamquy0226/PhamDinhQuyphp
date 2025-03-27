<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Nhân Viên</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #4CAF50;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: 500;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #eafaf1;
        }
        img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: 500;
        }
        a:hover {
            text-decoration: underline;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #4CAF50;
            transition: background-color 0.3s, color 0.3s;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }
        .pagination a:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<?php require_once 'app/views/shares/header.php'; ?>
    <h2>THÔNG TIN NHÂN VIÊN</h2>
    
    <table>
        <tr>
            <th>Mã Nhân Viên</th>
            <th>Tên Nhân Viên</th>
            <th>Giới tính</th>
            <th>Nơi Sinh</th>
            <th>Tên Phòng</th>
            <th>Lương</th>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'): ?>
                <th>Hành Động</th>
            <?php endif; ?>
        </tr>
        
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?php echo htmlspecialchars($employee['Ma_NV']); ?></td>
                <td><?php echo htmlspecialchars($employee['Ten_NV']); ?></td>
                <td>
                    <?php
                    if ($employee['Phai'] == 'NU') {
                        echo '<img src="public/images/woman.png" alt="Woman">';
                    } else {
                        echo '<img src="public/images/man.png" alt="Man">';
                    }
                    ?>
                </td>
                <td><?php echo htmlspecialchars($employee['Noi_Sinh']); ?></td>
                <td><?php echo htmlspecialchars($employee['Ten_Phong']); ?></td>
                <td><?php echo htmlspecialchars($employee['Luong']); ?></td>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'): ?>
                    <td>
                        <a href="index.php?controller=employee&action=edit&ma_nv=<?php echo $employee['Ma_NV']; ?>">Sửa</a> |
                        <a href="index.php?controller=employee&action=delete&ma_nv=<?php echo $employee['Ma_NV']; ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
                    
    <div class="pagination">
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <a href="index.php?controller=employee&action=index&page=<?php echo $i; ?>" class="<?php echo $i == $page ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>
    </div>
</body>
</html>