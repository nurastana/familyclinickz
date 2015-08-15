<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\modules\store\models\Product
 */
$this->title = $model->category->title . ' - ' .$model->title;
?>
<section class="cart-content">
    <div class="cart-content__wrapper">
        <h1><?=$model->title?></h1><img src="<?=$model->image->resize('574x262')?>" alt="" align="right">
        <?=$model->content?>
        <?php if( ($modificators = $model->modificators) ):?>
        <h2>МОДИФИКАЦИИ</h2>
        <div class="cart-content-modification"><a href="/catalog-table.html" title="" class="cart-content-modification__all"><?=$model->category->modificatorTitle?></a>
            <?php foreach($modificators as $modificator):?>
            <div class="cart-content-modification__item">
                <a href="<?=$modificator->path?>" title=""><img src="<?=$modificator->image->resize('134x135',\alexBond\thumbler\Thumbler::METHOD_BOXED)?>" alt=""></a>
                <a href="<?=$modificator->path?>" title="" class="cart-content-modification__link"><?=$modificator->title?></a>
            </div>
            <?php endforeach?>
        </div>
        <?php endif?>
    </div>
</section>