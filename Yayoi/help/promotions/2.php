<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/notoFont.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="../../js/scripts.js"></script>
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
                                <a href="../../index.php"><div class="toppic p-3 shadow-lg logoYayoi" style="z-index: 1;">
                                    <img src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว" width="100%">
                                </div></a>
                            </div>
                            <div class="col-md-5 font-weight-bold pt-2 "><a class="headMenu" href="../../menu/promoFood.php" class="float-right">เมนูยาโยอิ</a></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-end">
                            <div class="headMenuBox pt-2">
                                <a class="headMenu" href="../../login.php">เข้าระบบ</a>
                                <b class="pl-2">|</b></div> 
                            <div class="headMenuBox pt-2 pl-0 pr-1">
                                <a class="headMenu" href="../../register.php">สมัครสมาชิก</a>
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
                                <button onclick="window.location.href='../../menu/promoFood.php'" class="btn font-weight-bold orderFoodBt"><img id='deliveryIcon' src="../../icon/delivery.PNG" height="21px"> สั่งอาหารทันที</button>
                            </div>
                            <div class="headMenuBox pt-1" onmouseover="changeIconBasket('over')" onmouseout="changeIconBasket('out')">
                                <a class="headMenu" href="../../cart.php"><img id='BasketIcon' src="../../icon/busket.PNG" width="30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br><br>
    <div class="container">
            <div class='text-left'><button class='btnNone clickCursor' onclick="location.href='../../index.php'"><div class='cc25'><span style='color: white;'><i class='fas fa-angle-left' style='transform: translate(-1px, 2px);'></i></span></div><div class='cc25L'> กลับ</div></button></div>
        
        <div class="row mt-4">
                <div class="col-lg-6 col-12 text-center mb-3">
                    <img width="95%" src="https://yayoirestaurants.com/promotioncontents/6895_Web-News-update-555x283px.jpg" alt="โปรโมชั่นเครื่องดื่มยาโยอิ ดงบุริ XL ระยะเวลาโปรโมชั่น 30 ตุลาคม – 30 พฤศจิกายน 2563">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <p class="detail-date">1 ตุลาคม - 30 พฤศจิกายน 2563</p>
                    <h5 class="detail-head mb-4"><strong>โปรโมชั่นเครื่องดื่มยาโยอิ ดงบุริ XL ระยะเวลาโปรโมชั่น 30 ตุลาคม – 30 พฤศจิกายน 2563</strong></h5>
                    <p>ยาโยอิจัดให้คุ้มสะใจกับ “ดงบุริ XL” &nbsp;เอาใจสายกินจุและกินดุ กับเมนูคุ้มจัดเต็ม ไซด์ใหญ่เว่อร์ <br>อร่อยยกเซ็ตพร้อมซุปมิโสะ จัดเต็มได้ทั้ง 5 เมนู เริ่มต้นเพียงเซ็ตละ 129.-</p>
                    <ul>
                        <li>จัดเต็มสายหมู กับ 2 เมนูฮิต&nbsp; เลือกได้ตามใจทานคู่ไข่ต้ม หรือไข่ออนเซน<br>-&nbsp;&nbsp;&nbsp;&nbsp; บูตะ ดง XL &nbsp;ข้าวหน้าหมูฉ่ำซอสขนาดใหญ่พิเศษ กลมกล่อม เสิร์ฟร้อนๆพร้อมซุปมิโสะ&nbsp;&nbsp;&nbsp; &nbsp;<br>-&nbsp;&nbsp;&nbsp;&nbsp; สไปซี่บูตะ ดง XL ข้าวหน้าหมูผัดซอสเผ็ดสไตล์ญี่ปุ่น เผ็ดหวานกำลังดี เสิร์ฟซุปมิโสะ</li>
                        <li>จัดเต็มสายเนื้อ กับ 2 เมนูฮิต เลือกได้ตามใจทานคู่ไข่ต้ม หรือไข่ออนเซน</li>
                    </ul>
                    <p>- &nbsp;&nbsp;&nbsp;กิว ดง XL ข้าวหน้าเนื้อบริสเกตนุ่มๆฉ่ำซอส เสิร์ฟร้อนๆบนข้าวญี่ปุ่น เสิร์ฟซุปมิโสะ&nbsp;&nbsp;&nbsp;&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; สไปซี่กิว ดง XL ข้าวหน้าเนื้อบริสเกตผัดซอสเผ็ดสไตล์ญี่ปุ่น อร่อยลงตัว เสิร์ฟซุปมิโสะ</p>
                    <ul>
                        <li>จัดเต็มสายเทมปุระ</li>
                    </ul>
                    <p>-&nbsp;&nbsp; &nbsp;ซีฟู๊ด เทมปุระ ดง XL รวมของอร่อยสุดฮิต ปูอัดฮอกไดโด กุ้งเทมปุระ ปลาดอร์รี่เทมปุระ และคากิอาเกะ &nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; กรอบกร๊วบจัดเต็ม เครื่องแน่นล้นชาม</p>
                    <p>มาอร่อยจุใจไซด์ XL กันได้แล้วตั้งแต่ 30 ตุลาคม – 30 พฤศจิกายน 2563 ทุกสาขา หรือสั่งจะมาอร่อยที่บ้าน ได้ที่ยาโยอิ เดลิเวอรี่ 1642</p>
                    <p>🔖 เงื่อนไข 🔖</p>
                    <ul>
                        <li>ระยะเวลาขายทั่วประเทศ 30 ตุลาคม – 30 พฤศจิกายน 2563</li>
                        <li>สำหรับรับประทานที่ร้าน, ซื้อกลับบ้าน เดลิเวอรี่ 1642, เว็บไซต์, Grab Food, LINEMAN และ Gojek</li>
                        <li>ทุกสาขาทั่วประเทศ ยกเว้น สาขา Y182 สนามบินดอนเมือง, Y203 ไอคอนสยาม และ Y209 เซ็นทรัล ลาดพร้าว ไม่ร่วมรายการ</li>
                        <li>ทุกเมนูสามารถเลือกรายการไข่ต้ม หรือไข่ออนเซนได้ ยกเว้น เมนู ซีฟู๊ดเทมปุระ ดง XL</li>
                        <li>รายการ Topping สามารถซื้อได้เฉพาะเมื่อสั่งเมนูดงบุริ XL เท่านั้น ราคาเริ่มต้นที่ - ต่อรายการ โดยไม่จำกัดจำนวนการซื้อต่อรายการนั้นๆ</li>
                        <li>สามารถใช้ร่วมกับบัตรสมาชิกได้เฉพาะรับประทานที่ร้าน และซื้อกลับบ้านเท่านั้น</li>
                        <li>ไม่สามารถเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                        <li>ไม่สามารถเปลี่ยนแปลงส่วนประกอบหรือรสชาติของอาหารได้</li>
                        <li>บริษัทฯ ขอสงวนสิทธิ์ในการเปลี่ยนแปลงแก้ไขเงื่อนไขโปรโมชั่น และเงื่อนไขการจัดส่งโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                        <li>ภาพเพื่อการโฆษณาเท่านั้น</li>
                        </ul>
                    
                        <br><br><br>
                </div>
               
        </div>
        <hr class="my-4">

        <h3><strong class="promotxt">Promotion for you</strong></h3>
                <div class="row mt-4">
                        <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                            <a href="1.php" class='linkMenu'>
                                                    <div class="text-center">
                                                        <img class="mb-3 promoimg" width="100%" src="https://yayoirestaurants.com/promotioncontents/thumbs/5018__AW Yayoi-Tokyo-Trio_Web-Banner-555-x-283-px-2.jpg">
                                                    </div>
                                                    <div class="">
                                                        <p class="datepromo mt-4">
                                                        1 ตุลาคม - 30 พฤศจิกายน 2563
                                                        </p>
                                                        <div class="linkpromo">
                                                        โปรโมชั่นยาโยอิ โตเกียว ทรีโอ</div>
                                                    </div>

                                            </a>
                            </div>
                    </div>
        </div>

                  
    
            

    <footer class="text-center">
        <div class="container">
            <a href="index.php">
                <img width="200px" src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว">
            </a><br><br>
            <div id="aniDelivery">
                <img width="79px" src="https://yayoirestaurants.com/frontend/assets/images/icon/delivery_icon.svg">
            </div>
            <div id="footerMenu">
                <div class="FMenu"><a href="../promo.php">โปรโมชั่น</a></div>
                <div class="FMenu"><a href="../branch.php">สาขายาโยอิ</a></div>
                <div class="FMenu"><a href="../about.php">เกี่ยวกับยาโยอิ</a></div>
                <div class="FMenu"><a href="../contact.php">ติดต่อเรา</a></div>
                <div class="FMenu"><a href="../sugguest.php">แนะนำติชมการให้บริการ</a></div>
                <div class="FMenu"><a href="../condition.php">เงื่อนไขการให้บริการ</a></div>
                <div class="FMenu"><a href="../policy.php">นโยบายความเป็นส่วนตัว</a></div>
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