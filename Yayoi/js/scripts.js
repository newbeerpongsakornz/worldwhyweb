var totalPrice = 0;
var numMenu = 0;

function add(menuNo, page){
    
        if (document.getElementById("noChoose").innerText != "")
        {
            document.getElementById("noChoose").innerText = "";
            document.getElementById("totalMenu").id = "totalMenuActive";
        }
        
        var htmlText = "";
        htmlText += "<div>";
        for (i = 0; i < data.length; i++)
        {
            var menu = data[i];
            if (menu.id == menuNo)
            {
                numMenu++;

                totalPrice += parseInt(menu.price);
                htmlText += "<div style='width:100%; text-align: left'>"+menu.nameTH+"</div>";
                htmlText += "<div style='width:100%; text-align: right'>฿ "+menu.price+"</div>";
            }
        }
        htmlText += "</div>";
        document.getElementById("menuChoose").innerHTML += htmlText;
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
                    htmlText += "<div class='nameMenuJP' id='nameMenuJP"+i+"'>"+menu.nameJP+"<br><br></div></div></a>";
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

function clickMenu(id, page, pageMenu){
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
        htmlText += "<div><button class='btnNone' onclick='changeMenuType('"+page+"', 'all', 1)'><div></div></button></div>";
        htmlText += "<img src='"+menu.img+"' title='"+menu.id+" "+menu.nameTH+" width='100%'>";
        htmlText += "<br><div class='menuOneIcon'>"
        if (menu.type.length != 0)
        {
            for (i = 0; i < menu.type.length; i++)
            {
                htmlText += "<img src='../icon/"+menu.type[i]+".PNG' height='26px'>";
            }
        }
        htmlText += "</div><div class='menuOneN'>";
        htmlText += "<div class='menuOneName text-left' id='menuOneNameTH' onmouseover='changeMenuOneName(\"over\")' onmouseout='changeMenuOneName(\"out\")'>"+menu.nameTH+"</div>";
        htmlText += "<div class='menuOneName text-left' id='menuOneNameJP' onmouseover='changeMenuOneName(\"over\")' onmouseout='changeMenuOneName(\"out\")'>"+menu.nameJP+"</div>";
        htmlText += "</div>";
        htmlText += "";
        htmlText += "";
        htmlText += "";
        
        htmlText += "</div>";
        document.getElementById("menuPromo").innerHTML = htmlText;
    }
}