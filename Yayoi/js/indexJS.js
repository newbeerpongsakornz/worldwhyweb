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
}

function showData(){
    var htmlText = "";
    for (i = 0; i < data.length; i++)
    {
        // htmlText += "";
        var menu = data[i];
        htmlText += "<div class='col-4 menu'>";
        htmlText += "<img src='"+menu.img+"' width='100%'><br><br>";
        htmlText += "<div class='logoType'></div>";
        htmlText += "<b>"+menu.nameTH+"</b><br>";
        htmlText += "<p>"+menu.nameJP+"</p><br>";
        htmlText += "<div>";
        htmlText += "<b style='font-size: 30px;'>฿ "+menu.price+"</b>&nbsp;";
        htmlText += "<button class='cartBt' onclick='add()'></button>";
        htmlText += "</div>";
        htmlText += "</div>";
    }
    document.getElementById("menuPromo").innerHTML += htmlText;
}