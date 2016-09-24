<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
            <main>
                <div class="header-image">
                    <img class="img-responsive hidden-sm hidden-xs" src="<?php echo $view->getThemePath()?>/images/header_image.png">
                    <h2 class="title"><large>会社概要</large></h2>
                </div>
                <div class="row main-contents">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="nav nav-pills nav-stacked sidebar">
                                    <li role="presentation"><a class="active" href="company.html"><p class="sidebar-item">会社概要</p></a></li>
                                    <li role="presentation"><a href="message.html"><p class="sidebar-item">社長あいさつ</p></a></li>
                                    <li role="presentation"><a href="access.html"><p class="sidebar-item">アクセス</p></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-9 main-content">
                                <div class="company">
                                    <h4>1.会社名</h4>
                                    <p>株式会社○○英文名○○○</p>
                                        
                                    <h4>2.設立</h4>
                                    <p>○○○○年○月</p>
                                        
                                    <h4>3.所在地</h4>
                                    <p>本社　○○県○○市○○</p>
                                    <p>○○事務所　○○県○○市○○</p>
                                        
                                    <h4>4.資本金</h4>
                                    <p>○○○円</p></p>
                                        
                                    <h4>5.代表者</h4>
                                    <p>代表取締役社長　○○○○</p>
                                        
                                    <h4>6.社員数</h4>
                                    <p>○○○名（男子○○名・女子○○名）</p>
                                        
                                    <h4>7.売上高</h4>
                                    <p>○○○円（○○○○年度○月期十実績）</p>
                                        
                                    <h4>8.事業内容</h4>
                                    <p>○○○○などの販売ならびに企画開発</p>
                                        
                                    <h4>9.取引先</h4>
                                    <p>○○○、○○○　ほか</p><br/>
                                        
                                    <h4>10.会社沿革</h4>
                                    <p>○○年</p>
                                    <p>○○年</p>
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