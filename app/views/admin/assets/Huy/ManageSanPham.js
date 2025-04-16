const form = document.getElementById('productForm');
const list = document.getElementById('productTable');
const searchInput = document.getElementById('searchInput');

const nameInput = document.getElementById('productName');
const priceInput = document.getElementById('productPrice');
const categoryInput = document.getElementById('productCategory');
const imageInput = document.getElementById('productImageFile');

let products = JSON.parse(localStorage.getItem('products')) || [];
let editIndex = null;

function renderProducts(data) {
  list.innerHTML = '';
  data.forEach((p, index) => {
    list.innerHTML += `
      <tr>
        <td>${index + 1}</td>
        <td><img src="${p.image}" class="thumb"></td>
        <td>${p.name}</td>
        <td>${p.price.toLocaleString()} ₫</td>
        <td>${p.category}</td>
        <td class="text-center">
          <button class="btn btn-sm btn-primary me-2" onclick="editProduct(${index})">Sửa</button>
          <button class="btn btn-sm btn-danger" onclick="deleteProduct(${index})">Xoá</button>
        </td>
      </tr>
    `;
  });
}

function saveToLocalStorage() {
  localStorage.setItem('products', JSON.stringify(products));
}

form.addEventListener('submit', function (e) {
  e.preventDefault();
  const name = nameInput.value.trim();
  const price = parseFloat(priceInput.value);
  const category = categoryInput.value.trim();
  const imageFile = imageInput.files[0];

  if (!name || isNaN(price) || !category) return;

  const handleSave = (imageUrl) => {
    const newProduct = { name, price, category, image: imageUrl };

    if (editIndex !== null) {
      products[editIndex] = newProduct;
      editIndex = null;
    } else {
      products.push(newProduct);
    }

    saveToLocalStorage();
    renderProducts(products);
    form.reset();
    bootstrap.Modal.getInstance(document.getElementById('addProductModal')).hide();
  };

  if (imageFile) {
    const reader = new FileReader();
    reader.onload = function (event) {
      handleSave(event.target.result);
    };
    reader.readAsDataURL(imageFile);
  } else if (editIndex !== null) {
    handleSave(products[editIndex].image);
  }
});

function editProduct(index) {
  const p = products[index];
  nameInput.value = p.name;
  priceInput.value = p.price;
  categoryInput.value = p.category;
  imageInput.value = '';
  editIndex = index;

  const modal = new bootstrap.Modal(document.getElementById('addProductModal'));
  modal.show();
}

function deleteProduct(index) {
  if (confirm('Bạn có chắc muốn xoá sản phẩm này?')) {
    products.splice(index, 1);
    saveToLocalStorage();
    renderProducts(products);
  }
}

searchInput.addEventListener('input', () => {
  const keyword = searchInput.value.toLowerCase();
  const filtered = products.filter(p => p.name.toLowerCase().includes(keyword));
  renderProducts(filtered);
});

document.addEventListener('DOMContentLoaded', () => {
  renderProducts(products);
});
