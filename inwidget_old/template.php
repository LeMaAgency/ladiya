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
 * @copyright 2014-2017 Alexandr Kazarmshchikov
 * @author Alexandr Kazarmshchikov
 * @version 1.1.0
 * @package inWidget
 *
 */
if(!$inWidget) die('inWidget object was not initialised.');
if(!is_object($inWidget->data)) die('<b style="color:red;">Cache file contains plain text:</b><br />'.$inWidget->data);
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
                                        <div class="image"
                                             style="background-image: url('<?= $thumbnail ?>');"></div>
                                    </div>
                                </li>
                                <?  $i++;
                                if($i >= $inWidget->view) break;
                            }
                            ?>
                        </ul>

