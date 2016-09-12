<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="App">
<head>
<meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
<div class="container-fluid" ng-controller="Main2Ctrl">
    <div class="row margin hidden-xs hidden-md hidden-sm">
        <div class="col-lg-2 col-lg-offset-2">
            <div class="logo">
                <a class="love" href="/"></a>
                <h1><a href="#">everything about cats</a></h1>  
            </div>
        </div>
        <div class="margin4 col-lg-5 col-lg-offset-3" style="padding-bottom: 25px;"> 
            <a class="menu" href="/" id="mainpage" >Main</a>
            <a class="menu" href="/photos">Photos</a>
            <a class="menu" href="/catpage">Cat Page</a>
            <a class="menu" href="/contacts">Contacts</a>
        </div>
    </div>
    
    <!-- for md display-->
    
    <div class="row margin hidden-xs hidden-lg hidden-sm">
        <div class="col-md-2 col-md-offset-1">
            <div class="logo">
                <a class="love" href="/"></a>
                <h1><a href="#">everything about cats</a></h1>  
            </div>
        </div>
        <div class="col-md-5 col-md-offset-3 margin4 " style="padding-bottom: 25px;"> 
            <a class="menu" href="/" id="mainpage" >Main</a>
            <a class="menu" href="/photos">Photos</a>
            <a class="menu" href="/catpage">Cat Page</a>
            <a class="menu" href="/contacts">Contacts</a>
        </div>
    </div>
    
    <!-- for sm display-->
    
    <div class="row margin hidden-lg hidden-md hidden-xs">
        <div class="col-sm-2 col-sm-offset-5">
            <div class="logo" >
                <a class="love" href="/"></a>
                <h1><a href="#">everything about cats</a></h1>  
            </div>
        </div>
    </div>
    <div class="row margin hidden-lg hidden-md hidden-xs" style="padding-bottom: 25px;">
        <div class="col-sm-6"  style="margin-left: 31%;"> 
            <a class="menu" href="/" id="mainpage">Main</a>
            <a class="menu" href="/photos">Photos</a>
            <a class="menu" href="/catpage">Cat Page</a>
            <a class="menu" href="/contacts">Contacts</a>
        </div>
    </div>
    
    <!-- for xs display-->
    
    <div class="row hidden-lg hidden-md hidden-sm panelxs">
        <div class="col-xs-1">
            <div class="menu-xs" ng-click="Modalmenu();"><div class="menu-decoration" ></div></div>
        </div>
        <div class="col-xs-2 ">
            <img src="/img/logo.png" class="logoxs">
        </div>
            
    </div>
    <div class="row margin hidden-lg hidden-md hidden-sm" id="modalmenu" modal="{{modal}}">
        <table>
        <tr><td class="tdxs" ><span style="margin-left: 20px;"><a href="/" style="color: white; text-decoration: none;">Main</a></span></td></tr>
        <tr><td class="tdxs" ><span style="margin-left: 20px;"><a href="/photos" style="color: white; text-decoration: none;">Photos</a></span></td></tr>
        <tr><td class="tdxs" > <span style="margin-left: 20px;"><a href="/catpage" style="color: white; text-decoration: none;">Cat Page</a></span></td></tr>
        <tr><td class="tdxs" > <span style="margin-left: 20px;"><a href="/contacts" style="color: white; text-decoration: none;">Contacts</a></span></td></tr>
        </table>
    </div>
    
    
    <?= $content ?>
    <div class="row ">
        <div class="col-md-10 col-md-offset-1">
            <div class="before-footer">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="follow_us">Follow Us</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="follow_img">
                <a class="link1" href="#"></a>
                <a class="link2" href="#"></a>
                <a class="link3" href="#"></a>
                <a class="link4" href="#"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <div class="privacy"> I <span class="heart"></span> Cats © 2016 </div>
        </div>
    </div>
  </div>
  <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>