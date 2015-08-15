<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\cms\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'visible')->radioList(['Скрыта','Видна'])?>

    <?= $form->field($model, 'parentId')->dropDownList($model->dropDown(),['prompt'=>' --- ']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6])->widget(\app\assets\Redactor::className()) ?>

    <?= $form->field($model, 'metaKeywords')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'metaDescription')->textarea(['rows'=>3]) ?>

    <?= $form->field($model, 'dateCreate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Добавить') : Yii::t('app', 'Редактировать'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
