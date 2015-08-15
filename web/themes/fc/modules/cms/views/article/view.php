<?php
/**
 * @var $this \yii\web\View
 * @var $item \app\modules\cms\models\Article
 */
$this->title = $item->title;
$this->params['breadcrumbs']=[
  ['label'=>$item->typeView,'url'=>['/cms/article/list','type'=>$type]],
    $this->title
];
?>
<div class="big_img">
    <img src="<?=$this->theme->getUrl('img/big_photo.jpg')?>" alt=""/>
</div>
<div class=" cr">
    <div class="content">
        <div class="cont_body">
            <div class="head_b rel">
					<span class="con_h"><?=$item->title?>
                        <?php if($this->params['breadcrumbs']):?>
                            <?php
                            echo \yii\widgets\Breadcrumbs::widget([
                                'options'=>['class'=>''],
                                'itemTemplate' => "<li>{link}-></li>\n", // template for all links
                                'links' => $this->params['breadcrumbs']
                            ]);
                            ?>
                        <?php endif?>
					</span>
            </div>
            <?=\Yii::$app->formatter->asDate(strtotime($item->dateCreate))?>
            <?=$item->description?>
        </div>
    </div>
</div>