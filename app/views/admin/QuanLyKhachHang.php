<main>
<div class="container mt-5">
    <!-- Thêm nút quay về Trang Chủ Admin -->
    <a href="index.php?page=TrangChu" class="btn btn-primary mb-3">Quay lại</a>

    <h2 class="text-center">Quản lý Khách hàng</h2>

    <!-- Tìm kiếm và Thêm khách hàng -->
    <div class="search-container">
        <input type="text" class="form-control" id="search" placeholder="Tìm kiếm theo tên, email, số điện thoại, địa chỉ" onkeyup="searchCustomer()">
        <button class="btn btn-success" onclick="toggleCustomerForm()">Thêm khách hàng</button>
    </div>

    <!-- Form Thêm/Sửa Khách Hàng -->
    <form id="customerForm" style="display: none;" onsubmit="saveCustomer(event)">
        <input type="hidden" id="editCustomerIndex">
        <div class="mb-3">
            <label for="customerName" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="customerName" required>
        </div>
        <div class="mb-3">
            <label for="customerEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="customerEmail" required>
        </div>
        <div class="mb-3">
            <label for="customerPhone" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="customerPhone" required>
        </div>
        <div class="mb-3">
            <label for="customerAddress" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="customerAddress" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu khách hàng</button>
        <button type="button" class="btn btn-secondary" onclick="cancelCustomerForm()">Hủy</button>
    </form>

    <!-- Bảng danh sách khách hàng -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody id="customerList">
        </tbody>
    </table>

    <div id="noResults" class="alert alert-warning" style="display: none;">
        Không tìm thấy kết quả nào phù hợp.
    </div>
</div>

<!-- Modal Xem Khách Hàng -->
<div class="modal fade" id="viewCustomerModal" tabindex="-1" role="dialog" aria-labelledby="viewCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewCustomerModalLabel">Chi tiết Khách hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="customerDetails"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Xác Nhận Xóa Khách Hàng -->
<div class="modal fade" id="cancelCustomerModal" tabindex="-1" role="dialog" aria-labelledby="cancelCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelCustomerModalLabel">Xác nhận xóa khách hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa khách hàng này không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa khách hàng</button>
            </div>
        </div>
    </div>
</div>
</main>