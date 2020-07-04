window.onscroll = function() {menuFixed()};

var header = document.getElementById("myHeader");
var logo = document.getElementById("logo");
var con = document.getElementById("con");
var viewportWidth = window.innerWidth;
//var sticky = header.offsetTop;

function menuFixed() {
    if (window.pageYOffset > 144) {
        header.classList.add("sticky");
        if(viewportWidth > 600){
            header.style.height = "45px";
            con.style.margin = "190px auto 0";
        }else if((viewportWidth > 310)&&(viewportWidth < 370)){
            header.style.height = "47px";
            con.style.margin = "192px auto 0";
        }else{
            header.style.height = "48px";
            con.style.margin = "195px auto 0";
        }
        logo.style.display = "none"; 
    } else {
        header.classList.remove("sticky");
        if(viewportWidth > 600){
            header.style.height = "190px";
        }else{
            header.style.height = "195px";
        }
        logo.style.display = "block";
        con.style.margin = "0 auto 0";
    }
}

function menuToggle() {
    var x = document.getElementById("myTopnav");
    if (x.className === "menu") {
        header.style.margin = "192px auto 0px"
        x.className += " responsive";
    } else {
        x.className = "menu";
        header.style.margin = "0px auto 0px"
    }
}