<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDetalle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-solicitud-detalle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoSolicitud')->textInput() ?>

    <?= $form->field($model, 'CodigoEquipo')->textInput() ?>

    <?= $form->field($model, 'FechaSistema')->textInput() ?>

    <?= $form->field($model, 'SistemaUsuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
