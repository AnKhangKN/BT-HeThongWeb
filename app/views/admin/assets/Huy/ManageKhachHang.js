let customers = JSON.parse(localStorage.getItem('customers')) || [];
    let deleteIndex = -1;

    function renderCustomers() {
        const customerList = document.getElementById('customerList');
        customerList.innerHTML = '';

        customers.forEach((customer, index) => {
            customerList.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${customer.name}</td>
                    <td>${customer.email}</td>
                    <td>${customer.phone}</td>
                    <td>${customer.address}</td>
                    <td>
                        <button class="btn btn-info btn-sm" onclick="viewCustomer(${index})">Xem</button>
                        <button class="btn btn-info btn-sm" onclick="editCustomer(${index})">Sửa</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(${index})">Xóa</button>
                    </td>
                </tr>
            `;
        });

        document.getElementById('noResults').style.display = customers.length === 0 ? 'block' : 'none';
    }

    function viewCustomer(index) {
        const customer = customers[index];
        const customerDetails = document.getElementById('customerDetails');
        customerDetails.innerHTML = `
            <p><strong>Tên:</strong> ${customer.name}</p>
            <p><strong>Email:</strong> ${customer.email}</p>
            <p><strong>Số điện thoại:</strong> ${customer.phone}</p>
            <p><strong>Địa chỉ:</strong> ${customer.address}</p>
        `;
        $('#viewCustomerModal').modal('show');
    }

    function editCustomer(index) {
        const customer = customers[index];
        document.getElementById('customerName').value = customer.name;
        document.getElementById('customerEmail').value = customer.email;
        document.getElementById('customerPhone').value = customer.phone;
        document.getElementById('customerAddress').value = customer.address;
        document.getElementById('editCustomerIndex').value = index;
        document.getElementById('customerForm').style.display = 'block';
    }

    function saveCustomer(event) {
        event.preventDefault();
        
        const index = document.getElementById('editCustomerIndex').value;
        const customerName = document.getElementById('customerName').value;
        const customerEmail = document.getElementById('customerEmail').value;
        const customerPhone = document.getElementById('customerPhone').value;
        const customerAddress = document.getElementById('customerAddress').value;

        const newCustomer = {
            name: customerName,
            email: customerEmail,
            phone: customerPhone,
            address: customerAddress
        };

        if (index) {
            customers[index] = newCustomer;
        } else {
            customers.push(newCustomer);
        }

        localStorage.setItem('customers', JSON.stringify(customers));
        renderCustomers();
        cancelCustomerForm();
    }

    function confirmDelete(index) {
        deleteIndex = index;
        $('#cancelCustomerModal').modal('show');
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (deleteIndex !== -1) {
            customers.splice(deleteIndex, 1);
            localStorage.setItem('customers', JSON.stringify(customers));
            renderCustomers();
            deleteIndex = -1;
        }
        $('#cancelCustomerModal').modal('hide');
    });

    function toggleCustomerForm() {
        const form = document.getElementById('customerForm');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }

    function cancelCustomerForm() {
        document.getElementById('customerForm').reset();
        document.getElementById('customerForm').style.display = 'none';
        document.getElementById('editCustomerIndex').value = '';
    }

    function searchCustomer() {
        const searchValue = document.getElementById('search').value.toLowerCase();
        const filteredCustomers = customers.filter(customer => 
            customer.name.toLowerCase().includes(searchValue) ||
            customer.email.toLowerCase().includes(searchValue) ||
            customer.phone.toLowerCase().includes(searchValue) ||
            customer.address.toLowerCase().includes(searchValue)
        );

        const customerList = document.getElementById('customerList');
        customerList.innerHTML = '';

        filteredCustomers.forEach((customer, index) => {
            customerList.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${customer.name}</td>
                    <td>${customer.email}</td>
                    <td>${customer.phone}</td>
                    <td>${customer.address}</td>
                    <td>
                        <button class="btn btn-info btn-sm" onclick="viewCustomer(${index})">Xem</button>
                        <button class="btn btn-info btn-sm" onclick="editCustomer(${index})">Sửa</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(${index})">Xóa</button>
                    </td>
                </tr>
            `;
        });

        document.getElementById('noResults').style.display = filteredCustomers.length === 0 ? 'block' : 'none';
    }

    document.addEventListener('DOMContentLoaded', renderCustomers);