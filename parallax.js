const set1 = document.getElementById("start");
window.addEventListener("scroll", function(){
    let offset = window.pageYOffset;
    set1.style.backgroundPositionY=offset*7.7+"px";
})