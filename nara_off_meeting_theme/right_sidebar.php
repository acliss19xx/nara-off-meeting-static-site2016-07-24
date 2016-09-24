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
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-sm-3">
                        <h1><a href="index.html"><img src="<?php echo $view->getThemePath()?>/images/header_logo.png" alt="Green Trees" height="50px"></a></h1>
                    </div>
                    <div class="col-sm-7 col-sm-offset-2">
                        <?php
                            $a = new Area('header nav');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="header-bar"></div>
            </header>
            <main>
                <div class="header-image">
                    <img class="img-responsive hidden-sm hidden-xs" src="<?php echo $view->getThemePath()?>/images/header_image.png">
                    <h2 class="title"><large>新着情報</large></h2>
                </div>
                <div class="row main-contents">
                    <div class="container">
                        <div class="col-sm-9">
                            <h3>第10回concrete5奈良オフ会</h3>
                            <h4>開催日：2016年4月17日</h4>
                            <p>サンプルサイトを使って、基本的な説明をします。<br/>
                                学校のお知らせページを作成します。<br/>
                                生徒・先生・保護者向けによって違うレイアウトのページを作成します。<br/>

                                （詳細は追ってお知らせします）<br/>
                                １．テーマとは？<br/>
                                    テーマとは何かを簡単に説明します。<br/>

                                ２．ページテンプレートとは？<br/>
                                    生徒・先生・保護者むけのテンプレートの作成を説明します。<br/>
                                    bootstrap3 のグリッド機能を使ってレイアウトを作成し、concrete5のエリア分けを変えてつくります。<br/>

                                ３．ページタイプとは？<br/>
                                    ページリストブロックを使って、ページタイプをどのように活用するのかを説明します。</p>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="table-responsive">
                                	<table class="table">
                                		<tbody>
                                			<tr>
                                				<td><a href="nara-meeting-12.html">第12回concrete5奈良オフ会</a></td>
                                			</tr>
                                			<tr>
                                				<td><a href="nara-meeting-11.html">第11回concrete5奈良オフ会</a></td>
                                			</tr>
                                			<tr>
                                				<td><a href="nara-meeting-10.html">第10回concrete5奈良オフ会</a></td>
                                			</tr>
                                		</tbody>
                                	</table>
                                </div>
                            </div>
                        </div>
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