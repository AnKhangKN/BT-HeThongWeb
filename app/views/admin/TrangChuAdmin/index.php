<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website PHP</title>
</head>
<body>

    <?php include("./app/views/admin/TrangChuAdmin/Navbar.php"); ?>

    <div>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $allowed_pages = ['home', 'about', 'services', 'contact'];

            if (in_array($page, $allowed_pages)) {
                include("pages/" . $page . ".php");
            } else {
                echo "<p>Trang không tồn tại!</p>";
            }
        } else {
            include("pages/home.php"); // Mặc định là trang chủ
        }
        ?>
    </div>

</body>
</html>