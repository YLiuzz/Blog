$(function(){
    $("body").on("click", ".top", function () {
        //復原欄位
        $(".change").stop().slideUp(); //把全部答案欄都關起來
        $(".top").not(this).attr("data-answer", "close"); // 除了被點擊到的.top以外的.top，都把html中 data-answer裡面的值改成close
        $(".top").removeClass("active");
        //進行判斷
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        console.log($(this).scrollTop());
        $body.animate({ scrollTop: $(".qa").offset().top - 100 }, 1000);
        
        var answerStatus = $(this).attr("data-answer"); // 紀錄回答欄位開合狀況，每次點擊會取點擊到的問題，html中 data-answer裡面的值
        var $this = $(this);
        if (answerStatus == "close") {
            // 如果取到的值是close ，意思是回答欄位目前關閉，必須打開
            $this.next(".change").stop().slideDown(); //打開欄位
            $this.attr("data-answer", "open"); //把狀態改為開
            $this.addClass("active");
            $.scrollTo({ top: '+=80px', left: '0' }, 800);//將畫面向下滾70px

        } else {
            // 如果取到的值不是close，意思是回答欄位目前打開，必須關閉
            $this.next(".change").stop().slideUp(); //關閉欄位
            $this.attr("data-answer", "close"); //把狀態改為關
            $this.removeClass("active");

        }
    })
})