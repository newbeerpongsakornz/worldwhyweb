// var totalPrice = 0;
// var numMenu = 0;

// function add(menuNo){
//     if (document.getElementById("noChoose").innerText != "")
//     {
//         document.getElementById("noChoose").innerText = "";
//         document.getElementById("totalMenu").id = "totalMenuActive";
//     }
    
//     var htmlText = "";
//     htmlText += "<div>";
//     for (i = 0; i < data.length; i++)
//     {
//         var menu = data[i];
//         if (menu.id == menuNo)
//         {
//             numMenu++;

//             totalPrice += parseInt(menu.price);
//             htmlText += "<div style='width:100%; text-align: left'>"+menu.nameTH+"</div>";
//             htmlText += "<div style='width:100%; text-align: right'>฿ "+menu.price+"</div>";
//         }
//     }
//     htmlText += "</div>";
//     document.getElementById("menuChoose").innerHTML += htmlText;
// }



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

function findData(page){
    let requestURL = "../json/"+page+".json"; 
    let request = new XMLHttpRequest(); 
    request.onreadystatechange = function () { 
        if (request.readyState == 4 && request.status == 200) {             
            dataReportStatus(JSON.parse(request.responseText));            
        } 
    }; 
    request.open("GET", requestURL, true); 
    request.send();
    function dataReportStatus(dataURL) { 
        return dataURL;
    }
}

function changeMenuType(page, typeFood){
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
        for (i = 0; i < data.length; i++)
        {
            var menu = data[i];
            if (typeFood == "all" || menu.type.indexOf(typeFood) != -1)
            {
                htmlText += "<div class='menu col-4 p-0'>";
                htmlText += "<a href=''><img src='"+menu.img+"' width='85%' title='"+menu.id+" "+menu.nameTH+"'></a><br><br>";
                htmlText += "<div class='logoType'>";
                for (j = 0; j < menu.type.length; j++)
                {
                    htmlText += "<div class='logoTypeBox'><img src='../icon/"+menu.type[j]+".PNG' height='26px'></div>";
                }
                htmlText += "</div><a href='' class='linkMenu'><div class='nameMenu' id='nameMenu"+i+"' onmouseover='changeMenuName("+i+", \"over\")' onmouseout='changeMenuName("+i+", \"out\")'>"+menu.nameTH+"<br>";
                htmlText += "<div class='nameMenuJP' id='nameMenuJP"+i+"'>"+menu.nameJP+"<br><br></div></div></a>";
                htmlText += "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ "+menu.price+"</b>&nbsp;&nbsp;";
                htmlText += "<button class='cartBt' onclick='add("+menu.id+")'><img src='../icon/addcart.PNG' width='70%'></button>";
                htmlText += "</div></div></div>";
            }
        }
        document.getElementById("menuPromo").innerHTML = htmlText;
    }
}