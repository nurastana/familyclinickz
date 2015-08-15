<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\cms\models\Page */

$this->title = Yii::t('app', 'Редактирование: ') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Страницы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
