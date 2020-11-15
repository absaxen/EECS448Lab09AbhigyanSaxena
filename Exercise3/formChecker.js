
//get event or some else
var Quantity01 = document.getElementsByClassName("Quantity01");
var Quantity02 = document.getElementsByClassName("Quantity02");
var Quantity03 = document.getElementsByClassName("Quantity03");
var submit = document.getElementById("submit_form");
var reset = document.getElementById("reset");
var password = document.querySelector(".Password");
var userName = document.querySelector(".UserName");
var item01_quantity = document.getElementById("Quantity01");
var item02_quantity = document.querySelector('.Quantity02');
var item03_quantity = document.querySelector(".Quantity03");
var choice = document.getElementsByName("choice");
var submit_form = document.getElementById("submit_form");



//cannot pich item less than 0
item01_quantity.oninput = function () {
    if (item01_quantity.value < 0) { this.value = 0; }
}

item02_quantity.oninput = function () {
    if (item02_quantity.value < 0) { this.value = 0; }
}
item03_quantity.oninput = function () {
    if (item03_quantity.value < 0) { this.value = 0; }
}

//check UserName
userName.onblur = function () {
    var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
    if (reg.test(this.value)) {
        this.style.backgroundColor = "blue";
    } else {
        if (userName.value == "") {
            this.style.backgroundColor = "white";
        } else {
            this.style.backgroundColor = "red";
            alert("Please input correct email address!");
        }
    }
 
}

//check password
function getCheck() {
    var flag = false;
    for (var i = 0; i < choice.length; i++){
        if (choice[i].checked == true) {
            flag = true;
        }
    }
    return flag;
}

function check() {
    if (password.value.length == 0) { alert("you did not input your password"); return false; }
    if (userName.style.backgroundColor == "red") { alert("Email address is invalid!"); return false; }
    if(userName.value.length == 0) { alert("you did not input your email address!"); return false;}
    if (!getCheck()) { alert("Please choose one of the delivery services"); return false; }
}