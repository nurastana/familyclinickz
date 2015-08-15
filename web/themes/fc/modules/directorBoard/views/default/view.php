<?php
/** @var $this \yii\web\View */
/** @var $model \app\modules\directorBoard\models\Board */
$this->title = 'Структура предприятия - '.$model->title;
?>
<article class="page-content">
    <div class="page-content__wrapper">
        <h1>Совет директоров</h1>
        <div><img src="<?=$model->image->resize('289x229',\alexBond\thumbler\Thumbler::METHOD_NOT_BOXED)?>" alt="" align="left">
            <h2><?=$model->post?></h2>
        </div>
        <?=$model->content?>
    </div>
</article>