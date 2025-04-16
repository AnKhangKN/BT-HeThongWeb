let products = JSON.parse(localStorage.getItem("products")) || [];

function toggleForm() {
    document.getElementById("productForm").style.display = "block";
    document.getElementById("editIndex").value = "";
    document.getElementById("productForm").reset();
    document.getElementById("imagePreview").style.display = "none";
}

function cancelEdit() {
    document.getElementById("productForm").style.display = "none";
    document.getElementById("productForm").reset();
    document.getElementById("imagePreview").style.display = "none";
}

function previewImage(event) {
    let reader = new FileReader();
    reader.onload = function () {
        let output = document.getElementById("imagePreview");
        output.src = reader.result;
        output.style.display = "block";
    };
    reader.readAsDataURL(event.target.files[0]);
}

function saveProduct(event) {
    event.preventDefault();
    let index = document.getElementById("editIndex").value;
    let name = document.getElementById("productName").value;
    let price = document.getElementById("productPrice").value;
    let quantity = document.getElementById("productQuantity").value;
    let category = document.getElementById("productCategory").value;
    let image = document.getElementById("imagePreview").src;

    let product = { name, price, quantity, category, image };

    if (index === "") {
        products.push(product);
    } else {
        products[index] = product;
    }

    localStorage.setItem("products", JSON.stringify(products));
    cancelEdit();
    renderProducts();
}

function editProduct(index) {
    let product = products[index];
    document.getElementById("editIndex").value = index;
    document.getElementById("productName").value = product.name;
    document.getElementById("productPrice").value = product.price;
    document.getElementById("productQuantity").value = product.quantity;
    document.getElementById("productCategory").value = product.category;
    document.getElementById("imagePreview").src = product.image;
    document.getElementById("imagePreview").style.display = "block";
    document.getElementById("productForm").style.display = "block";
}

function deleteProduct(index) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
        products.splice(index, 1);
        localStorage.setItem("products", JSON.stringify(products));
        renderProducts();
    }
}

function searchProduct() {
    const searchValue = document.getElementById("search").value.toLowerCase();
    const filteredProducts = products.filter(product =>
        product.name.toLowerCase().includes(searchValue) ||
        product.category.toLowerCase().includes(searchValue)
    );
    renderProducts(filteredProducts);
}

function renderProducts(filteredList = null) {
    let productList = document.getElementById("productList");
    productList.innerHTML = "";
    let list = filteredList || products;

    list.forEach((product, index) => {
        productList.innerHTML += `
            <tr>
                <td>${index + 1}</td>
                <td><img src="${product.image}" class="product-img"></td>
                <td>${product.name}</td>
                <td>${product.price} VND</td>
                <td>${product.quantity}</td>
                <td>${product.category}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editProduct(${index})">✏️ Sửa</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteProduct(${index})">🗑️ Xóa</button>
                </td>
            </tr>`;
    });

    localStorage.setItem("products", JSON.stringify(list)); // Đảm bảo dữ liệu luôn được lưu lại
}

document.addEventListener("DOMContentLoaded", () => {
    products = JSON.parse(localStorage.getItem("products")) || [];
    renderProducts();
});
