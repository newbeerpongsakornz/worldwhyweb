<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/notoFont.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/indexJS.js"></script>
    <script src="https://kit.fontawesome.com/a0ce56af97.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="https://yayoirestaurants.com/frontend/assets/images/favicon.ico" type="image/x-icon">

    <title>Yayoi Restaurant : Modern Japanese Restaurant in Thailand - ยาโยอิ เซ็ตอร่อยของทุกคน</title>
</head>

<body class="notoFont">

    <!-- Head -->
    <header>
        <div class="topheader shadow">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="toppic logoYayoi" style="z-index: 1;">
                                    <a href="index.php">
                                        <img src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว" width="100%" height="78px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5 font-weight-bold pt-2 "><a class="headMenuMain" href="menu/promoFood.php" class="float-right">เมนูยาโยอิ</a></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-end" id="headBoxRight">
                            <div class="headMenuBox pt-2">
                                <a class="headMenu" href="login.php">เข้าระบบ</a>
                                <b class="pl-2">|</b></div>
                            <div class="headMenuBox pt-2 pl-0 pr-1">
                                <a class="headMenu" href="register.php">สมัครสมาชิก</a>
                                <b class="pl-2">|</b></div>
                            <div class="headMenuBox pt-1">
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        TH
                                        <span style="font-size: 20px; color: white;">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="#">EN</a>
                                    </div>
                                </div>
                            </div>
                            <div class="headMenuBox" onmouseover="changeIconDer('over')" onmouseout="changeIconDer('out')">
                                <button onclick="window.location.href='menu/promoFood.php'" class="btn font-weight-bold orderFoodBt"><img id='deliveryIcon' src="icon/delivery.PNG" height="21px"> สั่งอาหารทันที</button>
                            </div>
                            <div class="headMenuBox pt-1" onmouseover="changeIconBasket('over')" onmouseout="changeIconBasket('out')">
                                <a class="headMenu" href="cart.php"><img id='BasketIcon' src="icon/busket.PNG" width="27px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <?php
        $bannerImg = array(
            "https://yayoirestaurants.com/mainbanners/1937__AW Yayoi-Tokyo-Trio_Web-Banner-1920-x-803-px.jpg",
            "https://yayoirestaurants.com/mainbanners/9377_Desktop-1920x803px.jpg"
        );
        $htmlText = "<ol class='carousel-indicators' style='margin-bottom: 5px;'>";
        for ($i = 0; $i < sizeOf($bannerImg); $i++) {
            if ($i == 0) {
                $htmlText .= "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
            } else {
                $htmlText .= "<li data-target='#carouselExampleIndicators' data-slide-to='" . $i . "'></li>";
            }
        }
        $htmlText .= "</ol><div class='carousel-inner'>";
        for ($i = 0; $i < sizeOf($bannerImg); $i++) {
            $htmlText .= "<div class='carousel-item";
            if ($i == 0) {
                $htmlText .= " active'>";
            } else {
                $htmlText .= "'>";
            }
            $htmlText .= "<img src='" . $bannerImg[$i] . "' class='d-block w-100'></div>";
        }
        $htmlText .= "</div>";
        echo $htmlText;
        ?>
    </div>

    <!-- Body -->
    <!-- <br><br> -->
    <div class="text-center my-5">
        <img src="icon/like.PNG" width="40px" style="transform: translateY(-7px);">
        <b class="headBody">เมนูยอดนิยม</b>
    </div>
    <div class="container text-center">
        <div class="menuBar" id="menuBar">
            <?php
            $nameEN = ["promoFood", "freeFood", "setFood", "donburi", "bento", "ramen", "sideDish", "drink", "dessert"];
            $nameTH = ["โปรโมชั่น", "ของทานเล่น", "เซ็ต", "ดงบุริ", "เบนโตะ", "ราเม็ง", "เครื่องเคียง", "เครื่องดื่ม", "ของหวาน"];
            for ($i = 0; $i < sizeOf($nameTH); $i++) {
                if ($i == 0) {
                    echo "<a href='menu/" . $nameEN[$i] . ".php'><div class='menuBox menuSelect'>";
                    echo "<img src='icon/" . ($i + 1) . "1.PNG'height='40px'><br>";
                    echo $nameTH[$i] . "</div></a>";
                } else {
                    echo "<a href='menu/" . $nameEN[$i] . ".php' class='menuText'><div class='menuBox' onmouseover='changeMenuColor(" . ($i + 1) . ", \"over\")' onmouseout='changeMenuColor(" . ($i + 1) . ", \"out\")'>";
                    echo "<img id='imgMenuBox" . ($i + 1) . "' src='icon/" . ($i + 1) . ".PNG' height='40px'><br>";
                    echo $nameTH[$i] . "</div></a>";
                }
            }
            ?>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12">
                <div id="menuPromo" class="row">
                    <?php
                    $url = "json/promoFood.json";
                    $res = file_get_contents($url);
                    $data = json_decode($res);

                    for ($i = 0; $i < sizeOf($data); $i++) {
                        $menu = $data[$i];
                        echo "<div class='menu col-6 col-lg-4'>";
                        echo "<a href='menu/promoFood.php'><img src='" . $menu->img . "' width='286px' title='" . $menu->id . " " . $menu->nameTH . "'></a><br><br>";
                        echo "<div class='logoType'></div>";
                        echo "<a href=''menu/promoFood.php' class='linkMenu'><div class='nameMenu font-weight-bold' id='nameMenu$i' onmouseover='changeMenuName($i, \"over\")' onmouseout='changeMenuName($i, \"out\")'>" . $menu->nameTH . "<br>";
                        echo "<div class='nameMenuJP font-weight-normal' id='nameMenuJP$i'>" . $menu->nameJP . "<br><br></div></div></a>";
                        echo "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ " . $menu->price . "</b>&nbsp;&nbsp;";
                        echo "<button class='cartBt' onclick='add(\"" . $menu->id . "\", \"promoFood\")'><img src='icon/addcart.PNG' width='70%'></button></div></div>";
                        echo "</div>";
                    }
                    ?>
                </div>
                <div class=" p-4 pb-4 m-3">
                    <button onclick="window.location.href='menu/promoFood.php'" class="seemoreBt seemore"><a href="menu/promoFood.php"></a><b>ดูทั้งหมด</b></button> <br><br>
                </div>
                <hr class="my-4"><br>
                <div><img src="icon/promo.PNG" width="50px" class="pb-3 mr-1">
                    <b class="headBody">โปรโมชั่น</b>
                </div><br>
                <div id="menuPromoIndex" class="row">
                    <?php
                    $url = "json/promoFoodIndex.json";
                    $res = file_get_contents($url);
                    $data = json_decode($res);

                    for ($i = 0; $i < sizeof($data); $i++) {
                        $menu = $data[$i];
                        echo "<div class='menu col-6'>";
                        echo "<a href='help/promotions/" . ($i + 1) . ".php'><img class='promoimg' src='" . $menu->img . "' width='85%' title='" . $menu->id . "'></a><br><br>";
                        echo "</div>";
                    }
                    ?>
                </div>
                <div class="pb-4 m-3">
                    <button onclick="window.location.href='help/promo.php'" class="seemoreBt seemore"><b>ดูทั้งหมด</b></button> <br><br>
                </div>
            </div>
        </div>
    </div>
    <a id="goToCartBtn" href="cart.php" class="bottom-busket"><img src="icon/busket.PNG" width='26px' class="mt-2 mb-1"></a>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <a href="index.php">
                <img width="200px" src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว">
            </a><br><br>
            <div id="aniDelivery">
                <img width="79px" src="https://yayoirestaurants.com/frontend/assets/images/icon/delivery_icon.svg">
            </div>
            <div id="footerMenu">
                <div class="FMenu"><a href="help/promo.php">โปรโมชั่น</a></div>
                <div class="FMenu"><a href="help/branch.php">สาขายาโยอิ</a></div>
                <div class="FMenu"><a href="help/about.php">เกี่ยวกับยาโยอิ</a></div>
                <div class="FMenu"><a href="help/contact.php">ติดต่อเรา</a></div>
                <div class="FMenu"><a href="help/sugguest.php">แนะนำติชมการให้บริการ</a></div>
                <div class="FMenu"><a href="help/condition.php">เงื่อนไขการให้บริการ</a></div>
                <div class="FMenu"><a href="help/policy.php">นโยบายความเป็นส่วนตัว</a></div>
            </div><br>
            <div id="contact">
                <b class="mb-3">ติดตามเราที่นี่</b><br><br>
                <div><a href="https://www.facebook.com/YayoiRestaurantThailand" target="_blank"><img src="https://yayoirestaurants.com/frontend/assets/images/icon/fb_icon.svg"></a></div>
                <div><a href="https://line.me/R/ti/p/%40327rcyjo" target="_blank"><img src="https://yayoirestaurants.com/frontend/assets/images/icon/line_icon.svg"></a></div>
                <div><a href="https://www.instagram.com/yayoith_official/?igshid=p9ki0k2ayxv1" target="_blank"><img src="https://yayoirestaurants.com/frontend/assets/images/icon/ins_icon.svg"></a></div>
                <div><a href="https://www.youtube.com/user/YayoiThailand" target="_blank"><img src="https://yayoirestaurants.com/frontend/assets/images/icon/yt_icon.svg"></a></div>
            </div>

        </div><br>
        <div id="credit">
            <div style="transform: translateY(10px);">
                <img width="100%" src="https://yayoirestaurants.com/frontend/assets/images/bg_footer_bottom.png?c3d6b62">
            </div>
            <div id="creditD">© 2557-2563 บริษัท เอ็มเค อินเตอร์ฟู้ด</div>
        </div>
    </footer>
</body>


</html>