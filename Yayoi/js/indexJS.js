var data;

let requestURL = 'json/promoFood.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {             
        dataReportStatus(JSON.parse(request.responseText));            
    } 
}; 
request.open("GET", requestURL, true); 
request.send();
function dataReportStatus(dataURL) { 
    data = dataURL;
    showData();
    showBanner();
}

function showData(){
    var htmlText = "";
    for (i = 0; i < data.length; i++)
    {
        var menu = data[i];
        htmlText += "<div class='col-4 menu'>";
        htmlText += "<img src='"+menu.img+"' width='286px'><br><br>";
        htmlText += "<div class='logoType'></div>";
        htmlText += "<div class='nameMenu'><b>"+menu.nameTH+"</b><br>";
        htmlText += "<p>"+menu.nameJP+"</p><br></div>";
        htmlText += "<div class='priceMenu'><div><b style='font-size: 30px;'>฿ "+menu.price+"</b>&nbsp;&nbsp;";
        htmlText += "<button class='cartBt' onclick='add("+menu.no+")'><img src='icon/addcart.PNG' width='70%'></button></div></div>";
        htmlText += "</div></div>";
    }
    document.getElementById("menuPromo").innerHTML += htmlText;
}

function showBanner(){
    var bannerImg = [
        "https://yayoirestaurants.com/mainbanners/3797_Desktop%201920x803px-01.jpg",
        "https://yayoirestaurants.com/mainbanners/3464_2007-03-Tempura Overload_Desktop_1920x803.jpg",
        "https://yayoirestaurants.com/mainbanners/5764_Yayoi_Juicy-Super-C-Booster_Web-Banner_1920-x-803-px.jpg",
        "https://yayoirestaurants.com/mainbanners/1937__AW Yayoi-Tokyo-Trio_Web-Banner-1920-x-803-px.jpg"
    ];
    var htmlText = "<ol class='carousel-indicators'>";
    for (i = 0; i < bannerImg.length; i++)
    {
        if (i == 0)
        {
            htmlText += "<li data-target='#carouselExampleControls' data-slide-to='0' class='active'></li>";
        }
        else
        {
            htmlText += "<li data-target='#carouselExampleControls' data-slide-to='"+i+"'></li>";
        }
    }
    htmlText += "</ol><div class='carousel-inner'>";
    for (i = 0; i < bannerImg.length; i++)
    {
        htmlText += "<div class='carousel-item";
        if (i == 0)
        {
            htmlText += " active'><img src='"+bannerImg[i]+"' class='d-block w-100'>";
        }
        else
        {
            htmlText += "'><img src='"+bannerImg[i]+"' class='d-block w-100'>";
        }
        htmlText += "</div>"
    }
    htmlText += "</div>"
    document.getElementById("carouselExampleControls").innerHTML = htmlText;
}

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
//         if (menu.no == menuNo)
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