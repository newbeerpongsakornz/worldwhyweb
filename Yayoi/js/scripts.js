var totalPrice = 0;
var numMenu = 0;

function add(id, page, num=1){
    let requestURL = "../json/"+page+".json"; 
    let request = new XMLHttpRequest(); 
    request.onreadystatechange = function () { 
        if (request.readyState == 4 && request.status == 200) {             
            dataReportStatus(JSON.parse(request.responseText));            
        } 
    }; 
    request.open("GET", requestURL, true); 
    request.send();
    function dataReportStatus(data) {
    
        if (document.getElementById("noChoose") != null)
        {
            document.getElementById("noChoose").style.display = "none";
            
            document.getElementById("totalMenu").style.display = "block";
            document.getElementById("totalMenu").innerHTML = "<div class='float-left'> ราคาอาหารทั้งหมด <br> <div class='p-2' style='font-size:14px; color:#777777;'>(ยังไม่รวมค่าจัดส่ง)</div></div><div style='font-size:23px;' class='float-right'><strong><b id='totalPrice'>฿"+totalPrice+"</b></strong></div><button onclick='window.location.href=\"../cart.php\"' class='buymoreBt rounded p-2 m-2'><b>ยืนยันการสั่งซื้อ</b></button><div class='promo-cart mt-3 mb-4'><section class='pt-3 p-2'><p>ฟรี นมเมมเบอร์รี่ 1 กล่องเมื่อสั่งซื้อครบ 1,000 บาท</p></section></div>";
        }
        
        for (i = 0; i < data.length; i++)
        {
            var menu = data[i];
            if (menu.id == id)
            {
                var price = 0;
                if (page == "setFood")
                {
                    price = menu.setType[0][0].price;
                }
                else
                {
                    price = menu.price;
                }


                if (document.getElementById("numFood"+id) == null)
                {
                    numMenu++;
                    totalPrice += parseInt(price)*num;

                    var htmlText = "";
                    htmlText += "<div id='div"+id+"'>";
                    htmlText += "<div style='width:100%;' class='p-2 mb-2'><div class='float-left'>"+menu.nameTH+" </div><button class='deleteBt mr-2' onclick='deletediv(\""+id+"\", "+price+")'> <img src='../icon/delete.svg'> ลบ</button></div>";
                    htmlText += "<div style='width:100%;' class='pb-2 pt-2'><div class='d-inline float-left'><button type='button' class='circlebt d-inline' onclick='minus(\""+id+"\", "+price+"),alertpopup()'><svg class='pb-1' width='11px' aria-hidden='true'";
                    htmlText += "focusable='false' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>";
                    htmlText += "<path fill='currentColor' d='M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'></path></svg></button>";
                    // htmlText += "<div class='input-picker'><input class='input-picker d-inline' type='text' id='numFood"+id+"' value=1 data-max='999' readonly=''></div>";
                    htmlText += "<div class='numFood' id='numFood"+id+"'>1</div>";
                    htmlText += "<button type='button' class='circlebt d-inline' onclick='plus(\""+id+"\", "+price+")'><svg class='pb-1' width='11px' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='plus' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>";
                    htmlText += "<path fill='currentColor' d='M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'></path></svg></button></div>";
                    htmlText += "<div style='font-size:22px;' class='text-right pr-0'><b>฿ "+price+"</b></div></div><br>";
                    
                    
                    document.getElementById("menuChoose").innerHTML += htmlText;
                    document.getElementById("totalPrice").innerHTML = "฿ "+totalPrice;
                }
                else
                {
                    plus(id, price, num);
                    console.log(num);
                }
            }
        }
        
    }

}

function addOne(id, page){
    var num = document.getElementById("numFoodOne"+id).innerHTML;
    add(id, page, parseInt(num));
}

function alertpopup(){
    document.body.innerHTML += "<div class='popup float-right rounded p-1 notoFont' id='popup-suc'><img src='../icon/suc.png' class='d-inline m-2'><h6 class='d-inline m-2'><b>สำเร็จ</b></h6></div>"
    setTimeout(function(){
        document.getElementById("popup-suc").remove();
       },2000);
}
function deletediv(id, price){
    numMenu--;
    if (numMenu == 0)
    {
        document.getElementById("noChoose").style.display = "block";
        document.getElementById("totalMenu").style.display = "none";
        
    }
    var numFood = parseInt(document.getElementById("numFood"+id).innerHTML);
    totalPrice -= numFood*price;
    document.getElementById("totalPrice").innerHTML = "฿ "+totalPrice;

    document.getElementById("div"+id).remove();
}
function minus(id, price, number=1){
    var num = document.getElementById("numFood"+id).innerHTML;
    if (num != 1){
        document.getElementById("numFood"+id).innerHTML = parseInt(num)-number;
        totalPrice -= parseInt(price);
        document.getElementById("totalPrice").innerHTML = "฿ "+totalPrice;
    }
}

