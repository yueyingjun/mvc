window.onload=function () {
    var span=document.querySelector("span");
    var url=document.querySelector("a").href;

    var num=3;

    var t= setInterval(function(){
        num--;
        if(num==0){
            clearInterval(t);
            location.href=url;
        }else {
            span.innerHTML = num;
        }
    },1000)
}