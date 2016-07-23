<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Green trees</title>
    
        <!-- Bootstrap -->
        <link href="<?php echo $view->getThemePath()?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $view->getThemePath()?>/css/main.css" rel="stylesheet">
        <?php Loader::element('header_required')?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      <div class="<?php echo $c->getPageWrapperClass()?>">
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-sm-3">
                        <h1><a href="index.html"><img src="<?php echo $view->getThemePath()?>/images/header_logo.png" alt="Green Trees" height="50px"></a></h1>
                    </div>
                    <div class="col-sm-7 col-sm-offset-2">
                        <ul class="nav nav-justified gnav">
                            <li role="presentation"><a href="company.html"><span class="nav-item">会社概要</span></a></li>
                            <li role="presentation"><a href="news.html"><span class="nav-item">新着情報</span></a></li>
                            <li role="presentation"><a href="showcase.html"><span class="nav-item">制作実績</span></a></li>
                            <li role="presentation"><a href="plan.html"><span class="nav-item">プラン</span></a></li>
                            <li role="presentation"><a href="contact.html"><span class="nav-item">お問合せ</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-bar"></div>
            </header>
            <main>
                <div class="header-image">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo $view->getThemePath()?>/images/header_image01.png" alt="...">
                                <div class="carousel-caption">
                                積極的に
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo $view->getThemePath()?>/images/header_image02.png" alt="...">
                                <div class="carousel-caption">
                                お客様のニーズに
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo $view->getThemePath()?>/images/header_image03.png" alt="...">
                                <div class="carousel-caption">
                                継続して更新できるウェブサイトを
                                </div>
                            </div>
                        </div>
                    
                          <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row main-contents">
                    <div class="col-sm-4">
                        <div class="main-mark">
                            <p class="main-mark-text">speed</p>
                        </div>
                        <p class="text-center">誰よりも早くお客様のニーズに合わせたウェブサイトを作成します</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="main-mark">
                            <p class="main-mark-text">active</p>
                        </div>
                        <p class="text-center">誰よりも積極的にお客様のお話をお聞きします</p>　
                    </div>
                    <div class="col-sm-4">
                        <div class="main-mark">
                            <p class="main-mark-text">challenge</p>
                        </div>
                        <p class="text-center">常にチャレンジ精神で新しいことに取り組みます</p>
                    </div>
                </div>
            </main>
            <footer>
                <p class="text-right">copyright 2016 株式会社○○</p>
            </footer>      
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo $view->getThemePath()?>/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo $view->getThemePath()?>/js/bootstrap.min.js"></script>
      </div>
      <?php Loader::element('footer_required')?>
    </body>
</html>