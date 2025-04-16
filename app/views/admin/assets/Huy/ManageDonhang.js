let orders = JSON.parse(localStorage.getItem('orders')) || []; // Lấy dữ liệu từ localStorage
    let cancelIndex = -1;

    function renderOrders() {
        const orderList = document.getElementById('orderList');
        orderList.innerHTML = ''; // Xóa nội dung cũ

        orders.forEach((order, index) => {
            orderList.innerHTML += `
                <tr>
                    <td>${order.id}</td>
                    <td>${order.customer}</td>
                    <td>${order.product}</td>
                    <td>${order.quantity}</td>
                    <td>${order.date}</td>
                    <td><span class="badge badge-warning">${order.status}</span></td>
                    <td>${order.total}</td>
                    <td>
                        <button class="btn btn-info btn-sm" onclick="viewOrder(${index})">Xem</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmCancel(${index})">Hủy</button>
                    </td>
                </tr>
            `;
        });
    }

    function viewOrder(index) {
        const order = orders[index];
        const orderDetails = document.getElementById('orderDetails');
        orderDetails.innerHTML = ` 
            <p><strong>Mã đơn hàng:</strong> ${order.id}</p>
            <p><strong>Tên khách hàng:</strong> ${order.customer}</p>
            <p><strong>Tên sản phẩm:</strong> ${order.product}</p>
            <p><strong>Số lượng:</strong> ${order.quantity}</p>
            <p><strong>Ngày đặt hàng:</strong> ${order.date}</p>
            <p><strong>Tình trạng:</strong> ${order.status}</p>
            <p><strong>Tổng giá trị:</strong> ${order.total}</p>
        `;
        $('#viewOrderModal').modal('show');
    }

    function confirmCancel(index) {
        cancelIndex = index;
        $('#cancelOrderModal').modal('show');
    }

    document.getElementById('confirmCancelBtn').addEventListener('click', function() {
        if (cancelIndex !== -1) {
            orders.splice(cancelIndex, 1);
            localStorage.setItem('orders', JSON.stringify(orders)); // Cập nhật localStorage
            renderOrders();
            cancelIndex = -1; // Reset lại chỉ số
        }
        $('#cancelOrderModal').modal('hide');
    });

    function toggleOrderForm() {
        const form = document.getElementById('orderForm');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }

    function cancelOrderForm() {
        document.getElementById('orderForm').reset();
        document.getElementById('orderForm').style.display = 'none';
    }

    function addOrder(event) {
        event.preventDefault();
        
        const customerName = document.getElementById('customerName').value;
        const productName = document.getElementById('productName').value;
        const quantity = document.getElementById('orderQuantity').value;
        const orderDate = document.getElementById('orderDate').value;
        const orderStatus = document.getElementById('orderStatus').value;
        const totalValue = document.getElementById('totalValue').value;

        const newOrder = {
            id: `#00${orders.length + 1}`, // Tạo mã đơn hàng tự động
            customer: customerName,
            product: productName,
            quantity: quantity,
            date: orderDate,
            status: orderStatus,
            total: totalValue
        };

        orders.push(newOrder);
        localStorage.setItem('orders', JSON.stringify(orders)); // Lưu vào localStorage
        renderOrders();
        cancelOrderForm();
    }

    function searchOrder() {
        const searchValue = document.getElementById('search').value.toLowerCase();
        const filteredOrders = orders.filter(order => 
            order.id.toLowerCase().includes(searchValue) ||
            order.customer.toLowerCase().includes(searchValue)
        );

        const orderList = document.getElementById('orderList');
        orderList.innerHTML = ''; // Xóa nội dung cũ

        filteredOrders.forEach((order, index) => {
            orderList.innerHTML += `
                <tr>
                    <td>${order.id}</td>
                    <td>${order.customer}</td>
                    <td>${order.product}</td>
                    <td>${order.quantity}</td>
                    <td>${order.date}</td>
                    <td><span class="badge badge-warning">${order.status}</span></td>
                    <td>${order.total}</td>
                    <td>
                        <button class="btn btn-info btn-sm" onclick="viewOrder(${index})">Xem</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmCancel(${index})">Hủy</button>
                    </td>
                </tr>
            `;
        });

        // Hiển thị thông báo nếu không có kết quả
        if (filteredOrders.length === 0) {
            orderList.innerHTML = '<tr><td colspan="8" class="text-center">Không tìm thấy đơn hàng nào.</td></tr>';
        }
    }

    // Khởi động trang
    document.addEventListener('DOMContentLoaded', renderOrders);