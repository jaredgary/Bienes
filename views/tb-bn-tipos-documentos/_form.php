<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnTiposDocumentos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-tipos-documentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TipoDocumento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
