<main class="content">
  <h2>Danh sách Nhà Cung Cấp</h2>
  
  <div class="table-responsive mt-4">
    <table class="table table-bordered table-hover align-middle">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên nhà cung cấp</th>
          <th>Email</th>
          <th>SĐT</th>
          <th>Địa chỉ</th>
          <th>Ngày tạo</th>
          <th>Trạng thái</th>
          <th>Ghi chú</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Công ty A</td>
          <td>nccA@example.com</td>
          <td>0909123456</td>
          <td>123 Nguyễn Trãi, Q1</td>
          <td>2024-12-01</td>
          <td><span class="status-active">Hoạt động</span></td>
          <td class="note-cell">Nhà cung cấp lâu năm, uy tín...</td>
          <td>
            <button class="btn btn-sm btn-primary">Sửa</button>
            <button class="btn btn-sm btn-danger">Xóa</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Công ty B</td>
          <td>nccB@example.com</td>
          <td>0911222333</td>
          <td>456 Lê Lợi, Q3</td>
          <td>2025-01-10</td>
          <td><span class="status-inactive">Ngừng hoạt động</span></td>
          <td class="note-cell">Đang chờ cập nhật hợp đồng mới...</td>
          <td>
            <button class="btn btn-sm btn-primary">Sửa</button>
            <button class="btn btn-sm btn-danger">Xóa</button>
          </td>
        </tr>
        <!-- Bạn có thể dùng PHP để lặp dữ liệu tại đây -->
      </tbody>
    </table>
  </div>
</main>