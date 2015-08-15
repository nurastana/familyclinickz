<?php
/**
 * @var $items \app\modules\store\models\Category[]
 * @var $type string
 * @var $alias string
 */
?>
<h3><?=$type=='brand' ? 'Производители':'Каталог'?></h3>
<ul>
    <?php foreach($items as $item):?>
        <li>
            <div class="catalog_li"><img src="<?=$item->image->resize('33x30')?>"></div>
            <a href="<?=$item->path?>" <?=$alias==$item->alias ? 'class="active_sb"' : ''?>><?=$item->title?></a>
        </li>
    <?php endforeach?>
</ul>