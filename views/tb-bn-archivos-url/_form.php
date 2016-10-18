<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnArchivosUrl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-archivos-url-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoSolicitud')->textInput() ?>

    <?= $form->field($model, 'codigoTipoSolicitud')->textInput() ?>

    <?= $form->field($model, 'Ruta')->textInput() ?>

    <?= $form->field($model, 'NombreDocumento')->textInput() ?>

    <?= $form->field($model, 'Formato')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
