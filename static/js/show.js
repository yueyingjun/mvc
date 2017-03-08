$(function(){
    //设置遮罩的宽高
    $(".mask").css("height",$(window).height());

    $(".replyBtn").click(function(){
        $(".submit2").slideToggle(100);
    })


    /*关注*/

    $(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=addguanzu",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("attr")
            },
            success:function(e){
                if(e=="no"){

                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block")
                }else if(e=="yes"){
                    $(".guanzhu").css("display","none");
                    $(".quxiaoguanzhu").css("display","inline-block");

                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }
            }

        })
    })

    $(".notice-login .btn").click(function(){
        $(".mask").css("display","none");
        $(".notice-login").css("display","none")
    })
})