<?php
/**
 * [ADMIN] グロバールメニュー
 * 
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2015, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2015, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */
if (Configure::read('BcRequest.isMaintenance')) {
	return;
}
$prefix = '';
if (Configure::read('BcRequest.agent')) {
	$prefix = '/' . Configure::read('BcRequest.agentAlias');
}
?>


<?php if ($this->BcBaser->isHome()): ?>
<ul>
<li><a href="#top">ホーム</a></li>
<li><a href="#matsuri">ちゃんの祭り</a></li>
<li><a href="#kishitsu">ちゃぬんちゅの気質</a></li>
<li><a href="#college">しま造い大学</a></li>
<li><a href="#about">むすまいのしま ちゃん</a></li>
</ul>
<?php else: ?>
<ul>
<li><a href="<?php $this->BcBaser->root() ?>">ホーム</a></li>
<li><a href="<?php $this->BcBaser->root() ?>matsuri/">ちゃんの祭り</a></li>
<li><a href="<?php $this->BcBaser->root() ?>kishitsum/">ちゃぬんちゅの気質</a></li>
<li><a href="<?php $this->BcBaser->root() ?>college/">しま造い大学</a></li>
<li><a href="<?php $this->BcBaser->root() ?>about/">むすまいのしま ちゃん</a></li>
</ul>
<?php endif ?>

