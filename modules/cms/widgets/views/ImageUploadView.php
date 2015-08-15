<?php
/* @var $this yii\web\View */

use dosamigos\fileupload\FileUploadUI;
?>
    <br/>
<?= FileUploadUI::widget([
    'model' => $model,
    'attribute' => 'file',
    'url' => ['/cms/admin/image/upload','model'=>$inModel::className(),'primaryKey'=>$primaryKey],
    'gallery' => false,
    'fieldOptions' => [
        'accept' => 'image/*',
    ],
    'clientOptions'=>[
        'maxNumberOfFiles'=>$maxNumberOfFiles,
    ],
]);
?>

<?php
if($fileUploadData)
{
    $this->registerJs('
        var $el = $("#image-file-form");
        var e = {
            isDefaultPrevented:function(){return false}
        };
        $el.fileupload("option", "done").call($el, e, {
            result: {files:'.$fileUploadData.'},
        });
    ');
}
?>
