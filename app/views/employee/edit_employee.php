<?php require_once 'app/views/shares/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }
    .form-container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .form-container h2 {
        color: #343a40;
    }
    .btn-primary {
        background-color: #FF6F61;
        border-color: #FF6F61;
    }
    .btn-primary:hover {
        background-color: #E65C54;
        border-color: #CC524B;
    }
</style>
<div class="container mt-5">
    <div class="form-container mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">SỬA NHÂN VIÊN</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form action="index.php?controller=employee&action=handleEdit" method="POST" class="needs-validation" novalidate>
            <input type="hidden" name="ma_nv" value="<?php echo $employee['Ma_NV']; ?>">
            <div class="row mb-3">
                <div class="col-12">
                    <label for="ma_nv" class="form-label">Mã Nhân Viên:</label>
                    <input type="text" id="ma_nv" class="form-control" value="<?php echo $employee['Ma_NV']; ?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="ten_nv" class="form-label">Tên Nhân Viên:</label>
                    <input type="text" id="ten_nv" name="ten_nv" class="form-control" value="<?php echo $employee['Ten_NV']; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phai" class="form-label">Giới Tính:</label>
                    <select id="phai" name="phai" class="form-select" required>
                        <option value="NAM" <?php echo $employee['Phai'] == 'NAM' ? 'selected' : ''; ?>>Nam</option>
                        <option value="NU" <?php echo $employee['Phai'] == 'NU' ? 'selected' : ''; ?>>Nữ</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="noi_sinh" class="form-label">Nơi Sinh:</label>
                    <input type="text" id="noi_sinh" name="noi_sinh" class="form-control" value="<?php echo $employee['Noi_Sinh']; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ma_phong" class="form-label">Phòng Ban:</label>
                    <select id="ma_phong" name="ma_phong" class="form-select" required>
                        <?php foreach ($departments as $department): ?>
                            <option value="<?php echo $department['Ma_Phong']; ?>" <?php echo $employee['Ma_Phong'] == $department['Ma_Phong'] ? 'selected' : ''; ?>>
                                <?php echo $department['Ten_Phong']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="luong" class="form-label">Lương:</label>
                    <input type="number" id="luong" name="luong" class="form-control" value="<?php echo $employee['Luong']; ?>" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>