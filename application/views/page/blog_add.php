        <style>
          textarea{
            width: 100%;
          }
          img{
            max-width:100%;
            width:345px;
          }
        </style>
        
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$title; ?></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uploadFileInput">圖片上傳 (345 X 182)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="uploadFileInput" id="uploadFileInput">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">圖片預覽
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="" alt="" id="img">
                          <input type="hidden" value="" id="img" name="img">
                        </div>
                      </div>      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_title">標題 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name="news_title" required="" class=" form-control col-md-7 col-xs-12">
                        </div>
                      </div>    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_datetime">日期 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="create_time" name="create_time" required="" class="datetime form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_datetime">標籤分類 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="classification" name="classification" required="" class="datetime form-control col-md-7 col-xs-12">
                        </div>
                      </div>                                
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_content">內文<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea rows="30" cols="50" name="article" id="article"></textarea>     
                        </div>
                      </div>                                                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" class="cancel btn btn-primary">取消</button>
                          <button id="send" type="button" class="btn btn-success">送出</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<script src="./blog_assets/vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
$(function(){
    var article_data = '';

    $("body").on("click",".cancel",function(){
      location.href="<?=base_url(); ?>blog_add";
    })

    var article = CKEDITOR.replace('article');
    // var editor_data;
      article.on( 'change',function( evt ) {
      article_data =CKEDITOR.instances.article.getData();
      console.log(article_data);
    }); 

    /**
     * 上傳圖片用 
     */
    $("body").on("change","input[name='uploadFileInput']",function(event){
        // 取得檔案大小
        var oFReader = new FileReader();
        var thisSize=$(this)[0].files[0].size;
        oFReader.readAsDataURL($(this)[0].files[0]);
        var input=$(this);
        if(thisSize>1000000){
            alert("檔案超過上限1MB");
            input.replaceWith(input.val('').clone(true));
        }else{
            oFReader.onload = function(e) {
                $.post("./api/upload_img",{
                        data:e.target.result
                },function(data){
                    if(data.sys_code == "200"){
                        $("#img").attr('src',data.url);
                    }
                },'json');
            };
        }
    });

    //上傳新增文章
    $("body").on("click","#send",function(e){
      e.preventDefault();
      var err = '';
      if($("#img").attr("src") == ""){
        err = err + "圖片";
      }
      if($("#create_time").val() == ""){
        err = err + "日期";
      }
      if($("#title").val() == ""){
        err = err + "標題";
      }
       if($("#classification").val() == ""){
        err = err + "標籤分類";
      }
      if(article_data == ""){
        err = err + "內文";
      }
      if(err != ""){
        alert('以下欄位尚未填寫：'+err+' 請確認後再送出');
      }else{
        $.post('./api/add_article', {
          
          img:$("#img").attr("src"),
          title:$("#title").val(),
          create_time:$("#create_time").val(),
          classification:$('#classification').val(),
          article:article_data,
        }, function(data) {
          alert(data.sys_msg);
          if(data.sys_code == 200){
            location.href = '<?=base_url(); ?>/blog_list';
          }
        },"json");  
      }
          
    })

})

</script>