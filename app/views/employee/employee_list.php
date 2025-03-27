<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Nhân Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php require_once 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">THÔNG TIN NHÂN VIÊN</h2>
    
    <div class="table-responsive shadow-sm rounded">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary text-center">
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
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($employee['Ma_NV']); ?></td>
                        <td><?php echo htmlspecialchars($employee['Ten_NV']); ?></td>
                        <td class="text-center">
                            <?php
                            if ($employee['Phai'] == 'NU') {
                                echo '<img src="public/images/woman.png" alt="Woman" class="img-fluid rounded-circle border" style="width: 40px; height: 40px;">';
                            } else {
                                echo '<img src="public/images/man.png" alt="Man" class="img-fluid rounded-circle border" style="width: 40px; height: 40px;">';
                            }
                            ?>
                        </td>
                        <td><?php echo htmlspecialchars($employee['Noi_Sinh']); ?></td>
                        <td><?php echo htmlspecialchars($employee['Ten_Phong']); ?></td>
                        <td class="text-end"><?php echo number_format($employee['Luong'], 0, ',', '.'); ?> VND</td>
                        <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin'): ?>
                            <td class="text-center">
                                <a href="index.php?controller=employee&action=edit&ma_nv=<?php echo $employee['Ma_NV']; ?>" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>
                                <a href="index.php?controller=employee&action=delete&ma_nv=<?php echo $employee['Ma_NV']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">
                                    <i class="fas fa-trash-alt"></i> Xóa
                                </a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <nav>
        <ul class="pagination justify-content-center mt-4">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                    <a class="page-link" href="index.php?controller=employee&action=index&page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
