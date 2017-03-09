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


    /*取消关注*/

    $(".quxiaoguanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=quxiaoguanzu",
            data:{
                uid2:$(".author-name").attr("attr")
            },
            success:function(e){
                if(e=="ok"){
                    $(".quxiaoguanzhu").css("display","none");
                    $(".guanzhu").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none")

                    },2000)
                }
            }
        })
    })



    /*收藏  面向过程  面向对象  mvc  mvvm*/

    $(".loveBtn").click(function(){
        $.ajax({
            url:"index.php?m=index&f=love&a=shoucang",
            data:{
                near:location.href,
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e=="no"){

                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }else if(e=="yes"){
                    $(".loveBtn").css("display","none");
                    $(".loveCancel").css("display","inline-block");

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



    /*取消收藏  越简单 越抽象  越快乐*/

    $(".loveCancel").click(function(){
        $.ajax({
            url:"index.php?m=index&f=love&a=lovecancel",
            data:{
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e=="ok"){
                    $(".loveCancel").css("display","none");
                    $(".loveBtn").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none")

                    },2000)
                }
            }
        })
    })


    /*发表留言
    *
    * uid1  自己
    *
    * uid2  对方
    *
    * sid   哪一篇文章
    *
    * pid  留言还是回复
    *
    * mtime  时间
    *
    * mcon   留言的内容
    * */
    $(".message-btn").click(function(){
        $.ajax({
            url:"index.php?m=index&f=message&a=add",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("attr"),
                sid:$(".author-name").attr("sid"),
                mcon:$(".mcon").val()
            },
            success:function(e){
                if(e=="ok"){

                    //数据库插入成功以后要做的事情

                    //1. 创建 liuyanbox
                    var liuyanbox=$("<div class='liuyanbox'></div>").appendTo(".message");
                    //2.  克隆 留言的html结构

                    var liuyan =$(".liuyan:eq(0)").clone(true);
                    liuyanbox.append(liuyan);

                    //3. 要改掉留言里面的内容

                    liuyan.find(".name").html("我");
                    liuyan.find(".time").html(getDate());
                    liuyan.find(".liuyancon").html($(".mcon").val());


                    //4. 创建输入框
                   var submit2=$(".submit2:eq(0)").clone(true);

                    liuyanbox.append(submit2);

                    //5. 留言情况

                    $(".mcon").val("");



                }else if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }
            }
        })
    })



    $(".notice-login .btn").click(function(){
        $(".mask").css("display","none");
        $(".notice-login").css("display","none")
    })
})



function getDate(){
    var time=new Date();
    var year=time.getFullYear();
    var month=time.getMonth()+1;
    var day=time.getDate();

    var hours=time.getHours();
    var min=time.getMinutes();
    var sec=time.getSeconds();

    return year+"-"+month+"-"+day+" "+hours+":"+min+":"+sec;



}