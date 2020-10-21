<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/notoFont.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/indexJS.js"></script>
    <script src="https://kit.fontawesome.com/a0ce56af97.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="https://yayoirestaurants.com/frontend/assets/images/favicon.ico" type="image/x-icon" >
    
    <title>Yayoi Restaurant : Modern Japanese Restaurant in Thailand - ยาโยอิ เซ็ตอร่อยของทุกคน</title>
</head>
<!-- onload="load()" -->
<body class="notoFont" >

    <!-- Head -->
    <header>
        <div class="topheader shadow">
            <div class="container notoFont">
                <div class="row p-3">
                    <div class="col-md-4">
                        <div class="row justify-content-start">
                            <div class="col-md-8">
                                <div class="toppic p-3 shadow-lg logoYayoi" style="z-index: 1;">
                                    <img src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว" width="100%">
                                </div>
                            </div>
                            <div class="col-md-4 font-weight-bold"><a class="headMenu" href="" class="float-right">เมนูยาโยอิ</a></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-end">
                            <div class="headMenuBox text-center">
                                <a class="headMenu" href="" class="">เข้าระบบ</a>
                            </div> |
                            <div class="headMenuBox">
                                <a class="headMenu" href="">สมัครสมาชิก</a>
                            </div>|
                            <div class="headMenuBox">
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
                            <div class="headMenuBox">
                                <button class="btn font-weight-bold orderFoodBt"><img src="../icon/delivery.PNG" height="21px"> สั่งอาหารทันที</button>
                            </div>
                            <div class="headMenuBox">
                                <a class="headMenu" href=""><img src="../icon/busket.PNG" width="30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <div>
   <img src="https://yayoirestaurants.com/mainbanners/3880_Cart.jpg" data-src="https://yayoirestaurants.com/mainbanners/3880_Cart.jpg" class="d-block w-100">
   </div>

    <!-- Body -->
    <div class="container text-center py-5">
        <div>
            <img src="../icon/like.PNG" width="40px">
            <b class="headBody">เมนูยาโยอิ</b>
        </div>
        <div class="menuBar" id="menuBar">
            <?php
                $nameEN = ["promoFood", "freeFood", "setFood", "donburi", "bento", "ramen", "sideDish", "drink"];
                $nameTH = ["โปรโมชั่น", "ของทานเล่น", "เซ็ต", "ดงบุริ", "เบนโตะ", "ราเม็ง", "เครื่องเคียง", "เครื่องดื่ม"];
                for ($i = 0; $i < sizeOf($nameTH); $i++)
                {
                    if ($i == 0)
                    {
                        echo "<div class='menuBox menuSelect'>";
                        echo "<img src='../icon/".($i+1)."1.PNG' width='40px' height='40px'><br><br>";
                        echo $nameTH[$i]."</div>";
                    }
                    else
                    {
                        echo "<a href='menu/".$nameEN[$i].".php' class='menuText'><div class='menuBox' onmouseover='changeMenuColor(".($i+1).", \"in\")' onmouseout='changeMenuColor(".($i+1).", \"out\")'>";
                        echo "<img id='imgMenuBox".($i+1)."' src='../icon/".($i+1).".PNG' width='40px' height='40px'><br><br>";
                        echo $nameTH[$i]."</div></a>";
                    }
                }
            ?>
        </div>

        <div class="row">
            <div class="col-md-9">
            <br><br>
                <div id="menuPromo" class="row">
                    <?php
                        $url = "../json/promoFood.json";
                        $res = file_get_contents($url);
                        $data = json_decode($res);

                        for ($i = 0; $i < sizeOf($data); $i++)
                        {
                            $menu = $data[$i];
                            echo "<div class='menu col-4 p-0'>";
                            echo "<a href=''><img src='".$menu->img."' width='85%' title='".$menu->id." ".$menu->nameTH."'></a><br><br>";
                            echo "<div class='logoType'></div>";
                            echo "<a href='' class='linkMenu'><div class='nameMenu' id='nameMenu$i' onmouseover='changeMenuName($i, \"in\")' onmouseout='changeMenuName($i, \"out\")'>".$menu->nameTH."<br>";
                            echo "<div class='nameMenuJP' id='nameMenuJP$i'>".$menu->nameJP."<br><br></div></div></a>";
                            echo "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ ".$menu->price."</b>&nbsp;&nbsp;";
                            echo "<button class='cartBt' onclick='add(".$menu->id.")'><img src='../icon/addcart.PNG' width='70%'></button></div></div>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
            <div class="cart col-3 ">
                <div class="card" style="width: 100%;">
                    <div class="card-header card-bd font-weight-bold">
                      รายการอาหารทั้งหมด
                    </div>
                    <div class="card-bd">
                        <div id="menuChoose">
                            
                        </div>
                        <div id="totalMenu">
                            ราคาอาหารทั้งหมด <br>
                            (ยังไม่รวมค่าจัดส่ง)
                        </div>
                        
                        
                        <div id="noChoose">ไม่พบสินค้าในตะกร้า</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div>
            <button class='plusAdd' onmouseover="changeBt()">
                <span>
                    <i class="fas fa-plus"></i>
                </span>
            </button>
        </div>
        <div>
            <button class='minusAdd'>
                <span>
                    <i class="fas fa-minus"></i>
                </span>
            </button>
        </div> -->
    </div>

    

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <a href="">
                <img width="200px" src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว">
            </a><br><br>
            <img width="79px" src="https://yayoirestaurants.com/frontend/assets/images/icon/delivery_icon.svg">
            <div id="footerMenu">
                <div class="FMenu"><a href="">โปรโมชั่น</a></div>
                <div class="FMenu"><a href="">สาขายาโยอิ</a></div>
                <div class="FMenu"><a href="">เกี่ยวกับยาโยอิ</a></div>
                <div class="FMenu"><a href="">ติดต่อเรา</a></div>
                <div class="FMenu"><a href="">แนะนำติชมการให้บริการ</a></div>
                <div class="FMenu"><a href="">เงื่อนไขการให้บริการ</a></div>
                <div class="FMenu"><a href="">นโยบายความเป็นส่วนตัว</a></div>
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
