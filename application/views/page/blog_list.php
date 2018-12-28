<!-- page content -->
<style>
    img {
        max-width: 100%;
        width: 100%;
    }

    .btn.btn-app {
        position: relative;
        padding: 0;
        margin: 0;
        min-width: 30px;
        /* height: 30px; */
        box-shadow: none;
        border-radius: 0;
        text-align: center;
        color: #666;
        border: 0;
        background-color: #fafafa;
        font-size: 12px;
    }
</style>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    <?=$title; ?>
                </h3>
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Blog圖片</th>
                                    <th>標題</th>
                                    <th>內文</th>
                                    <th>建立日期</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datalist as $k => $v): ?>
                                <tr>
                                    <td>
                                        <img src="<?=$v['img']; ?>" alt="">
                                    </td>
                                    <td>
                                        <?=$v['title']; ?>
                                    </td>
                                    <td>
                                        <?=$v['article']; ?>
                                    </td>
                                    <td>
                                        <?=$v['create_time']; ?>
                                    </td>
                                    <td class="btn-group-sm">
                                        <button type="button" sn="<?=$v['sn']; ?>" class="edit btn btn-primary">編輯</button>
                                        <button type="button" sn="<?=$v['sn']; ?>" class="remove btn btn-danger">刪除</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script src="./gentelella_assets/vendors/jquery/dist/jquery.min.js"></script>
<script>
    $(function() {
        $("body").on("click", ".edit", function() {
            location.href =
                "<?=base_url(); ?>gentelella/news_edit?sn=" + $(
                    this).attr('sn');
        })
        $("body").on("click", ".remove", function() {
            var sn = $(this).attr('sn');
            if (confirm("確定要刪除？")) {
                $.post("./api_gentelella/remove_news", {
                    sn: sn
                }, function(data) {
                    location.reload();
                }, 'json');
            }
        })
    })
</script>