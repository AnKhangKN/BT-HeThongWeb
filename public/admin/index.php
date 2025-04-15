<?php 

// Bao gồm tệp cấu hình
require_once '../../config/database.php'; 

// Kết nối cơ sở dữ liệu
$conn = connectBD(); 

include_once '../../app/views/admin/include/header.php';


// Xử lý trang động
if (isset($_GET['page'])) {
    $page = basename($_GET['page']);
} else {
    $page = 'ManageSanpham'; 
}

$pageFile = '../../app/views/admin/' . $page . '.php';

if (file_exists($pageFile)) {
    include_once $pageFile;
} else {
    echo "<p>Trang bạn yêu cầu không tồn tại.</p>";
}

include_once '../../app/views/admin/include/footer.php';    


// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);

?>
