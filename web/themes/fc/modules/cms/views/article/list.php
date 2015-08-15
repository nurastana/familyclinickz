<?php
/**
 * @var $this \yii\web\View
 * @var $item \app\modules\cms\models\Article
 * @var $items \app\modules\cms\models\Article[]
 */
$this->title = $item->typeView;
$breadcrumbs = [];
?>
<div class="big_img">
    <img src="<?=$this->theme->getUrl('img/big_photo.jpg')?>" alt=""/>
</div>
<div class=" cr">
    <div class="content">
        <div class="cont_body">
            <div class="head_b rel">
					<span class="con_h"><?=$this->title?>
                        <?php if($breadcrumbs):?>
                            <?php
                            echo \yii\widgets\Breadcrumbs::widget([
                                'options'=>['class'=>''],
                                'itemTemplate' => "<li>{link}-></li>\n", // template for all links
                                'links' => $breadcrumbs
                            ]);
                            ?>
                        <?php endif?>
					</span>
            </div>
            <ul class="news_2lvl">
                <?php foreach($items as $item):?>
                <li>
                    <a href="<?=$item->getPath()?>">
                    <div class="news">
                        <div class="news_img">
                            <img alt="" src="<?=$item->image->resize('250x170')?>">
                        </div>
                        <div class="des_slide">
                            <div class="title_date">
                                <span class="name"><?=$item->title?></span>
                                <span class="date"><?=\Yii::$app->formatter->asDate(strtotime($item->dateCreate))?></span>
                            </div>
                            <p><?=strip_tags($item->shortext(100))?></p>
                        </div>
                    </div>
                    </a>
                </li>
                <?php endforeach?>
            </ul>
        </div>
    </div>
</div>
