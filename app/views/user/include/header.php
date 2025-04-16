<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../vendor/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery-3.7.1/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../vendor/fontawesome-free-6.7.2-web/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../app/views/user/assets/css/style.css">

    <title>Trang chủ</title>
</head>

<body>
    <header id=" header">
        <div class="topbar" style=" background-color: #ff5c39;">
            <div class="d-flex justify-content-between align-items-center m-auto text-white"
                style="min-height: 30px; max-width: 1300px; font-size: 13px;">
                <div class="m-0">UNIE VIỆT NAM - Nhà Đẹp Bếp Xinh</div>
                <div class="m-0 text-end">
                    <i class="fa-solid fa-envelope"></i> dvkh@ukg.com.vn
                    |
                    <i class="fa-solid fa-clock"></i> 08:00 - 17:00
                </div>
            </div>
        </div>

        <div class="midbar" style="background-color: #f5f5f5;">
            <div class="d-flex justify-content-between align-items-center m-auto"
                style="height: 80px; max-width: 1300px;">

                <a href="index.php?page=home">
                    <div class="logo" style="width: 80px; height: 46px;">
                        <img src="../public/assets/images/Logo.webp" alt="" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                </a>

                <div class="search-box d-flex justify-content-center align-items-center w-50">

                    <div class="w-75 " style="height: 40px;">
                        <input placeholder="Tìm kiếm ..." type="text" class="w-100 h-100 p-3"
                            style="outline: none; border-radius: 8px 0px 0px 8px; border: 0.5px solid #e0e0e0;">
                    </div>

                    <btn class="search-icon text-white d-flex justify-content-center align-items-center"
                        style="width: 40px; background-color: #ff5c39; height: 40px; border-radius: 0px 8px 8px 0px;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </btn>
                </div>

                <div class="tools d-flex align-items-center text-white" style="font-size: 18px;">

                    <a href="index.php?page=cart" style="color: #fff; text-decoration: none">
                        <div class="cart position-relative">
                            <div class="total_products_in_cart position-absolute d-flex justify-content-center align-items-center rounded-5"
                                style="font-weight: 500; top: -6px; right: 12px;width: 20px; height: 20px; background-color:#E0E0E0; font-size: 14px;">
                                <div class="total_product text-dark">0</div>
                            </div>
                            <div class="me-3 cart-icon p-1 d-flex align-items-center rounded-5 justify-content-center"
                                style=" background-color: #ff5c39; width: 40px; height: 40px;">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </div>
                        </div>
                    </a>

                    <div class="position-relative">
                        <a href="index.php?page=information" style="color: #fff; text-decoration: none">
                            <div class="user-info d-flex justify-content-center rounded-5 align-items-center"
                                style="width: 40px; height: 40px; background-color: #ff5c39;">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </a>

                        <!-- modal information no login -->
                        <div id="modalInformationDetailNoLogin"
                            class="modalInformationDetail text-dark position-absolute d-flex">
                            <ul class="list-unstyled">
                                <li>
                                    <a style="text-decoration: none" class="text-dark"
                                        href="/BT-HeThongWeb/public/auth/index.php?page=signup">Đăng kí</a>
                                </li>
                                <li>
                                    <a style="text-decoration: none" class="text-dark"
                                        href="/BT-HeThongWeb/public/auth/index.php?page=login">Đăng nhập</a>
                                </li>
                            </ul>
                        </div>

                        <div id="modalInformationDetailLogin"
                            class="modalInformationDetail text-dark position-absolute d-none">
                            <ul class="list-unstyled">
                                <li>
                                    <a style="text-decoration: none" class="text-dark" href="./logout/logout.php">Đăng
                                        xuất</a>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>

            </div>
        </div>

        <div class="navbar p-0">
            <div class="w-100" style="box-shadow: 1px 5px 10px 0px #efefef;">
                <div class="d-flex justify-content-between align-items-center m-auto"
                    style="height: 44px; max-width: 1300px; ">

                    <div class="d-flex justify-content-center m-auto align-items-center w-50 "
                        style="font-weight: 500;">
                        <div class="d-flex w-25 justify-content-center" style="line-height: 44px;">
                            <a style="color: #333; text-decoration: none" href="index.php?page=home">Trang chủ</a>
                        </div>
                        <div class="d-flex w-25 justify-content-center" style="line-height: 44px;">
                            <a style="color: #333; text-decoration: none" href="index.php?page=product">Sản phẩm</a>
                        </div>
                        <div class="d-flex w-25 justify-content-center" style="line-height: 44px;">
                            <a style="color: #333; text-decoration: none" href="index.php?page=warranty">Bảo Hành</a>
                        </div>
                        <div class="d-flex w-25 justify-content-center" style="line-height: 44px;">
                            <a style="color: #333; text-decoration: none" href="index.php?page=introduction">Giới
                                thiệu</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </header>