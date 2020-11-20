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
                    <img width="95%" src="https://yayoirestaurants.com/promotioncontents/5018__AW Yayoi-Tokyo-Trio_Web-Banner-555-x-283-px-2.jpg" alt="โปรโมชั่นยาโยอิ โตเกียว ทรีโอ">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <p class="detail-date">1 ตุลาคม - 30 พฤศจิกายน 2563</p>
                    <h5 class="detail-head mb-4"><strong>โปรโมชั่นยาโยอิ โตเกียว ทรีโอ</strong></h5>
                    <p>ใหม่! เครื่องดื่มยาโยอิ โตเกียว ทรีโอ อร่อยสดชื่น ท็อปปิ้ง เคี้ยวเพลิน ฟินกับ 3 รส 3 สไตล์ เริ่มต้นเพียง 59 บาท <br>เคี้ยวสนุกได้ทุกวันได้ตั้งแต่ 1 ตุลาคม 2563 – 30 พฤศจิกายน 2563 ที่ร้านอาหารญี่ปุ่นยาโยอิทุกสาขาที่ร่วมรายการ</p>
                    <ul><li>ช็อกโก ครั้นชี่ ราคา 69 บาท</li></ul>
                    <p>ช็อกโกแลตปั่น และวิปครีมรสนุ่ม เคี้ยวกรุบๆ กับท็อปปิ้งครั้นชี่</p>
                    <ul><li>รอยัล โบบา มิลค์ ทีราคา 59 บาท</li></ul>
                    <p>ชานมเข้มข้นสูตรพรีเมี่ยม เคี้ยวหนึบๆ กับไข่มุกสุดฟิน</p>
                    <ul><li>มัทฉะ ลาเต้ ถั่วแดง ราคา 59 บาท</li></ul>
                    <p>ชาเขียวญี่ปุ่นสุดฮิต เคี้ยวเพลินๆ กับถั่วแดง อร่อยลงตัว</p>
                    <p>*โปรโมชั่นนี้ร่วมรายการส่งเสริมการขายจากดีแทค รับส่วนลด 10 บาท</p>   
                        <ol><li>ช็อกโก ครั้นชี่ ราคา 59 บาท</li>
                        <li>รอยัล โบบา มิลค์ ที ราคา 49 บาท</li>
                        <li>มัทฉะ ลาเต้ ถั่วแดง ราคา 49 บาท&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        </ol>
                        <p>&nbsp;</p><p>&nbsp;</p>
                        <p>เงื่อนไขการใช้บริการ</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ระยะเวลาโปรโมชั่นตั้งแต่ 1 ตุลาคม 2563 – 30 พฤศจิกายน 2563 (ทุกสาขาที่ร่วมรายการ)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - สำหรับรับประทานที่ร้าน, ซื้อกลับบ้าน, บริการจัดส่งยาโยอิเดลิเวอรี่, LINEMAN และ GrabFood &nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (*ยกเว้น เมนูช็อกโก ครั้นชี่ ไม่ร่วมบริการเดลิเวอรี่)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - สามารถใช้ร่วมกับบัตรสมาชิกได้เฉพาะเมื่อทานที่ร้านและซื้อกลับบ้านเท่านั้น<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - สามารถรับสิทธิ์ดีแทคได้เฉพาะลูกค้าที่รับประทานที่ร้านหรือซื้อกลับบ้านเท่านั้น<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - บัตรสมาชิกยาโยอิสามารถลดได้ เมื่อสั่งเครื่องดื่มยาโยอิ โตเกียว ทรีโอ ในราคาปกติ <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - สำหรับลูกค้าที่รับสิทธิ์ส่วนลดดีแทคแล้ว จะไม่สามารถใช้ส่วนลดบัตรสมาชิก<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ในส่วนของเครื่องดื่มยาโยอิ โตเกียว ทรีโอ แต่สามารถใช้ลดเมนูอื่นๆได้ตามปกติ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ไม่สามารถเปลี่ยนหรือทอนเป็นเงินสดได้<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ไม่สามารถเปลี่ยนแปลงส่วนประกอบและรสชาติของเครื่องดื่มได้<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ภาพเพื่อการโฆษณาเท่านั้น</p>
                        <p>*ยกเว้น 9 สาขาดอนเมือง, สาขาบิ๊กซี เพชรเกษม, สาขาโลตัส รามอินทรา, สาขาบิ๊กซี สมุทรสงคราม, สาขาไอคอนสยาม, สาขาคอสโม บาซาร์ เมืองทองธานี, สาขาสยามเซ็นเตอร์, สาขาเซ็นทรัล ลาดพร้าว และสาขาเทอมินอล 21 อโศก ไม่ร่วมรายการ</p>
                        <br><br><br>
                </div>
                
        </div>
        <hr class="my-4">

        <h3><strong class="promotxt">Promotion for you</strong></h3>
                <div class="row mt-4">
                        <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                            <a href="2.php" class='linkMenu'>
                                                    <div class="text-center">
                                                        <img class="mb-3 promoimg" width="100%" src="https://yayoirestaurants.com/promotioncontents/thumbs/6895_Web-News-update-555x283px.jpg">
                                                    </div>
                                                    <div class="">
                                                        <p class="datepromo mt-4">
                                                        30 ตุลาคม - 30 พฤศจิกายน 2563
                                                        </p>
                                                        <div class="linkpromo">
                                                        โปรโมชั่นเครื่องดื่มยาโยอิ ดงบุริ XL ระยะเวลาโปร <br> โมชั่น 30 ตุลาคม – 30 พฤศจิกายน 2563</div>
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