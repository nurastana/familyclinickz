<?php
/**
 * @var $this \yii\web\View
 */
use yii\helpers\Url;
$this->title = 'Главная';
?>
<div class="slider_top">
    <div id="slider" class="owl-carousel">
        <div class="slide">
            <div class="slide_txt">
                <span class="w_txt">НЕ УПУСТИТЕ ВРЕМЯ!</span>
                <span class="r_txt">ПРОГРАММА <span class="zel">CHECK-UP</span></span>
                <span class="ct">МИНИМУМ ВРЕМЕНИ И ЗАТРАТ</span>
                <span class="r_txt">МАКСИМУМ ЗДОРОВЬЯ </span>
                <span class="b_txt">НА ДОЛГИЕ ГОДЫ!</span>
            </div>
            <img src="<?=$this->theme->getUrl('img/slide1.jpg')?>" alt="">
        </div>
        <div class="slide">
            <img src="<?=$this->theme->getUrl('img/slide1.jpg')?>" alt="">
        </div>
        <div class="slide">
            <img src="<?=$this->theme->getUrl('img/slide1.jpg')?>" alt="">
        </div>
    </div>
</div>
<div class="cr">
    <div class="title">
        <h2>НАПРАВЛЕНИЯ</h2>
    </div>
    <ul class="napravlenie">
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
                <span> диагностика</span>
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
<?php if( ($specList = \app\modules\directorBoard\models\Board::getAll()) ):?>
<div class="spec_bg">
    <div class="cr">
        <div class="title">
            <h2>НАШИ СПЕЦИАЛИСТЫ</h2>
        </div>
        <div id="hWrapperAuto">
            <div id="carouselhAuto" >
                <?php foreach($specList as $spec):?>
                <div>
                        <img alt="" src="<?=$spec->image->resize('187x187')?>" /><br />
                        <p class="thumbnail-text"><span><?=$spec->title?></span>
                            <?=$spec->post?>
                        </p>
                </div>
                <?php endforeach?>
            </div>
        </div>
        <a href="<?=\yii\helpers\Url::to(["/directorBoard/default"])?>">
            <div class="vsex_contact">
                ПОСМОТРЕТЬ ВСЕХ СПЕЦИАЛИСТОВ
            </div>
        </a>
    </div>
</div>
<?php endif?>
<div class="vibor">
    <div class="cr">
        <div class="title">
            <h2>ПОЧЕМУ НУЖНО ВЫБРАТЬ FAMILY CLINIC</h2>
        </div>
        <ul class="vibor">
            <li>
                <img src="<?=$this->theme->getUrl('img/vibor1.jpg')?>"/>
                <div class="vbr_d">
                    <span class="cifr">750</span>
						<span class="nazvan">ВИДОВ<br/>
						УСЛУГ</span>
                </div>
                <p>C самого первого дня Вами будут<br/> заниматься только лучшие специалисты с<br/> огромным опытом работы в своей области</p>
            </li>
            <li>
                <img src="<?=$this->theme->getUrl('img/vibor2.jpg')?>"/>
                <div class="vbr_d">
                    <span class="cifr">63</span>
						<span class="nazvan">ПРОФЕССИОНАЛЬНЫХ<br/>
								ВРАЧЕЙ</span>
                </div>
                <p>Врачи первой и высшей категории, кандидаты медицинских наук, профессора и доценты кафедр готовы день ото дня поддерживать Ваше здоровье и здоровье Вашей семьи на самом высоком уровне!</p>
            </li>
            <li>
                <img src="<?=$this->theme->getUrl('img/vibor3.jpg')?>"/>
                <div class="vbr_d">
                    <span class="cifr">1</span>
						<span class="nazvan">ПРАВИЛЬНЫЙ<br/>
						ВЫБОР</span>
                </div>
                <p>Совмещая наши знания с тем сервисом, который будет предложен Вам в стенах клиники, можете быть уверены, что Ваше здоровье, и здоровье Вашей семьи будет в надежных руках врачей Family Clinic</p>
            </li>
        </ul>
    </div>
</div>
<div class="title">
    <h2>ПОЧЕМУ НУЖНО ВЫБРАТЬ FAMILY CLINIC</h2>
</div>
<div class="uslugi">
    <div class="first_bg">
        <div class="vnutr">

            <h3>Аптека</h3>
        </div>
    </div>
    <div class="second_bg active ">
        <div class="vnutr rel">
            <h3>ЛЕЧЕНИЕ ЗА РУБЕЖОМ</h3>
            <p>Family Clinic поможет Вам в организации всех вопросов для прохождения эффективного лечения в Германии. </p>
            <ul class="predlozhenie">
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Выбор лучших немецких клиник и врачей по Вашему желанию.
</span></a></li>
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Прямая оплата медицинских услуг в клинику по государственным ценам.
</span></a></li>
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Гарантия лучшей цены: без начисления процентов от стоимости лечения.</span></a></li>
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Фиксированные цены на пакеты предоставляемых услуг нашей компании.</span></a></li>
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Визовая поддержка: быстро, качественно, без личного присутствия.</span></a></li>
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Услуги по организации последующих приемов у лечащего врача - бесплатно.</span></a></li>
                <li><a href=""><img src="<?=$this->theme->getUrl('img/galochka.png')?>"/><span>Поддержка пациентов после лечения. Содействие в доставке лекарств.</span></a></li>
            </ul>
            <a href="<?=Url::to(['/cms/default/page','path'=>'lechenie-za-rubezhom'])?>">
                <div class="vsex_contact  sl">
                    УЗНАТЬ ПОДРОБНЕЕ
                </div>
            </a>
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </div>
    <div class="third_bg">
        <div class="vnutr">
            <h3>FAMILY</h3>

        </div>
    </div>
</div>
<div class="news">
    <div class="cr">
        <div class="slide_menu">
            <ul class="dop_menu">
                <li><a href="<?=\yii\helpers\Url::to(["/cms/article/list","type"=>"news"])?>">НОВОСТИ</a></li>
                <li ><a href="<?=\yii\helpers\Url::to(["/cms/article/list","type"=>"stock"])?>" class="active_dp">АКЦИИ</a></li>
                <li><a href="<?=\yii\helpers\Url::to(["/cms/article/list","type"=>"article"])?>">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a></li>
            </ul>
        </div>
        <?php if( ($items = \app\modules\cms\models\Article::getAllByCategory('stock')) ):?>
        <div id="hWrapper">
            <div id="carouselh" >
                <?php foreach($items as $item):?>
                <div class="news">
                    <a href="<?=$item->getPath()?>">
                        <div class="news_img">
                            <img alt="" src="<?=$item->image->resize('230x119',\alexBond\thumbler\Thumbler::METHOD_CROP_CENTER)?>" />
                        </div>
                        <div class="des_slide">
                            <div class="title_date">
                                <span class="name"><?=$item->title?></span>
                                <span class="date"><?=Yii::$app->formatter->asDate(strtotime($item->dateCreate))?></span>
                            </div>
                            <p><?=strip_tags($item->shortext(100))?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach?>
            </div>
        </div>
        <?php endif ?>
    </div>
</div>
<?=\app\modules\cms\widgets\Feedback::widget()?>