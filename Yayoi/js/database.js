function addUser(){
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var birthday = document.getElementById("date").value;
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    var password = document.getElementById("password").value;
    
    database.ref("users/"+tel).set({
        name: name,
        surname: surname,
        birthday: birthday,
        email: email,
        tel: tel,
        password: password
    });

    document.body.innerHTML += "<div id='alertBox' class='text-center'><div class='headA'><b style='font-size: 22px'>สำเร็จ</b></div><div>ลงทะเบียนเรียบร้อย สวัสดีค่ะคุณ "+name+"</div><button class='btnNone clickCursor' onclick='deleteAlert(\"alertBox\")'>x</button></div>";
    
}

function checkValue(input){
    var canUse = true;
    var item = document.getElementById(input);
    if (item.id == "tel" && item.value.length != 10)
    {
        canUse = false;
    }
    else if (item.value.length == 0){
        canUse = false;
    }
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (item.id == "email" && reg.test(item.value) == false)
    {
        canUse = false;
    }
    if (item.id == "passwordCom" && item.value != document.getElementById("password").value)
    {
        canUse = false;
    }

    if (canUse)
    {
        item.style.border = "1px solid #ced4da";
        document.getElementById(item.id+"Invalid").innerText = "";
    }
    else
    {
        item.style.border = "1px solid red";
        document.getElementById(item.id+"Invalid").innerText = "This value is required.";
    }
    item.setAttribute("onkeyup", "checkValue(\""+item.id+"\")");
    return canUse;
}

function checkValueAll(){
    var items = document.getElementsByTagName("input");
    var canUse = [];
    for (i = 0; i < items.length; i++)
    {
        canUse.push(checkValue(items[i].id));
    }
    if (canUse.indexOf(false) == -1)
    {
        addUser();
    }
}

function addMenu(id){

}

function changeMenu(){

}

function deleteMenu(){

}

function login(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email != "" && password != "")
    {
        var canLogin = false;
        firebase.database().ref('/users/').on('value', function(snapshot) {
                snapshot.forEach(function(childSnapshot){
                    if (email == childSnapshot.val().email && password == childSnapshot.val().password)
                    {
                        canLogin = true;
                        document.body.innerHTML += "<div id='alertBox' class='text-center'><div class='headA'><b style='font-size: 22px'>สำเร็จ</b></div><div>ลงทะเบียนเรียบร้อย สวัสดีค่ะคุณ "+childSnapshot.val().name+"</div><button class='btnNone clickCursor' onclick='deleteAlert(\"alertBox\")'>x</button></div>";
                        return;
                    }
                });
            });
        if (!canLogin)
        {
            document.body.innerHTML += "<div id='alertBox' class='text-center'><div class='headA'><b style='font-size: 22px'>ไม่สำเร็จ</b></div><div>กรุณาล็อกอินใหม่</div><button class='btnNone clickCursor' onclick='deleteAlert(\"alertBox\")'>x</button></div>";
        }
    }
    else
    {
        console.log("Please!");
    }
}


function deleteAlert(idTag){
    document.getElementById(idTag).remove();
}

