$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    var wid = $( window ).width();
    if(scroll < 100){
        $('header').css('background', 'transparent');
        $('header').css('color', 'white');
    } else{
        $('header').css('background', '#0000008e');
        $('header').css('color', 'white');
    }
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("headerContainer").style.top = "0";
    } else {
        document.getElementById("headerContainer").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}