function plus(id, price, number=1){
    var num = document.getElementById("numFood"+id).innerHTML;
    document.getElementById("numFood"+id).innerHTML = parseInt(num)+number;
    totalPrice += parseInt(price)*number;
    document.getElementById("totalPrice").innerHTML = "฿ "+totalPrice;
    alertpopup();
}

function minusOne(id, price){
    var num = document.getElementById("numFoodOne"+id).innerHTML;
    if (num != 1){
        document.getElementById("numFoodOne"+id).innerHTML = parseInt(num)-1;
    }
}

function plusOne(id, price){
    var num = document.getElementById("numFoodOne"+id).innerHTML;
    document.getElementById("numFoodOne"+id).innerHTML = parseInt(num)+1;
    
}

function changeMenuColor(itemId, cmd){
    var item = document.getElementById("imgMenuBox"+itemId);
    if (cmd == "over")
    {
        item.src = "../icon/"+itemId+"h.PNG";
    }
    else
    {
        item.src = "../icon/"+itemId+".PNG";
    }
}

function changeMenuName(itemId, cmd){
    var item1 = document.getElementById("nameMenu"+itemId);
    var item2 = document.getElementById("nameMenuJP"+itemId);
    if (cmd == "over")
    {
        item1.style.color = "#eb7aae";
        item2.style.color = "#eb7aae";
    }
    else
    {
        item1.style.color = "black";
        item2.style.color = "#777";
    }
}

function changeIconDer(cmd){
    var item = document.getElementById("deliveryIcon");
    if (cmd == "over")
    {
        item.src = "../icon/delivery1.PNG";
    }
    else
    {
        item.src = "../icon/delivery.PNG";
    }
}

function changeIconBasket(cmd){
    var item = document.getElementById("BasketIcon");
    if (cmd == "over")
    {
        item.src = "../icon/busket1.PNG";
    }
    else
    {
        item.src = "../icon/busket.PNG";
    }
}

function changeTypeIcon(itemName, cmd){
    var item1 = document.getElementById(itemName+"Type");
    var item2 = document.getElementById(itemName+"Img");
    if (cmd == "over")
    {
        item1.style.color = "#eb7aae";
        item2.src = "../icon/"+itemName+"1.PNG";
    }
    else
    {
        item1.style.color = "#777";
        item2.src = "../icon/"+itemName+".PNG";
    }
}

