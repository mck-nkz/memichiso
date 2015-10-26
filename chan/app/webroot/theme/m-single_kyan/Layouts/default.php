<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php $this->BcBaser->charset() ?> 
<?php $this->BcBaser->title() ?>
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<?php $this->BcBaser->icon() ?>
<?php $this->BcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
<?php $this->BcBaser->css(array(
'style',
'camera',
'style_custom')); ?>
<?php $this->BcBaser->js(array(
'admin/jquery-1.7.2.min',
'admin/functions',
'jquery.mousewheel.js',
'jquery.easing.1.3.js',
'jquery.easie.js',
'jquery.setting.js')); ?>
<!--[if lt IE 9]>
<script src="<?php $this->BcBaser->themeUrl() ?>js/html5shiv.js"></script>
<script src="<?php $this->BcBaser->themeUrl() ?>js/selectivizr.js"></script>
<![endif]-->
<!--[if lte IE 7]>
<script src="<?php $this->BcBaser->themeUrl() ?>js/jquery.ie6warning.js"></script>
<![endif]-->
<!--[if IE 6.0]>
<script src="<?php $this->BcBaser->themeUrl() ?>js/DD_belatedPNG.js"></script>
<![endif]-->
<?php $this->BcBaser->scripts() ?> 
<?php if ($this->BcBaser->isHome()): ?>
<script src="<?php $this->BcBaser->themeUrl() ?>js/camera.js"></script>
<script src="<?php $this->BcBaser->themeUrl() ?>js/jquery.mobile.customized.min.js"></script>
<?php endif ?>
<?php $this->BcBaser->element('google_analytics') ?>
</head>

<body>
<div id="BaseUrl" style="display: none"><?php echo $this->request->base ?></div>
<?php echo $this->BcBaser->element('header') ?>


<?php if ($this->BcBaser->isHome()): ?>
<div class="mainVisual">

</div><!-- /mainVisual -->

<script>
$(".cameraList").each(function() {
	$(this).attr('data-src', $(this).find('.mainImg').attr('src'));
});
</script>
<?php endif ?>


<div class="container">

<?php /* ページコンテンツ */ ?>
<?php //$this->BcBaser->flash() ?>
<?php //$this->BcBaser->content() ?>

<?php if ($this->BcBaser->isHome()): ?>

<?php /* ちゃんの祭り */ ?>
<?php $this->BcBaser->page('/matsuri') ?>

<?php /* ちゃぬんちゅの気質 */ ?>
<?php $this->BcBaser->page('/kishitsu') ?>

<?php /* しま造い大学 */ ?>
<?php $this->BcBaser->page('/college') ?>

<?php /* むすまいのしま　ちゃん */ ?>
<?php $this->BcBaser->page('/about') ?>

<?php /* 事業案内 */ ?>
<?php //$this->BcBaser->page('/service') ?>

<?php /* 会社概要 */ ?>
<?php //$this->BcBaser->page('/company') ?>

<?php /* 採用情報 */ ?>
<?php //$this->BcBaser->page('/recruit') ?>

<?php /* お問い合わせ */ ?>
<!--
<div class="articleArea bgGray" id="contact">
<article class="mainWidth">
<h2 class="fontawesome-circle-arrow-down">CONTACT <span>お問い合わせ</span></h2>

<div id="MailForm"></div>
</article>
</div>--><!-- /articleArea -->


<?php /* ウィジェットエリア */ ?>
<?php //$this->BcBaser->widgetArea() ?>
<?php endif ?>

</div><!-- /container -->



<?php echo $this->BcBaser->element('footer') ?>
<?php $this->BcBaser->func() ?>
</body>
</html>
