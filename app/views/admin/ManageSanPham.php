<main>
<div class="container mt-4">
    <div style="display: flex; justify-content: space-between; align-items: center;"><a href="admin_dashboard.html" class="btn btn-primary btn-home">🏠 Quay về Trang Chủ Admin</a>

<h2 class="text-center">Quản lý Sản phẩm</h2>
<button class="btn btn-success" onclick="toggleForm()">➕ Thêm sản phẩm</button></div>
    

    <div class="search-container d-flex justify-content-between align-items-center mb-3">
        <input type="text" id="search" class="form-control" placeholder="Tìm kiếm..." onkeyup="searchProduct()">
        
    </div>

    <form id="productForm" style="display: none;" onsubmit="saveProduct(event)">
        <input type="hidden" id="editIndex">
        <div class="mb-3">
            <label for="productName" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="productName" required>
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Giá</label>
            <input type="number" class="form-control" id="productPrice" required>
        </div>
        <div class="mb-3">
            <label for="productQuantity" class="form-label">Số lượng</label>
            <input type="number" class="form-control" id="productQuantity" required>
        </div>
        <div class="mb-3">
            <label for="productCategory" class="form-label">Danh mục</label>
            <select class="form-control" id="productCategory" required>
                <option value="Điện tử">Điện tử</option>
                <option value="Thời trang">Thời trang</option>
                <option value="Gia dụng">Gia dụng</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="productImage" accept="image/*" onchange="previewImage(event)">
            <img id="imagePreview" src="" class="mt-2" style="max-width: 100px; display: none;">
        </div>
        <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
        <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Hủy</button>
    </form>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hình ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody id="productList"></tbody>
    </table>
</div>
</main>