function changeMenuType(page, typeFood, pageMenu){
    let requestURL = "../json/"+page+".json"; 
    let request = new XMLHttpRequest(); 
    request.onreadystatechange = function () { 
        if (request.readyState == 4 && request.status == 200) {             
            dataReportStatus(JSON.parse(request.responseText));            
        } 
    }; 
    request.open("GET", requestURL, true); 
    request.send();
    function dataReportStatus(data) { 
        var htmlText = "";
        var dontHaveMenu = true;
        if (page != "promoFood")
        {
            document.getElementById("foodType").style = "display: block;";
        }
        menuBar(page, "open");
        for (i = (15*(pageMenu-1)); i < data.length; i++)
        {  
            if (i < 15*pageMenu)
            {
                var menu = data[i];
                if (typeFood == "all" || menu.type.indexOf(typeFood) != -1)
                {
                    dontHaveMenu = false;
                    htmlText += "<div class='menu col-4 p-0'>";
                    htmlText += "<button onclick='clickMenu(\""+menu.id+"\", \""+page+"\")' class='btnNone clickCursor'><img src='";
                    if (page == "setFood")
                    {
                        htmlText += menu.setType[0][0].img;
                    }
                    else
                    {
                        htmlText += menu.img;
                    }
                    htmlText += "' width='85%' title='"+menu.id+" "+menu.nameTH+"'></a><br><br>";
                    htmlText += "<div class='logoType'>";
                    if (menu.type.length != 0 && page != "promoFood")
                    {
                        for (j = 0; j < menu.type.length; j++)
                        {
                            htmlText += "<div class='logoTypeBox'><img src='../icon/"+menu.type[j]+".PNG' height='26px'></div>";
                        }
                    }
                    htmlText += "</div><button onclick='clickMenu(\""+menu.id+"\", \""+page+"\")' class='linkMenu btnNone clickCursor'><div class='nameMenu font-weight-bold' id='nameMenu"+i+"' onmouseover='changeMenuName("+i+", \"over\")' onmouseout='changeMenuName("+i+", \"out\")'>"+menu.nameTH+"<br>";
                    htmlText += "<div class='nameMenuJP font-weight-normal' id='nameMenuJP"+i+"'>"+menu.nameJP+"<br><br></div></div></button>";
                    htmlText += "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ ";
                    if (page == "setFood")
                    {
                        htmlText += menu.setType[0][0].price;
                    }
                    else
                    {
                        htmlText += menu.price;
                    }
                    htmlText += "</b>&nbsp;&nbsp;<button class='cartBt' onclick='";
                    if (page == "setFood")
                    {
                        htmlText += "clickMenu";
                    }
                    else
                    {
                        htmlText += "add";
                    }
                    htmlText += "(\""+menu.id+"\", \""+page+"\")'><img src='../icon/addcart.PNG' width='70%'></button>";
                    htmlText += "</div></div></div>";
                }
            }
            else
            {
                break;
            }
        }
        if ((data.length > 15 && typeFood == "all"))
        {
            htmlText += "<div class='pageBar'><div class='pageBar'>";
            if (pageMenu-1 == 0)
            {
                htmlText += "<button";
            }
            else
            {
                htmlText += "<button onclick='changeMenuType(\""+page+"\", \"all\", "+(pageMenu-1)+")'";
            }
            htmlText += " class='pageNum'><</button>";
            for (j = 1; j < (data.length/15)+1; j++)
            {
                if (j == pageMenu)
                {
                    htmlText += "<button onclick='changeMenuType(\""+page+"\", \"all\", "+j+")' class='pageNum pageSelect' id='page"+j+"'>"+j+"</button>";
                }
                else
                {
                    htmlText += "<button onclick='changeMenuType(\""+page+"\", \"all\", "+j+")' class='pageNum' id='page"+j+"'>"+j+"</button>";
                }
            }
            if (pageMenu+1 > data.length/15)
            {
                htmlText += "<button";
            }
            else
            {
                htmlText += "<button onclick='changeMenuType(\""+page+"\", \"all\", "+(pageMenu+1)+")'";
            }
            htmlText += " class='pageNum'>></button></div><br><br><br>";
        }
        if (dontHaveMenu)
        {
            htmlText += "<div style='font-size: 30px; text-align: center; width:100%'>ไม่พบรายการอาหาร</div>";
        }
        gotoTop();
        document.getElementById("menuFood").innerHTML = htmlText;
        document.getElementById("menuFood").style.padding = "0px";
    }
    
}

function gotoTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function changeMenuOneName(cmd){
    var item1 = document.getElementById("menuOneNameTH");
    var item2 = document.getElementById("menuOneNameJP");
    if (cmd == "over")
    {
        item1.style.color = "#eb7aae";
        item2.style.color = "#eb7aae";
    }
    else
    {
        item1.style.color = "black";
        item2.style.color = "#777";
    }
}

