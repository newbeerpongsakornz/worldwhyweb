var totalPrice = 0;
var numMenu = 0;

function add(id, page){
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
    
        if (document.getElementById("noChoose").innerText != "")
        {
            document.getElementById("noChoose").innerText = "";
            document.getElementById("totalMenu").id = "totalMenuActive";
        }
        
        var htmlText = "";
        var num = 1;
        
        htmlText += "<div id='div"+id+"'>";
        for (i = 0; i < data.length; i++)
        {
            var menu = data[i];
            if (menu.id == id)
            {

                numMenu++;

                totalPrice += parseInt(menu.price);
                console.log('8;p');
                htmlText += "<div style='width:100%;' class='p-2 mb-2'><div class='float-left'>"+menu.nameTH+" </div><button class='deleteBt mr-2' onclick='deletediv(\""+id+"\")'> <img src='../icon/delete.svg'> ลบ</button></div>";
                htmlText += "<div style='width:100%;' class='pt-3'><div class='d-inline float-left'><button type='button' class='circlebt d-inline' onclick='minus(\""+id+"\", "+menu.price+")'><svg class='pb-1' width='11px' aria-hidden='true'";
                htmlText += "focusable='false' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>";
                htmlText += "<path fill='currentColor' d='M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'></path></svg></button>";
                htmlText += "<div class='input-picker'><input class='input-picker d-inline' type='text' id='numFood"+id+"' value=1 data-max='999' readonly='' autocomplete='off'></div>";
                htmlText += "<button type='button' class='circlebt d-inline' onclick='plus(\""+id+"\", "+menu.price+")'><svg class='pb-1' width='11px' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='plus' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>";
                htmlText += "<path fill='currentColor' d='M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'></path></svg></button></div>";
                htmlText += "<div style='font-size:22px;' class='text-right pr-0'><b>฿ "+menu.price+"</b></div></div><br>";
                console.log(numMenu);

            }
        }
        htmlText += "</div>";
        document.getElementById("menuChoose").innerHTML += htmlText;
        document.getElementById("totalMenuActive").innerHTML = "<div class='float-left'> ราคาอาหารทั้งหมด <br> <div class='p-2' style='font-size:14px; color:#777777;'>(ยังไม่รวมค่าจัดส่ง)</div></div><div style='font-size:23px;' class='float-right'><strong><b id='totalPrice'>฿"+totalPrice+"</b></strong></div><button onclick='window.location.href=\"../cart.php\"' class='buymoreBt rounded p-2 m-2'><b>ยืนยันการสั่งซื้อ</b></button>";

    }

}
function deletediv(id){
    document.getElementById("div"+id).remove();
    numMenu--;
}
function minus(id, price){
    var num = document.getElementById("numFood"+id).value;
    if (num != 1){
        document.getElementById("numFood"+id).value = parseInt(num)-1;
        totalPrice -= price;
        document.getElementById("totalPrice").innerHTML = "฿ "+totalPrice;
    }
}
function plus(id, price){
    var num = document.getElementById("numFood"+id).value;
    document.getElementById("numFood"+id).value = parseInt(num)+1;
    totalPrice += price;
    document.getElementById("totalPrice").innerHTML = "฿ "+totalPrice;
    
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
        document.getElementById("foodType").style = "display: relative;";
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
                    if (menu.type.length != 0)
                    {
                        for (j = 0; j < menu.type.length; j++)
                        {
                            htmlText += "<div class='logoTypeBox'><img src='../icon/"+menu.type[j]+".PNG' height='26px'></div>";
                        }
                    }
                    htmlText += "</div><button onclick='clickMenu(\""+menu.id+"\", \""+page+"\")' class='linkMenu btnNone clickCursor'><div class='nameMenu font-weight-bold' id='nameMenu"+i+"' onmouseover='changeMenuName("+i+", \"over\")' onmouseout='changeMenuName("+i+", \"out\")'>"+menu.nameTH+"<br>";
                    htmlText += "<div class='nameMenuJP' id='nameMenuJP"+i+"'>"+menu.nameJP+"<br><br></div></div></button>";
                    htmlText += "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ ";
                    if (page == "setFood")
                    {
                        htmlText += menu.setType[0][0].price;
                    }
                    else
                    {
                        htmlText += menu.price;
                    }
                    htmlText += "</b>&nbsp;&nbsp;";
                    htmlText += "<button class='cartBt' onclick='add(\""+menu.id+"\", \""+page+"\")'><img src='../icon/addcart.PNG' width='70%'></button>";
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
            htmlText += "<div class='pageBar'>";
            for (j = 1; j < (data.length/15)+1; j++)
            {
                if (j == pageMenu)
                {
                    htmlText += "<button onclick='changeMenuType(\""+page+"\", \"all\", 1)' class='pageNum pageSelect' id='page"+j+"'>"+j+"</button>";
                }
                else
                {
                    htmlText += "<button onclick='changeMenuType(\""+page+"\", \"all\", 1)' class='pageNum' id='page"+j+"'>"+j+"</button>";
                }
            }
            htmlText += "</div><br><br><br>";
        }
        if (dontHaveMenu)
        {
            htmlText += "<div style='font-size: 30px; text-align: center; width:100%'>ไม่พบรายการอาหาร</div>";
        }
        gotoTop();
        document.getElementById("menuPromo").innerHTML = htmlText;
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
        var htmlText = "<div class='menuOne'>";
        var menu;
        for (i = 0; i < data.length; i++)
        {
            if (id == data[i].id)
            {
                menu = data[i];
                break;
            }
        }
        htmlText += "<div class='text-left'><button class='btnNone clickCursor' onclick='changeMenuType(\""+page+"\", \"all\", 1)'><div class='cc25'><span style='color: white;'><i class='fas fa-angle-left' style='transform: translate(-1px, 2px);'></i></span></div><div class='cc25L'> กลับ</div></button></div><br>";
        htmlText += "<img src='";
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
        htmlText += "</div><div class='menuOneN'>";
        htmlText += "<div class='menuOneName text-left' id='menuOneNameTH' onmouseover='changeMenuOneName(\"over\")' onmouseout='changeMenuOneName(\"out\")'>"+menu.nameTH+"</div>";
        htmlText += "<div class='menuOneName text-left' id='menuOneNameJP' onmouseover='changeMenuOneName(\"over\")' onmouseout='changeMenuOneName(\"out\")'>"+menu.nameJP+"</div>";
        htmlText += "</div></div>";
        htmlText += "";
        htmlText += "";
        htmlText += "";
        
        htmlText += "</div>";
        document.getElementById("menuPromo").innerHTML = htmlText;
        document.getElementById("foodType").style = "display: none;";
    }
}