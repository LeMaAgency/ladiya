<?php 
/**
 * Project:     inWidget: show pictures from instagram.com on your site!
 * File:        template.php
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of MIT license
 * http://inwidget.ru/MIT-license.txt
 * 
 * @link http://inwidget.ru
 * @copyright 2014-2018 Alexandr Kazarmshchikov
 * @author Alexandr Kazarmshchikov
 * @version 1.2.2
 * @package inWidget
 *
 */

if(!$inWidget instanceof \inWidget\Core) {
	throw new \Exception('inWidget object was not initialised.');
}

?>
<ul class="grid-5 instagram">
	<?
	foreach ($inWidget->data->images as $key=>$item){
		if($inWidget->isBannedUserId($item->authorId) == true) continue;
		switch ($inWidget->preview){
			case 'large':
				$thumbnail = $item->large;
				break;
			case 'fullsize':
				$thumbnail = $item->fullsize;
				break;
			default:
				$thumbnail = $item->small;
		}
		?>
		<li class="item">
			<div class="item-block">
                <a href="<?=$item->link?>" target="_blank">
                    <div class="image"
                         style="background-image: url('<?= $thumbnail ?>');">
                    </div>
                </a>
			</div>
		</li>
		<?  $i++;
		if($i >= $inWidget->view) break;
	}
	?>
</ul>