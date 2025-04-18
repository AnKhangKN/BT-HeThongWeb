<main class="content">
  <h2>Thống kê hệ thống</h2>

  <!-- Bộ lọc thời gian -->
  <div class="row my-4">
    <div class="col-md-4">
      <label for="startDate" class="form-label">Từ ngày</label>
      <input type="date" class="form-control" id="startDate">
    </div>
    <div class="col-md-4">
      <label for="endDate" class="form-label">Đến ngày</label>
      <input type="date" class="form-control" id="endDate">
    </div>
    <div class="col-md-4 d-flex align-items-end">
      <button class="btn btn-primary w-100">Lọc thống kê</button>
    </div>
  </div>

  <!-- Cards thống kê -->
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card card-stat shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Tổng sản phẩm</h5>
          <p class="display-6">250</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-stat shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Tổng đơn hàng</h5>
          <p class="display-6">120</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-stat shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Doanh thu hôm nay</h5>
          <p class="display-6">8.200.000₫</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bảng sản phẩm bán chạy -->
  <div class="mt-5">
    <h4>Sản phẩm bán chạy</h4>
    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng đã bán</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>SP01</td>
            <td>Bóng rổ Nike</td>
            <td>150</td>
          </tr>
          <tr>
            <td>SP02</td>
            <td>Vợt cầu lông Yonex</td>
            <td>120</td>
          </tr>
          <!-- Lặp từ SQL COUNT + JOIN ChiTietHoaDon -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bảng đơn hàng gần đây -->
  <div class="mt-5">
    <h4>Đơn hàng gần đây</h4>
    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead>
          <tr>
            <th>ID Hóa đơn</th>
            <th>Khách hàng</th>
            <th>Ngày xuất</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>HD120</td>
            <td>Nguyễn Văn A</td>
            <td>2025-04-15</td>
            <td>2.400.000₫</td>
            <td>Đã giao</td>
          </tr>
          <tr>
            <td>HD121</td>
            <td>Trần Thị B</td>
            <td>2025-04-15</td>
            <td>1.050.000₫</td>
            <td>Đang xử lý</td>
          </tr>
          <!-- Lặp từ bảng HoaDon -->
        </tbody>
      </table>
    </div>
  </div>
</main>