<<<<<<< HEAD
<main>
<div class="container mt-4">
        <h1 class="mb-4">Quản lý sản phẩm</h1>
=======

<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Quản lý sản phẩm</h2>
  </div>
>>>>>>> bde3eb971af70c710636738fde4fef77ca0a5153

        <!-- Tìm kiếm sản phẩm -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm sản phẩm...">
        </div>

        <!-- Nút thêm sản phẩm -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">Thêm sản phẩm</button>

        <!-- Bảng sản phẩm -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="productTable">
                <!-- Sản phẩm sẽ được thêm ở đây -->
            </tbody>
        </table>
    </div>

    <!-- Modal Thêm Sản Phẩm -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Thêm sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="productImage" accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="productPrice" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>