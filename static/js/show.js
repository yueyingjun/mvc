$(function(){
    //设置遮罩的宽高

    $(".mask").css("height",$(window).height());

    //用来记录回复相关的信息
    var data={};
    $(".replyBtn").click(function(){
        $(this).parents(".liuyanbox").find(".submit2").slideToggle(100);
       data.sid=$(".author-name").attr("sid");
       data.uid2=$(this).attr("uid2");
       data.pid=$(this).attr("pid");
    })

    // 最终回复按钮


    $(".replyBtn3").click(function(){
        var that=$(this);
        var mcon=that.parent().find("textarea").val();
        $.ajax({
            url:"index.php?m=index&f=message&a=reply",
            data:{
                near:location.href,
                sid:data.sid,
                uid2:data.uid2,
                pid:data.pid,
                mcon:mcon
            },
            dataType:"json",
            success:function(e){
                if(e.message=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block")
                }else if(e.message=="ok"){

                    //1. clone replylist结构

                    var replylist=$(".replylist:eq(0)").clone(true).appendTo(".reply");
                    //2.修改replylist里面的内容

                        //a. 修改名字


                    replylist.find(".replycon span").html("我")
                      // b. 修改内容

                    replylist.find(".replyinfo").html(mcon);


                       //c. 修改时间

                    replylist.find(".replystate .time").html(getDate());

                  //3 修改按钮上面的值

                    replylist.find(".replyBtn2").attr("uid2",e.uid);

                    replylist.find(".replyBtn2").attr("pid",replylist.parents(".message").find(".replyBtn1").attr("pid"));





                }
            }

        })
    })

    $(".replyBtn2").click(function(){

        $(this).parents(".message").find("textarea").val("@"+$(this).parents(".replylist").find(".replycon span").html()+":");
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
            dataType:"json",
            success:function(e){
                console.log(e);
                if(e.message=="ok"){
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

                    //5. 留言清空

                    $(".mcon").val("");

                    //6. 修改总条数

                    var num=$(".message").find("h3 span").html();

                    num=num==""?0:num;
                    $(".message").find("h3").html("共有"+(num*1+1)+"条留言");


                    //7.  更改回复按钮上的数据

                    $(".replyBtn1").attr("pid",e.mid).attr("uid2",e.uid);





                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function(){
                        $(".notice").css("display","none");

                    },2000)



                }else if(e.message=="no"){
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



    /* 点击量 */

    $.ajax({
        url:"index.php?m=index&f=message&a=hit",
        data:{
            sid:$(".author-name").attr("sid")
        },
        success:function(e){
            if(e=="ok"){
               $(".hitnum").html($(".hitnum").html()*1+1);
            }
        }
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