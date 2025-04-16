let products = JSON.parse(localStorage.getItem('products')) || [];

function renderProducts() {
  const table = document.getElementById("productTable");
  table.innerHTML = "";

  products.forEach((product, index) => {
    table.innerHTML += `
      <tr>
        <td>${index + 1}</td>
        <td><img src="${product.image}" width="60"></td>
        <td>${product.name}</td>
        <td>${product.price.toLocaleString()}₫</td>
        <td>${product.category}</td>
        <td class="text-center">
          <button class="btn btn-warning btn-sm me-1" onclick="editProduct(${index})"><i class="bi bi-pencil-square"></i></button>
          <button class="btn btn-danger btn-sm" onclick="deleteProduct(${index})"><i class="bi bi-trash"></i></button>
        </td>
      </tr>
    `;
  });
}

document.getElementById("productForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const newProduct = {
    name: document.getElementById("productName").value,
    price: parseFloat(document.getElementById("productPrice").value),
    category: document.getElementById("productCategory").value,
    image: document.getElementById("productImage").value,
  };

  products.push(newProduct);
  localStorage.setItem("products", JSON.stringify(products));
  renderProducts();
  e.target.reset();
  bootstrap.Modal.getInstance(document.getElementById("addProductModal")).hide();
});

function deleteProduct(index) {
  if (confirm("Bạn có chắc muốn xóa sản phẩm này?")) {
    products.splice(index, 1);
    localStorage.setItem("products", JSON.stringify(products));
    renderProducts();
  }
}

function editProduct(index) {
  const product = products[index];
  document.getElementById("productName").value = product.name;
  document.getElementById("productPrice").value = product.price;
  document.getElementById("productCategory").value = product.category;
  document.getElementById("productImage").value = product.image;
  deleteProduct(index);
  const modal = new bootstrap.Modal(document.getElementById("addProductModal"));
  modal.show();
}

document.getElementById("searchInput").addEventListener("input", function (e) {
  const keyword = e.target.value.toLowerCase();
  const filtered = products.filter(p => p.name.toLowerCase().includes(keyword));
  const table = document.getElementById("productTable");
  table.innerHTML = "";
  filtered.forEach((product, index) => {
    table.innerHTML += `
      <tr>
        <td>${index + 1}</td>
        <td><img src="${product.image}" width="60"></td>
        <td>${product.name}</td>
        <td>${product.price.toLocaleString()}₫</td>
        <td>${product.category}</td>
        <td class="text-center">
          <button class="btn btn-warning btn-sm me-1" onclick="editProduct(${index})"><i class="bi bi-pencil-square"></i></button>
          <button class="btn btn-danger btn-sm" onclick="deleteProduct(${index})"><i class="bi bi-trash"></i></button>
        </td>
      </tr>
    `;
  });
});

renderProducts();