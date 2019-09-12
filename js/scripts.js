window.onscroll = function () { onScroll() };

function onScroll() {
    var nav = document.getElementsByTagName('nav')[0];
    var b = document.getElementsByTagName('body')[0];
    if (b.scrollTop > 50) {
        nav.addClass("nav-background-fill");
    } else {
        nav.removeClass("nav-background-fill");
    }
}