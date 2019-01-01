<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'component_meta.php'; ?>
</head>
<style>
.featherlight .featherlight-content {
    position: relative;
    text-align: left;
    vertical-align: middle;
    display: inline-block;
    overflow: auto;
    padding: 25px 25px 0;
    border-bottom: 25px solid transparent;
    margin-left: 5%;
    margin-right: 5%;
    max-height: 95%;
    /* background: #fff; */
    cursor: auto;
    white-space: normal;
    /* background-color: #fff; */
}
.featherlight .featherlight-close-icon {
    position: absolute;
    z-index: 9999;
    top: 0;
    right: 0;
    line-height: 25px;
    width: 25px;
    cursor: pointer;
    text-align: center;
    font-family: Arial, sans-serif;
    background: #fff;
    background: rgba(255, 255, 255, 0.3);
    color: #000;
    border: none;
    padding: 0;
    /* display: none; */
}
.featherlight .featherlight-inner {
    display: block;
    /* max-width:345px; */
    /* width: 100%; */
}
#lightbox_content p{
    line-height : 180%;
    text-align : justify;
    font-family: "微軟正黑體", "Microsoft JhengHei", "Segoe UI Semibold", "Segoe UI";
}
</style>
<body>
    <div class="all_wrapper">
        <div class="wrapper">
		        <?php include 'header.php'; ?>
            <div class="banner">
            </div>
            <?php foreach (array_reverse($datalist) as $k => $v): ?>
                <div class="news_content">
                    <h2><?=$v['title']; ?></h2>
                    <p>日期：<?=$v['create_time']; ?></p>
                    <div class="t_center">
                        <img src="<?=$v['img']; ?>" alt="">
                    </div>
                    <div class="t_center btn more_info" content="<?=$v['article']; ?>" img="<?=$v['img']; ?>" title="<?=$v['title']; ?>" date="<?=$v['create_time']; ?>">瞭解更多</div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

