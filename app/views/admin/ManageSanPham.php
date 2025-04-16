
<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Quản lý sản phẩm</h2>
  </div>

  <div class="d-flex justify-content-between mb-3 align-items-center">
    <button class="btn btn-success btn-sm px-4" data-bs-toggle="modal" data-bs-target="#addProductModal">
      <i class="bi bi-plus-circle"></i> Thêm sản phẩm
    </button>
    <input type="text" id="searchInput" class="form-control w-25" placeholder="🔍 Tìm sản phẩm...">
  </div>

  <div class="table-responsive product-card p-3">
    <table class="table table-hover align-middle">
      <thead class="table-success">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Ảnh</th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Giá</th>
          <th scope="col">Danh mục</th>
          <th scope="col" class="text-center">Thao tác</th>
        </tr>
      </thead>
      <tbody id="productTable"></tbody>
    </table>
  </div>
</div>

<!-- Modal Thêm sản phẩm -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" id="productForm">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductLabel">Thêm sản phẩm mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="productName" class="form-label">Tên sản phẩm</label>
          <input type="text" class="form-control" id="productName" required>
        </div>
        <div class="mb-3">
          <label for="productPrice" class="form-label">Giá</label>
          <input type="number" class="form-control" id="productPrice" required>
        </div>
        <div class="mb-3">
          <label for="productCategory" class="form-label">Danh mục</label>
          <input type="text" class="form-control" id="productCategory" required>
        </div>
        <div class="mb-3">
          <label for="productImage" class="form-label">Ảnh sản phẩm (URL)</label>
          <input type="text" class="form-control" id="productImage" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Lưu</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
      </div>
    </form>
  </div>
</div>