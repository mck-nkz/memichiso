<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(1) ?>
<!-- BaserPageTagEnd -->

<section class="mainHeadline">
<h2>シングルページデザインで<br />
<span class="fcGreen">見やすくカッコいい</span>WEBサイトへ！</h2>
</section>
<!-- /mainHeadline -->

<div class="mainWidth" id="information">
<section class="news1">
<h2>NEWS RELEASE</h2>
<?php $this->BcBaser->blogPosts('news', 5) ?>
</section>

<section class="news2">
<h2>BaserCMS NEWS</h2>
<?php echo $this->BcBaser->js('/feed/ajax/1'); ?>
</section>
</div><!-- /information -->