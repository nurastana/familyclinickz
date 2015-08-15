<?php
/** @var $this \yii\web\View */
/** @var $q string */
/** @var $route string */
/** @var $category \app\modules\store\models\Category */
/** @var $categoryList \app\modules\store\models\Category[] */
/** @var $products \app\modules\store\models\Product[] */
use yii\helpers\Url;
use app\modules\store\models\Category;
use app\modules\store\models\Manufacturer;
$this->title = $title;
$theme =  $this->theme;
\app\modules\store\assets\BasketAsset::register($this);
?>
<section class="product-list-content">
    <div class="product-list-content__wrapper">
        <h1><?=$category->title?></h1>
        <aside class="product-list-content-sidebar">
            <ul class="product-list-content-sidebar-menu">
                <?php foreach($categoryList as $categoryItem):?>
                <li class="product-list-content-sidebar-menu__category <?=$category->path == $categoryItem->path ? 'active' : ''?>"><a href="<?=$categoryItem->path?>" title=""><?=$categoryItem->title?></a>
                    <?php if( ($categoryProducts = $categoryItem->products) ):?>
                    <ul class="product-list-content-sidebar-menu--inside">
                        <?php foreach($categoryProducts as $categoryProduct):?>
                        <li class="product-list-content-sidebar-menu__sub-category">
                            <a href="<?=$categoryProduct->path?>" title=""><?=$categoryProduct->title?></a>
                        </li>
                        <?php endforeach?>
                    </ul>
                    <?php endif?>
                </li>
                <?php endforeach?>
            </ul>
        </aside>
        <div class="product-list-content-list">
            <?php foreach($products as $product):?>
            <div class="product-list-content-list-item">
                <img src="<?=$product->image->resize('150x95',\alexBond\thumbler\Thumbler::METHOD_CROP_CENTER)?>" alt="" class="product-list-content-list-item__img">
                <a href="<?=$product->path?>" title="" class="product-list-content-list-item__title"><?=$product->title?></a>
                <p class="product-list-content-list-item__text"><?=\yii\helpers\Html::encode($product->shortext(300))?></p>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>