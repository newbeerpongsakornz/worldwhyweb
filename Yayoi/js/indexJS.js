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

function changeColor(item){
    item.innerHTML.src = "icon/"+item.alt+"h.PNG";
    console.log(item.innerHTML.src);
}
function defaultColor(item){
    item.innerHTML.src = "icon/"+item.alt+".PNG";
    console.log("Back");
}