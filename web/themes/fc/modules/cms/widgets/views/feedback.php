<div class="uslugi_bg rel">
    <div class="title">
        <h2>Записаться на прием</h2>
    </div>
    <div class="polosa">
    </div>
    <div class="cr">
        <div class="form">
            <?php $form = \yii\widgets\ActiveForm::begin([
                'enableAjaxValidation'=>true,
                'action'=>['/cms/default/feedback'],
            ]) ?>
                <?=$form->field($model,'name')->textInput()?>
                <?=$form->field($model,'phone')->textInput()?>
                <?=$form->field($model,'doctor')->textInput()?>
                <?=$form->field($model,'date')->textInput()?>
                <button name="button"type="submit">ЗАПИСАТЬСЯ НА ПРИЕМ К ВРАЧУ</button>
            <?php \yii\widgets\ActiveForm::end()?>

        </div>
    </div>
</div>