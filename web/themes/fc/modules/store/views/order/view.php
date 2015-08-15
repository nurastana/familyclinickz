<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\modules\store\models\Order
 * @var $subject string
 */
$this->title = 'Просмотр заказа №'.$model->id;
?>

<h1>Заказ №<?=$model->id?></h1>
<br/>
<p>
    <strong>Статус:</strong>     <?=$model->statusTitle?>
</p>
<br/>
<h2>Заказанные товары</h2>
<br/>
<table style="width: 90%;">
    <tfoot>
    <tr>
        <td colspan="3" style="text-align: right;padding-right: 20px">
            Всего: <?=$model->totalCount()?> шт.

        </td>
    </tr>
    </tfoot>
    <thead>
    <tr>
        <td>#</td>
        <td>Наименование</td>
        <td>Кол-во</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($model->items as $i=>$item):?>
        <tr>
            <td><?=$i+1?></td>
            <td><?=$item->product->title?></td>
            <td><?=$item->quantity?></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>