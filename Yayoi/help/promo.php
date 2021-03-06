<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/notoFont.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="../js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/a0ce56af97.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="https://yayoirestaurants.com/frontend/assets/images/favicon.ico" type="image/x-icon" >
    
    <title>Yayoi Restaurant : Modern Japanese Restaurant in Thailand - ยาโยอิ เซ็ตอร่อยของทุกคน</title>
</head>
<body class="notoFont">
    <header>
        <div class="topheader shadow">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md-5">
                        <div class="row justify-content-start">
                            <div class="col-md-7">
                                <a href="../index.php"><div class="toppic p-3 shadow-lg logoYayoi" style="z-index: 1;">
                                    <img src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว" width="100%">
                                </div></a>
                            </div>
                            <div class="col-md-5 font-weight-bold pt-2 "><a class="headMenu" href="../menu/promoFood.php" class="float-right">เมนูยาโยอิ</a></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-end">
                            <div class="headMenuBox pt-2">
                                <a class="headMenu" href="../login.php">เข้าระบบ</a>
                                <b class="pl-2">|</b></div> 
                            <div class="headMenuBox pt-2 pl-0 pr-1">
                                <a class="headMenu" href="../register.php">สมัครสมาชิก</a>
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
                                <button onclick="window.location.href='../menu/promoFood.php'" class="btn font-weight-bold orderFoodBt"><img id='deliveryIcon' src="../icon/delivery.PNG" height="21px"> สั่งอาหารทันที</button>
                            </div>
                            <div class="headMenuBox pt-1" onmouseover="changeIconBasket('over')" onmouseout="changeIconBasket('out')">
                                <a class="headMenu" href="../cart.php"><img id='BasketIcon' src="../icon/busket.PNG" width="30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container">
        <div class="text-center m-3">
            <img src="../icon/promo.PNG" width="50px" class="pb-3 mr-1">
            <b class="headBody">โปรโมชั่น</b>
        </div>
        
            <div id="menuPromoIndex" class="row">
                    <?php
                        $url = "../json/promoFoodIndex.json";
                        $res = file_get_contents($url);
                        $data = json_decode($res);

                        echo "<div class='menu col-1'>";
                        echo "</div>";

                        for ($i = 0; $i < sizeOf($data); $i++)
                        {
                            $menu = $data[$i];
                           
                            echo "<div class='menu col-5'>";    
                            echo "<div class='float-right'>";
                            echo "<a href='promotions/".($i+1).".php'><img src='".$menu->img."' width='100%' title='".$menu->id."' class='promoimg'></a><br><br>";   
                            echo "<div class='datepromo' id='nameMenuJP$i'>".$menu->time."<br>";
                            echo "<a href='' class='linkpromo'><div class='' id='nameMenu$i'>".$menu->Detail."<br><br></div></div></a>";
                            echo "</div></div>";

                        }
                    ?>                 
                </div></div>
            

    <footer class="text-center">
        <div class="container">
            <a href="index.php">
                <img width="200px" src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว">
            </a><br><br>
            <div id="aniDelivery">
                <img width="79px" src="https://yayoirestaurants.com/frontend/assets/images/icon/delivery_icon.svg">
            </div>
            <div id="footerMenu">
                <div class="FMenu"><a href="promo.php">โปรโมชั่น</a></div>
                <div class="FMenu"><a href="branch.php">สาขายาโยอิ</a></div>
                <div class="FMenu"><a href="about.php">เกี่ยวกับยาโยอิ</a></div>
                <div class="FMenu"><a href="contact.php">ติดต่อเรา</a></div>
                <div class="FMenu"><a href="sugguest.php">แนะนำติชมการให้บริการ</a></div>
                <div class="FMenu"><a href="condition.php">เงื่อนไขการให้บริการ</a></div>
                <div class="FMenu"><a href="policy.php">นโยบายความเป็นส่วนตัว</a></div>
            </div><br>
            <div id="contact">
                <b>ติดตามเราที่นี่</b><br><br>
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