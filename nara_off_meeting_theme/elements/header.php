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
                        <?php
                            $a = new GlobalArea('header nav');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="header-bar"></div>
            </header>