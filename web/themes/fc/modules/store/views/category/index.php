<?php
/**
 * @var $view \yii\web\View
 * @var $modelList \app\modules\store\models\Category[]
 */
$this->title = 'Продкция';
?>
<section class="catalog-content">
    <div class="catalog-content__wrapper">
        <h1>Каталог продукции</h1>
        <?php foreach($modelList as $model):?>
        <div class="catalog-content-product">
            <div class="catalog-content-product__img">
                <img src="<?=$model->image->resize('350x116')?>" alt="">
            </div>
            <a href="<?=$model->path?>" title="" class="catalog-content-product__link"><?=$model->title?></a>
            <a href="<?=$model->modificatorLink?>" title="" class="catalog-content-product__category"><?=$model->modificatorTitle?></a>
        </div>
        <?php endforeach?>
    </div>
</section>