<?php require_once 'app/views/shares/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h2 class="text-center mb-4">Thêm Nhân Viên</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <form action="index.php?controller=employee&action=handleAdd" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="ma_nv" class="form-label">Mã Nhân Viên:</label>
            <input type="text" class="form-control" id="ma_nv" name="ma_nv" required>
        </div>
        <div class="mb-3">
            <label for="ten_nv" class="form-label">Tên Nhân Viên:</label>
            <input type="text" class="form-control" id="ten_nv" name="ten_nv" required>
        </div>
        <div class="mb-3">
            <label for="phai" class="form-label">Giới Tính:</label>
            <select class="form-select" id="phai" name="phai" required>
                <option value="NAM">Nam</option>
                <option value="NU">Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="noi_sinh" class="form-label">Nơi Sinh:</label>
            <input type="text" class="form-control" id="noi_sinh" name="noi_sinh" required>
        </div>
        <div class="mb-3">
            <label for="ma_phong" class="form-label">Phòng Ban:</label>
            <select class="form-select" id="ma_phong" name="ma_phong" required>
                <?php foreach ($departments as $department): ?>
                    <option value="<?php echo $department['Ma_Phong']; ?>"><?php echo $department['Ten_Phong']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="luong" class="form-label">Lương:</label>
            <input type="number" class="form-control" id="luong" name="luong" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Thêm</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>