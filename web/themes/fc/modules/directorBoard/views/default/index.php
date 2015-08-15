<?php
/** @var $this \yii\web\View */
/** @var $modelList \app\modules\directorBoard\models\Board[] */
$this->title = 'НАШИ СПЕЦИАЛИСТЫ';
?>


<div class="big_img rel">
    <img src="<?=$this->theme->getUrl('img/big_photo.jpg')?>" alt=""/>
    <div class="cr">
        <div class="photo_nadp">СПЕЦИАЛИСТЫ

        </div>
    </div>
</div>

<div class=" cr">
    <div class="content">

        <div class="cont_body">
            <div class="head_b rel">
					<span class="con_h">
                            <?=$this->title?>
							<ul>
                                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a>-></li>
                                <li><?=$this->title?></li>
                            </ul>
					</span>
            </div>
            <ul class="spec_2lvl">
                <?php foreach($modelList as $model):?>
                <li>
                    <div>
                        <img alt="" src="<?=$model->image->resize('187x187')?>"><br>
                        <p class="thumbnail-text"><span><?=$model->title?></span>
                            <?=$model->post?>
                        </p>
                    </div>
                </li>
                <?php endforeach?>

            </ul>
        </div>
    </div>
</div>