/**
 * Created by adrian on 8/17/15.
 */
var header, logo, yPos, windowWidth, link;
function yScroll() {
    header = document.getElementById('header');
    logo = document.getElementsByClassName("logo-sm-top");
    link = document.getElementsByClassName("link");
    yPos = window.pageYOffset;
    windowWidth = window.innerWidth;
    if(yPos > 50) {
        header.style.height = "64px";
        header.style.paddingTop = "10px";
        header.style.paddingBottom = "30px";
//            header.style.backgroundColor = "rgba(0,0,0,.8)";
        header.style.backgroundColor = "transparent";
        header.style.opacity = "0";
        for( var i = 0; i < link.length; i++) {
            link[i].style.paddingTop = "10px";
        }
        if(windowWidth <= 768) {
            header.style.height = "75px";
            header.style.paddingTop = "0px";
            header.style.paddingBottom = "40px";
            logo[0].style.width = "140px";
            logo[0].style.marginTop = "10px";

            for( var i = 0; i < link.length; i++) {
                link[i].style.paddingTop = "0px";
                link[i].style.fontSize = "12px";
            }
        }
    } else {
        header.style.height="95px";
        header.style.paddingTop = "40px";
        header.style.backgroundColor = "transparent";
        header.style.opacity = "1";
        for( var i = 0; i < link.length; i++) {
            link[i].style.paddingTop = "5px";
        }
        if(windowWidth <= 768) {
            logo[0].style.width = "180px";
            header.style.height="95px";
            header.style.paddingTop = "10px";
            for( var i = 0; i < link.length; i++) {
                link[i].style.fontSize = "14px";
                link[i].style.paddingTop = "0px";
            }

        }
    }
}
window.addEventListener("scroll", yScroll);