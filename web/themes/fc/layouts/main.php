<?php
/**
 * @var $this \yii\web\View
 */
use app\modules\directorBoard\models\Board;
use yii\helpers\Url;
$this->beginPage();
\app\web\themes\fc\ThemeAsset::register($this);
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="keyword" content="">
    <meta name="description" content="">
    <title><?=$this->title?></title>
    <?=$this->head()?>
</head>
<body>
<?php $this->beginBody()?>
<div class="page_wrap">
    <header>
        <div class="cr">
            <div class="head">
                <div class="logo">
                    <a href="<?=Url::home()?>"><img src="<?=$this->theme->getUrl('img/logo.png')?>" alt=""/></a>
                </div>
                <div class="menu">
                    <ul class="nav ">
                        <li>
                            <a href="<?=Url::home()?>">Главная </a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['/cms/default/page','path'=>'o-klinike'])?>"> О Famaly Clinic </a>
                        </li>
                        <li>
                            Направления
                            <div class="nav_sb">
                                <div class="strelka">
                                </div>
                                <ul class="sub_menu">
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'obschaya-medicina'])?>">
                                            <img src="<?=$this->theme->getUrl('img/1.jpg')?>"/>
                                            <span>Общая медицина </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'detskoe-otdelenie'])?>">
                                            <img src="<?=$this->theme->getUrl('img/2.jpg')?>"/>
                                            <span> Детское отделение </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'esteticheskaya-medicina'])?>">
                                            <img src="<?=$this->theme->getUrl('img/3.jpg')?>"/>
                                            <span>  эстетическая медицина </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'diagnostika'])?>">
                                            <img src="<?=$this->theme->getUrl('img/4.jpg')?>"/>
                                            <span> Диагностика</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'profosmotr'])?>">
                                            <img src="<?=$this->theme->getUrl('img/5.jpg')?>"/>
                                            <span>профосмотры </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'check-up-programmi'])?>">
                                            <img src="<?=$this->theme->getUrl('img/6.jpg')?>"/>
                                            <span>CHECK-UP ПРОГРАММЫ  </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'vedenie-beremennosti'])?>">
                                            <img src="<?=$this->theme->getUrl('img/7.jpg')?>"/>
                                            <span> ведение беременности   </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::to(['/cms/default/page','path'=>'reabilitaciya'])?>">
                                            <img src="<?=$this->theme->getUrl('img/8.jpg')?>"/>
                                            <span> реабилитация</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="<?=\yii\helpers\Url::to(["/directorBoard/default"])?>">Специалисты  </a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['/cms/default/page','path'=>'poleznaya-informaciya'])?>">Полезная информация </a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['/cms/default/page','path'=>'ceni'])?>">Цены</a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['/cms/default/page','path'=>'contact'])?>">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <span>Call-центр: 8 (7172) 26-48-56</span>
                    <form>
                        <input name="search" type="text" class="serc" placeholder="Поиск..."/>
                        <div class="sub_but">
                            <input type="submit" name="submit" value="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <?=$content?>
</div>
<footer>
    <div class="cr">
        <div class="contact">
            <div class="logo">
                <a href="index.html"><img src="<?=$this->theme->getUrl('img/logo.png')?>" alt=""/></a>
            </div>
            <ul class="cont">
                <li>Сейфуллина 34Б (пересечение Омарова - Ауэзова)</li>
                <li>Call-центр: 8 (7172) 26-48-56</li>
                <li>Регистратура: 8 (7172) 25-48-55</li>
                <li>E-mail: info@familyclinic.kz</li>
            </ul>
            <div class="fl_r">
                <span class="razrabotan">Разработанo в <a href="astanacreative.kz">Astanacreative.kz</span>
            </div>
        </div>
    </div>
</footer>
<?php if(Yii::$app->controller->route == 'cms/default/index'):?>
<div class="map">
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=3U40xj9g6Mrgr4fItHIz_lezBDFFXxdn&width=100%&height=405"></script>
</div>
<?php endif?>
<!--Модальные окно-->
<div id="overlay"></div><!-- Подложка, одна на всю страницу -->

<div id="modal2" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
    <span class="modal_close"></span>
    <form method="POST" name="form2" action="form.php" >
        <input name="name2" id="name" maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Имя..."/>
        <input name="phone2" id="user_phone2" maxlength="200" class="modal_f " type="text" size="1"  required  placeholder="Номер..."/>
        <button type="submit" name="submit2">ЗАПИСАТЬСЯ НА ПРИЕМ</button>
    </form>
</div>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>