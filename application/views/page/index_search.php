<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min1.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../assets/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="outer-container">
<?php print_r($datalist);?>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <!-- <p>Hello world, My name is Blanca</p> -->
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <!-- <a href="#">Contactme@email.com</a> -->
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="https://www.facebook.com/profile.php?id=100002394633698"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://github.com/YLiuzz"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/yi-ru-lin-b42735170/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                       
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="index" rel="home">Blog</a></h1>
                        <p class="site-description">Personal Blog</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="index">Home</a></li>
                            <li><a href="login">login</a></li>
                        </ul>

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="https://www.facebook.com/profile.php?id=100002394633698"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://github.com/YLiuzz"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/yi-ru-lin-b42735170/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                    <?php foreach ($datalist as $ky => $vy): ?>
                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="<?=$vy['img']?>" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->
                      <?php endforeach;?>
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
                    </div>
                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-12 col-lg-3">
                    <a href="#">
                        <div class="yt-subscribe">
                            <img src="./assets/img/me.jpg" alt="Youtube Subscribe">
                            <h3>Terry Lin</h3>
                            <p>Do one thing at a time, and do well</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->

    <div class="container single-page">
        <div class="row">
       
            <div class="col-12 col-lg-9">
             <?php foreach ($datalist as $k => $v): ?>
                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            <?=$v['create_time']?>
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"><?=$v['title']?></h2>

                        <div class="tags-links">
                            <a id=<?=$v['classification']?> href="#">#<?=$v['classification']?></a>
                        </div>
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="<?=$v['img']?>" alt="">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p><?=$v['article']?></p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                                <li><a href="https://www.facebook.com/profile.php?id=100002394633698"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://github.com/YLiuzz"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/yi-ru-lin-b42735170/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <!-- <a class="read-more order-2" href="#">Read more</a> -->

                        <div class="comments-count order-1 order-lg-3">
                            <!-- <a href="#">2 Comments</a> -->
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->
                    <?php endforeach; ?>
            </div><!-- .col -->
      
            
            
            <div class="col-12 col-lg-3">
            
                <div class="sidebar">
                <h3 style="text-align: center;">最新文章</h3>
                <?php foreach ($new_article as $k => $v): ?>

                    <div class="about-me">
                        <h2><?=$v['title']?></h2>

                        <p><?=$v['article']?></p>
                    </div>
                    <div class="recent-posts">
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="<?=$v['img']?>" alt="">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                   <?= $v['create_time']?>
                                </div>
                                <div class="tags-links">
                                    <a href="#">#<?=$v['classification']?></a>
                                </div>
                            </header>
                        </div>
                    </div>
                <?php endforeach;?>
                <div class="tags-list">
                <?php foreach ($datalist as $k => $v): ?>
                        <a href=""><?=$v['classification']?></a>
                <?php endforeach;?>
                    </div><!-- .tags-list -->
                </div>
         
            </div>
            
            
                    
                    <div class="sidebar-ads">
                        <!-- <img src="./assets/img/ads.jpg" alt="ads"> -->
                    </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->

  

    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                            <ul class="flex justify-content-center justify-content-md-end align-items-center">
                                <li><a href="https://www.facebook.com/profile.php?id=100002394633698"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://github.com/YLiuzz"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/yi-ru-lin-b42735170/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->

<script type='text/javascript' src='../assets/js/jquery.js'></script>
<script type='text/javascript' src='../assets/js/swiper.min.js'></script>
<script type='text/javascript' src='../assets/js/custom.js'></script>

</body>
</html>