function clickMenu(id, page){
    let requestURL = "../json/"+page+".json"; 
    let request = new XMLHttpRequest(); 
    request.onreadystatechange = function () { 
        if (request.readyState == 4 && request.status == 200) {             
            dataReportStatus(JSON.parse(request.responseText));            
        } 
    }; 
    request.open("GET", requestURL, true); 
    request.send();
    function dataReportStatus(data) { 
        menuBar(page, "none");
        gotoTop();
        slideMenuOne();
        var htmlText = "<div class='menuOne'>";
        var menu;
        var numRan = [];
        for (i = 0; i < data.length; i++)
        {
            if (id == data[i].id)
            {
                menu = data[i];
                numRan.push(i);
                break;
            }
        }
        htmlText += "<div class='text-left'><button class='btnNone clickCursor' onclick='changeMenuType(\""+page+"\", \"all\", 1)'><div class='cc25'><span style='color: white;'><i class='fas fa-angle-left' style='transform: translate(-1px, 2px);'></i></span></div><div class='cc25L'> กลับ</div></button></div><br>";
        htmlText += "<img id='imgMenuOne'  src='";
        if (page == "setFood")
        {
            htmlText += menu.setType[0][0].img;
        }
        else
        {
            htmlText += menu.img;
        }
        htmlText += "' title='"+menu.id+" "+menu.nameTH+"' width='100%'>";
        htmlText += "<br><div class='text-left'><div class='menuOneIcon'>"
        if (page != "promoFood")
        {
            if (menu.type.length != 0)
            {
                for (i = 0; i < menu.type.length; i++)
                {
                    htmlText += "<img src='../icon/"+menu.type[i]+"2.PNG' height='26px'>";
                }
            }
        }
        var price = 0;
        if (page == "setFood")
        {
            price = menu.setType[0][0].price;
        }
        else
        {
            price = menu.price;
        }

        htmlText += "</div><div class='menuOneN'>";
        htmlText += "<div class='menuOneName text-left mb-2' id='menuOneNameTH' onmouseover='changeMenuOneName(\"over\")' onmouseout='changeMenuOneName(\"out\")'><h5><b>"+menu.nameTH+"</b></h5></div>";
        htmlText += "<div class='menuOneName text-left' id='menuOneNameJP' onmouseover='changeMenuOneName(\"over\")' onmouseout='changeMenuOneName(\"out\")'>"+menu.nameJP+"</div>";
        htmlText += "</div></div>";

        if (page == "setFood")
        {
            htmlText += "<hr><div id='setFoodMenu' class='text-left'>";
            htmlText += "<div id='setFoodMenuBtn'><label style='font-size: 18px' class='leftSide'>เลือกประเภทอาหาร: </label><div class='rightSide'>";
            htmlText += "<button class='btnSetFood select' onclick='setfoodbtn_set()' id='btnsetfoodset'>แบบเซ็ต</button><button class='btnSetFood'onclick='setfoodbtn_single()'id='btnsetfoodsingle'>แบบจานเดี่ยว</button>";
            htmlText += "</div></div><div id='menuSetFood'><div style='font-size: 18px; margin-bottom: 5px'>เลือกวิธีปรุง: </div>";
            for (j = 0; j < menu.setType[0].length; j++)
            {
                var menuSet = menu.setType[0][j];
                htmlText += "<div class='menuSetFoodOne'><input type='radio' id='menuSetFoodOne"+j+"'";
                if (j == 0)
                {
                    htmlText += " checked";
                }
                htmlText += "><span><b>"+menuSet.nameTH+"</b><br><label class='nameMenuJP'>"+menuSet.nameJP+"</label></span></div>";
            }
            htmlText += "</div><div id='setFoodRice'><div style='font-size: 18px; margin-bottom: 5px'>เลือกข้าวในเซ็ต: </div>";
            for (j = 0; j < menu.rices.length; j++)
            {
                htmlText += "<div class='menuSetFoodRice'><input type='radio' id='menuSetFoodRice"+j+"'";
                if (j == 0)
                {
                    htmlText += " checked";
                }
                htmlText += "><span>&emsp;<img src='"+menu.rices[j].img+"' width='66px'>&emsp;<b>"+menu.rices[j].name+"</b></span></div>";
            }
            htmlText += "</div></div>";
        }

        htmlText += "<hr><div class='d-inline float-right'>";
        htmlText += "<div class='d-inline mr-4'><button type='button' class='circlebt d-inline' onclick='minusOne(\""+id+"\","+price+")'><svg class='pb-1' width='11px' aria-hidden='true'xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>";
        htmlText += "<path fill='currentColor' d='M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'></path></svg></button>";
        htmlText += "<div class='numFood' id='numFoodOne"+id+"'>1</div>";
        htmlText += "<button type='button' class='circlebt d-inline' onclick='plusOne(\""+id+"\", "+price+")'><svg class='pb-1' width='11px' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='plus' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>";
        htmlText += "<path fill='currentColor' d='M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'></path></svg></button></div>";
        htmlText += "<div style='font-size:22px;' class='d-inline'><b>฿ "+price+"</b></div>"
        htmlText += "<div class='d-inline ml-3'><button class='cartBt d-inline position-relative' onclick='addOne(\""+menu.id+"\", \""+page+"\")'><img src='../icon/addcart.PNG' width='70%'></button></div></div><br><br>";
        htmlText += "<hr class='dashed'></div>";
        
        htmlText += "<div id='menuFoodSuggest'><h3 class='headBody'>เมนูแนะนำ</h3>";
        
        while (numRan.length != 4)
        {
            var randomNum = Math.floor(Math.random() * data.length);
            if (numRan.indexOf(randomNum) != -1)
            {
                continue;
            }
            numRan.push(randomNum);
            var menu = data[randomNum];

            htmlText += "<div class='menu col-4 p-0'>";
            htmlText += "<button onclick='clickMenu(\""+menu.id+"\", \""+page+"\")' class='btnNone clickCursor'><img src='";
            if (page == "setFood")
            {
                htmlText += menu.setType[0][0].img;
            }
            else
            {
                htmlText += menu.img;
            }
            htmlText += "' width='85%' title='"+menu.id+" "+menu.nameTH+"'></a><br><br>";
            htmlText += "<div class='logoType'>";
            if (menu.type.length != 0 && page != "promoFood")
            {
                for (j = 0; j < menu.type.length; j++)
                {
                    htmlText += "<div class='logoTypeBox'><img src='../icon/"+menu.type[j]+".PNG' height='26px'></div>";
                }
            }
            htmlText += "</div><button onclick='clickMenu(\""+menu.id+"\", \""+page+"\")' class='linkMenu btnNone clickCursor'><div class='nameMenu font-weight-bold' id='nameMenu"+i+"' onmouseover='changeMenuName("+i+", \"over\")' onmouseout='changeMenuName("+i+", \"out\")'>"+menu.nameTH+"<br>";
            htmlText += "<div class='nameMenuJP font-weight-normal' id='nameMenuJP"+i+"'>"+menu.nameJP+"<br><br></div></div></button>";
            htmlText += "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ ";
            if (page == "setFood")
            {
                htmlText += menu.setType[0][0].price;
            }
            else
            {
                htmlText += menu.price;
            }
            htmlText += "</b>&nbsp;&nbsp;<button class='cartBt' onclick='";
            if (page == "setFood")
            {
                htmlText += "clickMenu";
            }
            else
            {
                htmlText += "add";
            }
            htmlText += "(\""+menu.id+"\", \""+page+"\")'><img src='../icon/addcart.PNG' width='70%'></button>";
            htmlText += "</div></div></div>";
        }
        htmlText += "</div>";

        htmlText += "</div>";
        document.getElementById("menuFood").innerHTML = htmlText;
        if (page != "promoFood")
        {
            document.getElementById("foodType").style = "display: none;";
        }
        document.getElementById("menuFood").style.padding = "0px 20px";
    }
}

