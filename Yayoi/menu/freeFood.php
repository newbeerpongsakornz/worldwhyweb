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
            <div class="container notoFont">
                <div class="row p-3">
                    <div class="col-md-4">
                        <div class="row justify-content-start">
                            <div class="col-md-8">
                                <a href="../index.php"><div class="toppic p-3 shadow-lg logoYayoi" style="z-index: 1;">
                                    <img src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว" width="100%">
                                </div></a>
                            </div>
                            <div class="col-md-4 font-weight-bold"><a class="headMenu" href="promoFood.php" class="float-right">เมนูยาโยอิ</a></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-end">
                            <div class="headMenuBox text-center">
                                <a class="headMenu" href="../login.php">เข้าระบบ</a>
                            </div> |
                            <div class="headMenuBox">
                                <a class="headMenu" href="../register.php">สมัครสมาชิก</a>
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
                            <div class="headMenuBox" onmouseover="changeIconDer('over')" onmouseout="changeIconDer('out')">
                                <button onclick="window.location.href='promoFood.php'" class="btn font-weight-bold orderFoodBt"><img id='deliveryIcon' src="../icon/delivery.PNG" height="21px"> สั่งอาหารทันที</button>
                            </div>
                            <div class="headMenuBox" onmouseover="changeIconBasket('over')" onmouseout="changeIconBasket('out')">
                                <a class="headMenu" href="../cart.php"><img id='BasketIcon' src="../icon/busket.PNG" width="30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <img src="https://yayoirestaurants.com/mainbanners/3880_Cart.jpg" width="100%">
    <br><br>
    <div class="container-fluid text-center">
        <div>
            <img src="../icon/like.PNG" width="40px">
            <b class="headBody">เมนูยาโยอิ</b>
        </div>
        <div class="menuBar" id="menuBar">
            <?php
                $nameEN = ["promoFood", "freeFood", "setFood", "donburi", "bento", "ramen", "sideDish", "drink", "dessert"];
                $nameTH = ["โปรโมชั่น", "ของทานเล่น", "เซ็ต", "ดงบุริ", "เบนโตะ", "ราเม็ง", "เครื่องเคียง", "เครื่องดื่ม", "ของหวาน"];
                for ($i = 0; $i < sizeOf($nameTH); $i++)
                {
                    if ($i == 1)
                    {
                        echo "<a href='".$nameEN[$i].".php'><div class='menuBox menuSelect'>";
                        echo "<img src='../icon/".($i+1)."1.PNG' height='40px'><br><br>";
                        echo $nameTH[$i]."</div></a>";
                    }
                    else
                    {
                        echo "<a href='".$nameEN[$i].".php' class='menuText'><div class='menuBox' onmouseover='changeMenuColor(".($i+1).", \"over\")' onmouseout='changeMenuColor(".($i+1).", \"out\")'>";
                        echo "<img id='imgMenuBox".($i+1)."' src='../icon/".($i+1).".PNG' height='40px'><br><br>";
                        echo $nameTH[$i]."</div></a>";
                    }
                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div id="foodType" class="text-center">
                    <?php

                        $typeTH = array("ทั้งหมด", "เนื้อไก่", "เนื้อปลา", "เนื้อหมู", "เนื้อกุ้ง");
                        $typeEN = array("all", "chicken", "fish", "pork", "shrimp");
                        
                        for ($i = 0; $i < sizeof($typeTH); $i++)
                        {
                            echo "<div class='typeBox' id='".$typeEN[$i]."Type' onclick='changeMenuType(\"freeFood\", \"".$typeEN[$i]."\")' onmouseover='changeTypeIcon(\"".$typeEN[$i]."\", \"over\")' onmouseout='changeTypeIcon(\"".$typeEN[$i]."\", \"out\")'>";
                            echo "<img id='".$typeEN[$i]."Img' src='../icon/".$typeEN[$i].".PNG' height='20px'><br>";
                            echo $typeTH[$i]."</div>";
                        }
                    ?>
                </div>
                <div id="menuPromo" class="row">
                    <?php
                        $url = "../json/freeFood.json";
                        $res = file_get_contents($url);
                        $data = json_decode($res);

                        for ($i = 0; $i < sizeOf($data); $i++)
                        {
                            if ($i == 2)
                            {
                                $menu = $data[$i];
                                echo "<div class='menu col-4 p-0'>";
                                echo "<div class='recommend'><img src='../icon/mask.svg' style='width:130%;'><div class='rectext text-center'>แนะนำ</div></div>";
                                echo "<a href=''><img src='".$menu->img."' width='85%' title='".$menu->id." ".$menu->nameTH."'></a><br><br>";
                                echo "<div class='logoType'>";
                                for ($j = 0; $j < sizeof($menu->type); $j++)
                                {
                                    echo "<div class='logoTypeBox'><img src='../icon/".$menu->type[$j].".PNG' height='26px'></div>";
                                }
                                echo "</div><a href='' class='linkMenu'><div class='nameMenu' id='nameMenu$i' onmouseover='changeMenuName($i, \"over\")' onmouseout='changeMenuName($i, \"out\")'>".$menu->nameTH."<br>";
                                echo "<div class='nameMenuJP' id='nameMenuJP$i'>".$menu->nameJP."<br><br></div></div></a>";
                                echo "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ ".$menu->price."</b>&nbsp;&nbsp;";
                                echo "<button class='cartBt' onclick='add(\"".$menu->id."\", \"freeFood\")'><img src='../icon/addcart.PNG' width='70%'></button></div></div>";
                                echo "</div>";
                            }
                            else 
                            {
                                $menu = $data[$i];
                                echo "<div class='menu col-4 p-0'>";
                                echo "<a href=''><img src='".$menu->img."' width='85%' title='".$menu->id." ".$menu->nameTH."'></a><br><br>";
                                echo "<div class='logoType'>";
                                for ($j = 0; $j < sizeof($menu->type); $j++)
                                {
                                    echo "<div class='logoTypeBox'><img src='../icon/".$menu->type[$j].".PNG' height='26px'></div>";
                                }
                                echo "</div><a href='' class='linkMenu'><div class='nameMenu' id='nameMenu$i' onmouseover='changeMenuName($i, \"over\")' onmouseout='changeMenuName($i, \"out\")'>".$menu->nameTH."<br>";
                                echo "<div class='nameMenuJP' id='nameMenuJP$i'>".$menu->nameJP."<br><br></div></div></a>";
                                echo "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ ".$menu->price."</b>&nbsp;&nbsp;";
                                echo "<button class='cartBt' onclick='add(\"".$menu->id."\", \"freeFood\")'><img src='../icon/addcart.PNG' width='70%'></button></div></div>";
                                echo "</div>";

                            }
                            
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
    </div>


    <footer class="text-center">
        <div class="container">
            <a href="../index.php">
                <img width="200px" src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว">
            </a><br><br>
            <div id="aniDelivery">
                <img width="79px" src="https://yayoirestaurants.com/frontend/assets/images/icon/delivery_icon.svg">
            </div>
            <div id="footerMenu">
                <div class="FMenu"><a href="../help/promo.php">โปรโมชั่น</a></div>
                <div class="FMenu"><a href="../help/branch.php">สาขายาโยอิ</a></div>
                <div class="FMenu"><a href="../help/about.php">เกี่ยวกับยาโยอิ</a></div>
                <div class="FMenu"><a href="../help/contact.php">ติดต่อเรา</a></div>
                <div class="FMenu"><a href="../help/sugguest.php">แนะนำติชมการให้บริการ</a></div>
                <div class="FMenu"><a href="../help/condition.php">เงื่อนไขการให้บริการ</a></div>
                <div class="FMenu"><a href="../help/policy.php">นโยบายความเป็นส่วนตัว</a></div>
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
                <img  width="100%" src="https://yayoirestaurants.com/frontend/assets/images/bg_footer_bottom.png?c3d6b62">
            </div>
            <div id="creditD">© 2557-2563 บริษัท เอ็มเค อินเตอร์ฟู้ด</div>
        </div>
    </footer>
</body>
</html>