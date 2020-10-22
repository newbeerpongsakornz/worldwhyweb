// var data;

// let requestURL = 'json/promoFood.json'; 
// let request = new XMLHttpRequest(); 
// request.onreadystatechange = function () { 
//     if (request.readyState == 4 && request.status == 200) {             
//         dataReportStatus(JSON.parse(request.responseText));            
//     } 
// }; 
// request.open("GET", requestURL, true); 
// request.send();
// function dataReportStatus(dataURL) { 
//     data = dataURL;
// }

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