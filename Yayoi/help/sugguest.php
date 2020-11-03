<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/notoFont.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://yayoirestaurants.com/frontend/assets/dist/app.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://yayoirestaurants.com/frontend/assets/dist/aboutus.css" type="text/css">
    <script src="../js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/a0ce56af97.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://yayoirestaurants.com/frontend/assets/dist/customize/text.th.js"></script>
    <script type="text/javascript" src="https://yayoirestaurants.com/frontend/assets/dist/app.js"></script>
    <script type="text/javascript" src="https://yayoirestaurants.com/frontend/assets/dist/customize/global.fn.js"></script>
    <script type="text/javascript" src="https://yayoirestaurants.com/frontend/assets/dist/customize/init.fn.js"></script>
    <script type="text/javascript" src="https://yayoirestaurants.com/frontend/assets/dist/customize/cart.js?v=1.2"></script>

    <link rel="shortcut icon" href="https://yayoirestaurants.com/frontend/assets/images/favicon.ico" type="image/x-icon" >
    <title>แนะนำติชมการให้บริการ Yayoi Restaurant : Modern Japanese Restaurant in Thailand - ยาโยอิ เซ็ตอร่อยของทุกคน</title>

    <style>
        .item_conditions { font-size: 14px; line-height: 18px; margin-top: 20px;}
        .promo_note { font-size: 14px; color: #eb7aae}
        strong { color: #eb7aae}
    </style>

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

    <!-- main -->
    <img src="https://yayoirestaurants.com/mainbanners/1811_Feedback.jpg" width="100%">
    <br><br>
    <div class="text-center container">
        <h1><b class="headBody">แนะนำติชมการให้บริการ</b></h1>
    </div>
    <div class="container" id="feedback">
        <br>
        <div class="row justify-content-center h-100">
            <div class="col-6">
                <label><b>เรื่องที่ต้องการติดต่อ</b><b class="redColor">*</b></label>
                <select id="subject" name="subject" class="form-control">
                    <option value="">กรุณาเลือกเรื่องที่ต้องการติดต่อ</option>
                    <option value="พนักงาน/คุณภาพอาหารที่สาขา">พนักงาน/คุณภาพอาหารที่สาขา</option>
                    <option value="บริการ Home Delivery">บริการ Home Delivery</option>
                    <option value="พนักงาน Call Center">พนักงาน Call Center</option>
                    <option value="พนักงานขับรถ Delivery">พนักงานขับรถ Delivery</option>
                    <option value="บัตรสมาชิก">บัตรสมาชิก</option>
                    <option value="Gift Voucher">Gift Voucher</option>
                    <option value="บัตรเครดิต/บัตรเดบิต">บัตรเครดิต/บัตรเดบิต</option>
                    <option value="กิจกรรมหรือโปรโมชั่นต่าง ๆ">กิจกรรมหรือโปรโมชั่นต่าง ๆ</option>
                    <option value="อื่น ๆ">อื่น ๆ</option>
                </select>
                <label><b>ชื่อ - นามสกุล</b><b class="redColor">*</b></label>
                <input type="text" id="fullname" name="fullname" class="form-control">
                <label><b>อีเมล</b><b class="redColor">*</b></label>
                <input type="email" id="email" name="email" class="form-control">
                <label><b>โทร</b><b class="redColor">*</b></label>
                <input type="tel" id="tel" name="tel" class="form-control">
                <label><b>วัน / เวลาที่ใช้บริการ</b><b class="redColor">*</b></label>
                <input type="text" id="day" name="day" class="form-control">
                <label><b>สาขาที่ใช้บริการ</b><b class="redColor">*</b></label>
                <input type="text" id="branch" name="branch" class="form-control">
                <label><b>ข้อความ และคำแนะนำ</b><b class="redColor">*</b></label>
                <textarea type="text" id="message" name="message" rows="5" class="form-control"></textarea>
                <br>

                <label><b>รูปภาพประกอบ (ถ้ามี)</b></label>
                <div class="browse-custom">
                    <button type="button" class="btn btn-outline-primary">
                        <svg class="svg-inline--fa fa-cloud-upload-alt fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cloud-upload-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zM393.4 288H328v112c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V288h-65.4c-14.3 0-21.4-17.2-11.3-27.3l105.4-105.4c6.2-6.2 16.4-6.2 22.6 0l105.4 105.4c10.1 10.1 2.9 27.3-11.3 27.3z"></path></svg>
                        <input type="file" id="file" name="file">
                        Select...
                    </button>
                </div>
                <br>
                <button class="btn btn-lg btn-round btn-primary ladda-button">ส่งข้อความ</button>
                <br><br><br>
            </div>
        </div>
    </div>
    <!--main-->


    <footer class="text-center">
        <div class="container">
            <a href="../index.php">
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
