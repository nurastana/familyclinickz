<?php
/**
 * @var $this \yii\web\View
 * @var $page \app\modules\cms\models\Page;
 */
$this->title = $page->title;
$breadcrumbs = $page->breadcrumbs();
?>
<div class="big_img">
    <img src="<?=$this->theme->getUrl('img/big_photo.jpg')?>" alt=""/>
</div>
<div class=" cr">
    <div class="content">
        <?php if( ($childrens = $page->children()) ):?>
        <div class="side_bar">
            <span class="con_h">Навигация</span>
            <ul>
                <?php foreach($childrens as $children):?>
                <li><a href="<?=\yii\helpers\Url::to(['/cms/default/page','path'=>$children->FullPath])?>"><?=$children->title?></a></li>
                <?php endforeach?>
            </ul>
        </div>
        <?php endif?>
        <div class="cont_body">
            <div class="head_b rel">
					<span class="con_h"><?=$page->title?>
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
            <?=$page->description?>
        </div>
    </div>
</div>
