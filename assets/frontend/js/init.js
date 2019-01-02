$(function() {
    $("body").on("click", ".LiSelect", function() {
        // $(this).toggleClass("active");
        $(".bottom").stop().slideUp(); //把全部答案欄都關起來
        $(".LiSelect").not(this).attr("data-open", "false"); // 除了被點擊到的.LiSelect以外的.LiSelect，都把html中 data-open裡面的值改成false
        $(".down").removeClass("active");

        //進行判斷
        var answerStatus = $(this).attr("data-open"); // 紀錄回答欄位開合狀況，每次點擊會取點擊到的問題，html中 data-open裡面的值
        var $this = $(this);
        if (answerStatus == "false") {
            // 如果取到的值是false ，意思是回答欄位目前關閉，必須打開
            $this.find(".bottom").stop().slideDown(); //打開欄位
            $this.attr("data-open", "true"); //把狀態改為開
            $(".down").addClass("active");

        } else {
            // 如果取到的值不是false，意思是回答欄位目前打開，必須關閉
            $this.find(".bottom").stop().slideUp(); //關閉欄位
            $this.attr("data-open", "false"); //把狀態改為關
            $(".down").removeClass("active");
        }
    })

    $(".LiSelect ul li").click(function() {
        var e = $(this).closest(".LiSelect");
        var tag = $(this).attr("data-tag");
        console.log(tag)
        e.find("span").text($(this).text());
        e.find("span").attr("data-hash", tag);
        e.find('input').val($(this).text());
    });

    $("body").on("click", "#chk", function() {
        var name = $("#name").val();
        var mobile = $("#mobile").val();
        var type = $("#type").text();
        var path = $("#path").text();
        if (name == "" || mobile == "" || type == "請選擇造口種類" || path == "請選擇購買通路") {
            alert("請填寫資料");
            $(this).prop("checked", false);
        } else {
            if ($(this).prop("checked") == false) {
                $('#submit').addClass("disabled");
            } else {
                // $.featherlight("assets/frontend/privacy.html")
                $('#submit').removeClass("disabled");
            }
        }
    })

    $("body").on("change", "#mobile", function() {
        var regExp = /^[09]{2}[0-9]{8}$/;
        if (!regExp.test($("#mobile").val())) {
            alert("請輸入正確手機格式");
            $(this).val("");
        }
    })

    $('body').on('click', '.go_to_top', function() {
        var body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        body.animate({
            scrollTop: 0
        }, 1100, 'easeOutCirc');
        return false;
    });

    $("body").on("click", ".more_info", function() {
        var title = $(this).attr("title");
        var create_time = $(this).attr("create_time");
        var img = $(this).attr("img");
        var article = $(this).attr("article");
        $.featherlight({ html: '<div id="lightbox_content" style="background:white;padding:6px 10px"><div><div><p style="color: #666666;font-size: 18px;margin: 20px auto 10px;border-bottom: 1px solid;padding-bottom:20px;">' + title + '</p></div><div><p style="color: #878787;font-size:16px;line-height:1.75;margin:10px auto;">' + create_time + '</p></div><div><img src="' + img + '"></div><div><p style="color: #878787;font-size:16px;line-height:1.75;margin:10px auto;">' + article + '</p></div></div></div>' });
    })

})