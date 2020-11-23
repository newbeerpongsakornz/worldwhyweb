function changeMenuColor(itemId, cmd){
    var item = document.getElementById("imgMenuBox"+itemId);
    if (cmd == "over")
    {
        item.src = "icon/"+itemId+"h.PNG";
    }
    else
    {
        item.src = "icon/"+itemId+".PNG";
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
        item.src = "icon/delivery1.PNG";
    }
    else
    {
        item.src = "icon/delivery.PNG";
    }
}

function changeIconBasket(cmd){
    var item = document.getElementById("BasketIcon");
    if (cmd == "over")
    {
        item.src = "icon/busket1.PNG";
    }
    else
    {
        item.src = "icon/busket.PNG";
    }
}

window.onscroll = function () {
    var btn = document.getElementById("goToCartBtn");
    if (btn != null)
    {
        if (document.body.scrollTop > 595 || document.documentElement.scrollTop > 595) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    }
    
};