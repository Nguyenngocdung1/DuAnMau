<?php 
    include 'db.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="./public/css/style.css?v=<?php echo time(); ?>" />
  
    <title>Thương hiệu đồng hồ Curnonwatch</title>
</head>

<body>
<div class="container-fluid">
    <nav>
        <div class="d-flex justify-content-between p-2 align-items-center">
            <ul class="mb-2 mb-lg-0 d-flex">
                <li class="nav-item test1">
                    <a class="nav-link dongho" href="index.php">ĐỒNG HỒ</a>
                    <div class="container-fluid hover_test">
                        <div class="nav_hover p-2 pt-5 bg-light">
                            <div class="row">
                                <div class="nav_hover-item">
                                    <div class="ps-4">
                                        <ul class="hover_list">
                                            <li class="mb-2">KHÁM PHÁ</li>
                                            <li class="">
                                                <div class="hover_item hover_item1">
                                                    <p class="abc pt-1 pe-5 pb-1">ĐỒNG HỒ NAM</p>
                                                    <div class="hover_nam hover_nam1 row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="header_hover">
                                                                <p class="px-3">MUA THEO BỘ SƯU TẬP</p>
                                                                <div class="d-flex nav_sp_img">
                                                                    <?php 
                                                                        $sql_tt = "SELECT * FROM `trademark` where `name_category` like '%đồng hồ nam%'";
                                                                        $result_tt = $conn->query($sql_tt);
                                                                        if($result_tt->num_rows > 0){
                                                                            while($row_tt = $result_tt->fetch_assoc()){
                                                                                echo '<p >
                                                                                <a class="d-flex mb-2 align-items-center" href="thuonghieu.php?id='.$row_tt['id'].'">
                                                                                    <img src="./admin/light-bootstrap-dashboard-master/examples/images/category/1.webp" alt="" />
                                                                                    <span>'.$row_tt['name'].'</span>
                                                                                </a>
                                                                            </p>';
                                                                            }
                                                                        }
                                                                    ?>
                                                                
                                                                </div>
                                                                <p class="p-4 pb-0">
                                                                    <a href="thuonghieu.php" class="d-block btn btn-ellipse btn-outline-primary mx-auto">XEM TẤT CẢ <i class="fas fa-arrow-right"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="img_scale">
                                                                <div class="nav_img">
                                                                    <img src="./admin/light-bootstrap-dashboard-master/examples/images/category/1.webp" alt="" width="100%" />
                                                                </div>
                                                                <p class="p-4 text_hover d-flex justify-content-between">
                                                                    <span>NEW ARRIVALS</span>
                                                                    <span><i class="fas fa-arrow-right"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="img_scale">
                                                                <div class="nav_img">
                                                                    <img src="./admin/light-bootstrap-dashboard-master/examples/images/category/2.webp" alt="" width="100%" />
                                                                </div>
                                                                <p class="p-4 text_hover d-flex justify-content-between">
                                                                    <span>NEW ARRIVALS</span>
                                                                    <span><i class="fas fa-arrow-right"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="hover_item hover_item2">
                                                    <p class="abc pt-1 pe-5 pb-1">ĐỒNG HỒ NỮ</p>
                                                    <div class="hover_nam row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="header_hover">
                                                                <p class="px-3">MUA THEO BỘ SƯU TẬP</p>
                                                                <div class="d-flex nav_sp_img">
                                                                <?php 
                                                                        $sql_tt = "SELECT * FROM `trademark` where `name_category` like '%đồng hồ nữ%'";
                                                                        $result_tt = $conn->query($sql_tt);
                                                                        if($result_tt->num_rows > 0){
                                                                            while($row_tt = $result_tt->fetch_assoc()){
                                                                                echo '<p >
                                                                                <a class="d-flex mt-2 mb-2 align-items-center" href="thuonghieu.php?id='.$row_tt['id'].'">
                                                                                    <img src="https://beta-admin.curnonwatch.com/media/catalog/category/Melissani_2000px_1x1.png?auto=webp&format=png&width=80&height=80&fit=cover&method=fit&nocrop=true" alt="" />
                                                                                    <span>'.$row_tt['name'].'</span>
                                                                                </a>
                                                                            </p>';
                                                                            }
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <p class="p-4 pb-0">
                                                                    <a href="thuonghieu.php" class="d-block btn btn-ellipse btn-outline-primary mx-auto">XEM TẤT CẢ <i class="fas fa-arrow-right"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="img_scale">
                                                                <div class="nav_img">
                                                                    <a href="thuonghieu.php"><img src="https://curnonwatch.com/media/catalog/category/NewFlorenge.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="" width="100%" /></a>
                                                                </div>
                                                                <p class="p-4 text_hover d-flex justify-content-between">
                                                                    <span>NEW ARRIVALS</span>
                                                                    <span><i class="fas fa-arrow-right"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="img_scale">
                                                                <div class="nav_img">
                                                                <a href="thuonghieu.php"><img src="https://curnonwatch.com/media/catalog/category/NewFlorenge.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="" width="100%" /></a>
                                                                </div>
                                                                <p class="p-4 text_hover d-flex justify-content-between">
                                                                    <span>NEW ARRIVALS</span>
                                                                    <span><i class="fas fa-arrow-right"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="hover_item hover_item3">
                                                    <p class="abc pt-1 pe-5 pb-1">DÂY ĐỒNG HỒ</p>
                                                    <div class="hover_nam row align-items-center">

                                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                            <div class="nav_img">
                                                                <img width="100%" src="https://curnonwatch.com/media/catalog/category/Straps.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                            <p style="font-size: 32px" class="ps-4">SPECIAL OFFERS: <span class="color-red">UP TO 25%</span></p>
                                                            <div class="d-flex">
                                                                <button width="350px" height="40px" style="position: relative; line-height: 40px;" class="ms-4 btn btn-ellipse d-block">DÂY ĐỒNG HỒ NAM</button>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="hover_item hover_item4">
                                                    <p class="abc pt-1 pe-5 pb-1 color-red">ONE SALE</p>
                                                    <div class="hover_nam row align-items-center">
                                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                            <div class="nav_img">
                                                                <img width="100%" src="https://cms.curnonwatch.com/uploads/sale_bogo_19052021_02028e3321.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                            <p style="font-size: 28px" class="ps-4">MUA 1 ĐỒNG HỒ TẶNG 1 VÒNG TAY</p>
                                                            <p style="font-size: 28px" class="ps-4 color-red">Chương trình kéo dài từ 19/5 - 23/5</p>
                                                            <div class="d-flex">
                                                                <a href="thuonghieu.php" width="350px" height="40px" style="position: relative; line-height: 40px;" class=" ms-4 btn d-block btn-outline-dark btn-ellipse">MUA ĐỒNG HỒ NGAY</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item test2">
                    <a class="nav-link phukien" href="#">PHỤ KIỆN</a>
                    <div class="container-fluid hover_test2">
                        <div class="nav_hover p-2 pt-5 bg-light">
                            <div class="row">
                                <div class="nav_hover-item">
                                    <div class="ps-4">
                                        <ul class="hover_list">
                                            <li class="mb-2">KHÁM PHÁ</li>
                                            <li class="">
                                                <div class="hover_item hover_item3">
                                                    <p class="abc pt-1 pe-5 pb-1">PHỤ KIỆN NỮ</p>
                                                    <div class="hover_nam hover_nu row align-items-center">

                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="nav_img">
                                                                <img width="100%" src="https://curnonwatch.com/media/catalog/category/Banner-menu-Aura.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="">
                                                            </div>
                                                            <p style="background-color: white;" class="d-flex p-3 justify-content-between"><span>VÒNG TAY NỮ </span><span><i class="fas fa-arrow-right"></i></span></p>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="nav_img">
                                                                <img width="100%" src="https://curnonwatch.com/media/catalog/category/Banner-menu-Aura.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="">
                                                            </div>
                                                            <p style="background-color: white;" class="d-flex p-3 justify-content-between"><span>VÒNG TAY NỮ </span><span><i class="fas fa-arrow-right"></i></span></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="hover_item hover_item3">
                                                    <p class="abc pt-1 pe-5 pb-1">PHỤ KIỆN NAM</p>
                                                    <div class="hover_nam row align-items-center">

                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="nav_img">
                                                                <img width="100%" src="https://curnonwatch.com/media/catalog/category/Banner-menu-Aura.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="">
                                                            </div>
                                                            <p style="background-color: white;" class="d-flex p-3 justify-content-between"><span>VÒNG TAY NỮ </span><span><i class="fas fa-arrow-right"></i></span></p>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <div class="nav_img">
                                                                <img width="100%" src="https://curnonwatch.com/media/catalog/category/Banner-menu-Aura.jpg?auto=webp&format=pjpg&width=960&height=960&fit=cover&method=fit&nocrop=true" alt="">
                                                            </div>
                                                            <p style="background-color: white;" class="d-flex p-3 justify-content-between"><span>VÒNG TAY NỮ </span><span><i class="fas fa-arrow-right"></i></span></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item test3">
                    <a class="nav-link thuonghieu" href="#">THƯƠNG HIỆU</a>
                    <div class="container-fluid hover_test3">
                        <div class="nav_hover p-4 pt-5 bg-light">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="nav_img1">
                                        <img width="100%" src="https://curnonwatch.com/whynot-iRG.jpg?auto=png&format=pjpg" alt="">
                                        <p style="width: 200px; border-color: white; color:white; position: absolute" class="btn color-white btn-outline-dark btn-ellipse position">KHÁM PHÁ BLOG</p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="nav_img1">
                                        <img width="100%" height="246px" src="https://curnonwatch.com/about-us-wmP.jpg?auto=png&format=pjpg" alt="">
                                        <p style="width: 200px; border-color: white;color:white; position: absolute" class="btn color-white btn-outline-dark btn-ellipse position">VỀ CHÚNG TÔI</p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <div class="nav_img1">
                                        <img width="100%" src="https://curnonwatch.com/longandshort-pwP.jpg?auto=png&format=pjpg&width=1200" alt="">
                                        <p style="width: 200px; border-color: white;color:white; position: absolute" class="btn color-white btn-outline-dark btn-ellipse position">TÌM HIỂU THÊM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <?php 
                $sql_setting_menu = "SELECT * FROM `setting` LIMIT 1";
                $result_setting_menu = $conn->query($sql_setting_menu);
                if($result_setting_menu->num_rows > 0){
                    while ($row_setting_menu = $result_setting_menu->fetch_assoc()){
                        $logo = $row_setting_menu['logo'];
                        echo '
                        <div class="logo">
                            <a href="index.php">
                                <img src="./admin/light-bootstrap-dashboard-master/examples/images/setting/'.$logo.'" alt="">
                            </a>
                        </div>
                        ';
                    }
                }else{
                    echo '
                        <div class="logo">
                            <a href="index.php">
                                <img src="./admin/light-bootstrap-dashboard-master/examples/images/logo-mWb.svg" alt="">
                            </a>
                        </div>
                        ';
                }
            ?>
            
            <ul class="mb-2 mb-lg-0 d-flex">
                <li class="nav-item login_hover">
                    <a class="nav-link" href="">TÀI KHOẢN</a>
                    <div class="login">
                        <?php 
                            if(isset($_COOKIE['user'])){
                                $email = $_COOKIE['user'];
                                $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo '
                                            <p>'.$row['name'].'</p>
                                            <p><a href="infor.php">Thông tin</a></p>
                                            <p><a href="dangxuat.php">Đăng xuất</a></p>
                                        ';
                                    }
                                }
                            }else{
                                echo '<p class="border-bottom"><a href="login.php">Đăng Nhập</a></p>
                                <p><a href="signup.php">Đăng Ký</a></p>';
                            }
                        ?>
                        
                    </div>
                </li>
                <li class="nav-item focus_cart">
                    <a class="nav-link" href="#"><label for="nav_input">GIỎ HÀNG <i class="fas fa-shopping-bag"></i>

                    <?php 
                    if(!empty($_SESSION['cart'])){
                        $pro = "SELECT * FROM `products` Where id_product in (" . implode(",", array_keys($_SESSION['cart'])) . ")";
                        $products = $conn->query($pro);
                        if($products ->num_rows > 0){
                            $dem_cart = 0;
                            while ($row_cart = $products ->fetch_assoc()){
                                $dem_cart++;
                            }
                            echo '<span class="cart_dem">'.$dem_cart.'</span>';
                        }
                            if (isset($_POST['update_click1'])) {
                                foreach ($_POST['quantity'] as $id => $quantity) {
                                    if ($quantity == 0) {
                                        unset($_SESSION['cart'][$id]);
                                        header('Location: index.php');
                                    } else {
                                        $_SESSION['cart'][$id] = $quantity;
                                    }
                                }
                            }
                    }
                    ?>
                    
                    </label></a>
                    <input type="checkbox" hidden class="nav_input" id="nav_input">
                    <label for="nav_input" name="1" class="over_lay"></label>
                    <div class="cart bg-light">
                        <div class="cart_header p-4 d-flex justify-content-between border-bottom">
                            <p>GIỎ HÀNG CỦA BẠN</p>
                            <div class="exit">
                                <label for="nav_input" class="fas fa-times"></label>
                            </div>
                        </div>
                        <div class="cart_body" style="height: 500px; overflow: auto; background-color: white;">
                            <?php 
                                if (!empty($_SESSION['cart'])) {
                                    $pro = "SELECT * FROM `products` Where id_product in (" . implode(",", array_keys($_SESSION['cart'])) . ")";
                                    $products = $conn->query($pro);
                                    echo '<div class="">
                                    <div class="cart_list_123 p-4">';
                                    if($products ->num_rows > 0){
                                        while ($row_cart = $products ->fetch_assoc()){
                                            echo '
                                            <form method="post">
                                            <div class="d-flex justify-content-between align-items-center px-5 pt-3 pb-3 border-bottom ">
                                            <img src="./admin/light-bootstrap-dashboard-master/examples/images/product/'.$row_cart['image'].'" width="100px" alt="">
                                            <div class="price_cart">
                                                <p class="cart_name">'.$row_cart['name_product'].'</p>
                                                <div class="d-flex align-items-center">
                                                    <input style="width:100px !important" value="'.$_SESSION['cart'][$row_cart['id_product']].'" name="quantity[' . $row_cart['id_product'] . ']"" type="number" min="0" class="form-control" name="">
                                                    <i class="fas fa-times mx-1"></i>
                                                    <p>'.number_format($row_cart['product_price']).'đ</p>
                                                </div>
                                            </div>
                                            <a href="delete_cart.php?id='.$row_cart['id_product'].'"><i style="font-size:24px; margin-top: 12px;" class="fas fa-trash-alt"></i></a>
                                        </div>';
                                        }
                                        echo '</div>
                                       <div class="d-flex justify-content-around mt-4">
                                        <button type="submit" name="update_click1" class="btn btn-outline-primary btn-primary">Cập nhật<table></table></button>
                                        <a href="giohang.php" class="btn btn-dark text-white">Xem chi tiết giỏ hàng</a></div>
                                    </div>';
                                    }
                                }else{
                                    echo '<div class="cart_list mt-5">
                                    <p class="text-center mb-4">Hiện tại chưa có sản phẩm nào trong giỏ hàng</p>
                                    <label for="nav_input" style="position: relative;" class="btn d-block w-50 mx-auto btn-ellipse">TIẾP TỤC MUA HÀNG</label>
                                </div>';
                                }
                                echo'
                                    
                                </form>';
                            ?>
                        </div>
                        <div class="cart_footer p-3 ">

                            <div class="row">
                                <div class="col-xs-6 col-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img src="https://curnonwatch.com/warranty-81R.svg" alt="">
                                        <p class="ms-2">Bảo hành 10 năm
                                            lỗi nhà sản xuất</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img src="https://curnonwatch.com/shipping-tZV.svg" alt="">
                                        <p class="ms-2">Freeship
                                            với đơn hàng > 700K</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </li>
                <li class="nav-item focus_cart">
                    <a class="nav-link" href="#"><label for="nav_input1"><i class="fas fa-search"></i></label></a>
                    <input type="checkbox" hidden class="nav_input1" id="nav_input1">
                    <label for="nav_input1" class="over_lay"></label>
                    <div class="search bg-white">
                        <div class="cart_header p-4 d-flex justify-content-between border-bottom">
                            <div class="exit ps-4">
                                <label for="nav_input1" class="fas fa-times"></label>
                            </div>
                        </div>
                        <div class="cart_body">
                            
                            <div class="frmSearch p-4">
                                <?php 
                                    include 'search.php';
                                ?>
                            </div>
                        
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </nav>