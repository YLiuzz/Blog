$(function(){
    //tab設定
    var nowHash = location.hash;//取得loading進來後目前#
    var nowTabNum = nowHash.slice(-1);
    var nowHtml = location.pathname.split("/").pop();
    if (nowHash != "") {
        $(".tab_content").css({ "display": "none" });
        $('#tab' + nowTabNum).addClass('active');
        $('#tab_' + nowTabNum).fadeIn();
        var body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        body.animate({
            scrollTop: 0
        }, 50);
    } else {
        //如果loading進來的網址沒有hash，判斷是不是tab頁面
        switch (nowHtml) {
            case "type":
                // 如果本頁是tab
                $('#tab1').addClass('active');
                $(".tab_content").css({ "display": "none" });
                $('#tab_1').show();
                break;
            // tab底下的子頁面
            case "type#tab1":
                $('#tab1').addClass('active');
                $('#tab_1').show();
                break;
            case "type#tab2":
                $('#tab2').addClass('active');
                $('#tab_2').show();
                break;
            case "type#tab3":
                $('#tab3').addClass('active');
                $('#tab_3').show();
                break;
            case "sense":
                $('#tab4').addClass('active');
                $(".tab_content").css({ "display": "none" });
                $('#tab_4').show();
                break;                                     
            case "sense#tab4":
                $('#tab4').addClass('active');
                $('#tab_4').show();
                break;
            case "sense#tab5":
                $('#tab5').addClass('active');
                $('#tab_5').show();
                break;   
            case "how_use":
                $('#tab4').addClass('active');
                $(".tab_content").css({ "display": "none" });
                $('#tab_4').show();
                break;
            case "how_use#tab4":
                $('#tab4').addClass('active');
                $('#tab_4').show();
                break;
            case "how_use#tab5":
                $('#tab5').addClass('active');
                $('#tab_5').show();
                break;                                
        }
    }
    $("body").on("click", ".tab", function (e) {
        e.preventDefault();
        var newHash = $(this).attr("id"); //點到的id
        var newTabNum = newHash.slice(-1);  //取tab的尾數字  
        if (nowHtml == "type") {
            //開闔div
            $(".tab_content").css({ "display": "none" });
            $('#tab_' + newTabNum).fadeIn();
            $.scrollTo({ top: '+=0px', left: '0' }, 800);//將畫面向下滾70px
            //tab樣式
            $(".tab").removeClass('active');
            $(this).addClass('active');
            //修正網址
            location.hash = '#' + newHash;
        } else {
            //如果本頁不是type則為一般超連結
            location.href = 'type#' + newHash;
            $('#tab_' + newTabNum).fadeIn();
        }
    })

    $("body").on("click", ".tab1", function (e) {
        e.preventDefault();
        var newHash = $(this).attr("id"); //點到的id
        var newTabNum = newHash.slice(-1);  //取tab的尾數字   
        if (nowHtml == "sense") {
            //開闔div
            $(".tab_content").css({ "display": "none" });
            $('#tab_' + newTabNum).fadeIn();
            $.scrollTo({ top: '+=0px', left: '0' }, 800);//將畫面向下滾70px
            //tab樣式
            $(".tab1").removeClass('active');
            $(this).addClass('active');
            //修正網址
            location.hash = '#' + newHash;
        } else {
            //如果本頁不是type則為一般超連結
            location.href = 'sense#' + newHash;
            $('#tab_' + newTabNum).fadeIn();
        }
    })    
    $("body").on("click", ".tab2", function (e) {
        e.preventDefault();
        var newHash = $(this).attr("id"); //點到的id
        var newTabNum = newHash.slice(-1);  //取tab的尾數字  
        if (nowHtml == "how_use") {
            //開闔div
            $(".tab_content").css({ "display": "none" });
            $('#tab_' + newTabNum).fadeIn();
            $.scrollTo({ top: '+=0px', left: '0' }, 800);//將畫面向下滾70px
            //tab樣式
            $(".tab2").removeClass('active');
            $(this).addClass('active');
            //修正網址
            location.hash = '#' + newHash;
        } else {
            //如果本頁不是type則為一般超連結
            location.href = 'how_use#' + newHash;
            $('#tab_' + newTabNum).fadeIn();
        }
    })        
})