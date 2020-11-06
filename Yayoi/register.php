<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/notoFont.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/indexJS.js"></script>
    <script src="js/database.js"></script>
    <script src="https://kit.fontawesome.com/a0ce56af97.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="https://yayoirestaurants.com/frontend/assets/images/favicon.ico" type="image/x-icon" >
    
    <title>Yayoi Restaurant : Modern Japanese Restaurant in Thailand - ยาโยอิ เซ็ตอร่อยของทุกคน</title>
</head>
<body class="notoFont" >

    <!-- Head -->
    <header>
        <div class="topheader shadow">
            <div class="container notoFont">
                <div class="row p-3">
                    <div class="col-md-5">
                        <div class="row justify-content-start">
                            <div class="col-md-7">
                                <a href="index.php"><div class="toppic p-3 shadow-lg logoYayoi" style="z-index: 1;">
                                    <img src="https://yayoirestaurants.com/frontend/assets/images/logo.svg" alt="Yayoi Restaurant - เสิร์ฟร้อน อร่อยเร็ว" width="100%">
                                </div></a>
                            </div>
                            <div class="col-md-5 font-weight-bold pt-2 "><a class="headMenu" href="menu/promoFood.php" class="float-right">เมนูยาโยอิ</a></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-end">
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
                                <a class="headMenu" href="cart.php"><img id='BasketIcon' src="icon/busket.PNG" width="30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Body -->                           
    <br><br>
    <div class="text-center container">
        <h1><b class="headBody">สมัครสมาชิก ยาโยอิ</b></h1>
        <div class="boxForm" id="register">
            <a href="javascript:history.back()" class="backBtn">
                <div class="cc25">
                    <span style="color: white;">
                        <i class="fas fa-angle-left" style='transform: translate(-1px, 2px);'></i>
                    </span>
                </div>
                <div class="cc25L">กลับ</div>
            </a>
            <br><br>
            <label><b>ชื่อ</b><b class="redColor">*</b></label>
            <input type="text" id="name" name="name" class="form-control">
            <div class="valueInvalid" id='nameInvalid'></div>
            <label><b>นามสกุล</b><b class="redColor">*</b></label>
            <input type="text" id="surname" name="surname" class="form-control">
            <div class="valueInvalid" id='surnameInvalid'></div>
            <label><b>วันเกิด</b><b class="redColor">*</b></label>
            <input type="date" id="date" name="date" class="form-control">
            <div class="valueInvalid" id='dateInvalid'></div>
            <label style="color: #c8c8c8;">*สงวนสิทธิ์การสมัครสมาขิกเฉพาะผู้ทีมีอายุ 10 ปี ขึ้นไป</label><br>
            <label><b>อีเมล</b><b class="redColor">*</b></label>
            <input type="text" id="email" name="email" class="form-control">
            <div class="valueInvalid" id='emailInvalid'></div>
            <label><b>เบอร์โทรศัพท์มือถือ</b><b class="redColor">*</b></label>
            <input type="text" id="tel" name="tel" class="form-control">
            <div class="valueInvalid" id='telInvalid'></div>
            <label><b>รหัสผ่าน</b><b class="redColor">*</b></label>
            <input type="password" id="password" name="password" class="form-control">
            <div class="valueInvalid" id='passwordInvalid'></div>
            <label style="color: #6c757d;">รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร</label><br>
            <label><b>ยืนยันรหัสผ่านใหม่</b><b class="redColor">*</b></label>
            <input type="password" id="passwordCom" name="passwordCom" class="form-control">
            <div class="valueInvalid" id='passwordComInvalid'></div>
            <button class="btn btn-block btnPW" onclick="checkValueAll()">สมัครสมาชิก</button>
            <div style="width:100%; text-align: center; margin-bottom: 10px; color: #909090;"><label>หรือ</label></div>
            <button class="btn btn-block btnFB" onclick="deleteMenu()">เข้าระบบด้วย Facebook</button>
            <br><br>
        </div>
        
    </div>
    

    

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
    
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyCaooLUXevEXGRHvfbg_HLWIS4znYjNYH4",
            authDomain: "yayoibyworldwhyweb.firebaseapp.com",
            databaseURL: "https://yayoibyworldwhyweb.firebaseio.com",
            projectId: "yayoibyworldwhyweb",
            storageBucket: "yayoibyworldwhyweb.appspot.com",
            messagingSenderId: "789331007438",
            appId: "1:789331007438:web:8be245447b5014ece4fd9f",
            measurementId: "G-R09CB9DDVR"
        };
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        var database = firebase.database();
    </script>
</body>
</html>