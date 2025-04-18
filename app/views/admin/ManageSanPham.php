<main>
<div class="container py-4">
  <a href="index.php?page=TrangChu" class="btn btn-primary mb-3">Quay lại</a>

  <h2 class="text-center mb-4">Quản lý Sản phẩm</h2>

  <div class="d-flex justify-content-between align-items-center mb-3">
    <input type="text" id="search" class="form-control" placeholder="🔍 Tìm kiếm..." onkeyup="searchProduct()">
    <button class="btn btn-success ms-3" onclick="toggleForm()">➕ Thêm sản phẩm</button>
  </div>

  <form id="productForm" class="form-container" style="display: none;" onsubmit="saveProduct(event)">
    <input type="hidden" id="editIndex">
    <div class="row g-3">
      <div class="col-md-6">
        <label for="productName" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="productName" required>
      </div>
      <div class="col-md-3">
        <label for="productPrice" class="form-label">Giá</label>
        <input type="number" class="form-control" id="productPrice" required>
      </div>
      <div class="col-md-3">
        <label for="productQuantity" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="productQuantity" required>
      </div>
      <div class="col-md-6">
        <label for="productCategory" class="form-label">Danh mục</label>
        <select class="form-select" id="productCategory" required>
          <option value="">-- Chọn danh mục --</option>
          <option value="Điện tử">Điện tử</option>
          <option value="Thời trang">Thời trang</option>
          <option value="Gia dụng">Gia dụng</option>
          <option value="Khác">Khác</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="productImage" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" id="productImage" accept="image/*" onchange="previewImage(event)">
        <img id="imagePreview" src="" class="mt-2">
      </div>
      <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-2">💾 Lưu sản phẩm</button>
        <button type="button" class="btn btn-secondary" onclick="cancelEdit()">❌ Hủy</button>
      </div>
    </div>
  </form>

  <table class="table mt-4 table-hover text-center align-middle">
    <thead>
      <tr>
        <th>ID</th>
        <th>Hình ảnh</th>
        <th>Tên</th>
        <th>Giá (VND)</th>
        <th>Số lượng</th>
        <th>Danh mục</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody id="productList"></tbody>
  </table>
</div>
</main>