function menuBar(page, cmd){
    var items = document.getElementsByClassName("menuBox");
    if (cmd == "none")
    {
        for (i = 0; i < items.length; i++)
        {
            if (items[i].classList.toString().includes("menuSelect"))
            {
                items[i].classList.remove("menuSelect");
                items[i].setAttribute("onmouseover", "changeMenuColor("+(i+1)+", 'over')");
                items[i].setAttribute("onmouseout", "changeMenuColor("+(i+1)+", 'out')");
                document.getElementById("imgMenuBox"+(i+1)).src = "../icon/"+(i+1)+".PNG";
                items[i].parentElement.classList += "menuText";
                break;
            }
        }
    }
    else
    {
        for (i = 0; i < items.length; i++)
        {
            if (items[i].id == page+"Bar")
            {
                items[i].classList.add("menuSelect");
                items[i].removeAttribute("onmouseover");
                items[i].removeAttribute("onmouseout");
                items[i].parentElement.classList.remove("menuText");
                document.getElementById("imgMenuBox"+(i+1)).src = "../icon/"+(i+1)+"1.PNG";
                break;
            }
        }
    }
}

function slideMenuOne(){
    window.scrollTo({
        top: 425,
        behavior: 'smooth',
      })
}

function setfoodbtn_single(){
    document.getElementById("btnsetfoodsingle").classList.add("select");
    document.getElementById("btnsetfoodset").classList.remove("select");
    document.getElementById("setFoodRice").style.display = "none";
    document.getElementById("imgMenuOne").src = menu.setType[0][1].img;
}
function setfoodbtn_set(){
    document.getElementById("btnsetfoodsingle").classList.remove("select");
    document.getElementById("btnsetfoodset").classList.add("select");
    document.getElementById("setFoodRice").style.display = "block";

}