<main>
<div class="container mt-5">
    <!-- Nút Quay về trang chủ -->
    <a href="index.php?page=TrangChu" class="btn btn-primary mb-3">Quay lại</a>

    <h2 class="text-center">Quản lý Đơn hàng</h2>

    <!-- Tìm kiếm và Thêm đơn hàng -->
    <div class="search-container">
        <input type="text" id="search" class="form-control" placeholder="Tìm kiếm theo mã đơn hàng hoặc tên khách hàng" onkeyup="searchOrder()">
        <button class="btn btn-success" onclick="toggleOrderForm()">Thêm đơn hàng</button>
    </div>

    <!-- Form Thêm Đơn Hàng -->
    <form id="orderForm" style="display: none;" onsubmit="addOrder(event)">
        <input type="hidden" id="editIndex">
        <div class="mb-3">
            <label for="customerName" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="customerName" required>
        </div>
        <div class="mb-3">
            <label for="productName" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="productName" required>
        </div>
        <div class="mb-3">
            <label for="orderQuantity" class="form-label">Số lượng</label>
            <input type="number" class="form-control" id="orderQuantity" required>
        </div>
        <div class="mb-3">
            <label for="orderDate" class="form-label">Ngày đặt hàng</label>
            <input type="date" class="form-control" id="orderDate" required>
        </div>
        <div class="mb-3">
            <label for="orderStatus" class="form-label">Tình trạng</label>
            <select class="form-control" id="orderStatus" required>
                <option value="Đang chờ">Đang chờ</option>
                <option value="Đã giao">Đã giao</option>
                <option value="Đã hủy">Đã hủy</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="totalValue" class="form-label">Tổng giá trị</label>
            <input type="text" class="form-control" id="totalValue" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu đơn hàng</button>
        <button type="button" class="btn btn-secondary" onclick="cancelOrderForm()">Hủy</button>
    </form>

    <!-- Bảng danh sách đơn hàng -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng đặt</th>
                <th>Ngày đặt hàng</th>
                <th>Tình trạng</th>
                <th>Tổng giá trị</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody id="orderList">
            <!-- Dữ liệu đơn hàng sẽ được thêm vào đây -->
        </tbody>
    </table>
</div>

<!-- Modal Xem Đơn Hàng -->
<div class="modal fade" id="viewOrderModal" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewOrderModalLabel">Chi tiết Đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="orderDetails"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Xác Nhận Hủy Đơn Hàng -->
<div class="modal fade" id="cancelOrderModal" tabindex="-1" role="dialog" aria-labelledby="cancelOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelOrderModalLabel">Xác nhận hủy đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn hủy đơn hàng này không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmCancelBtn">Hủy đơn</button>
            </div>
        </div>
    </div>
</div>
</main>