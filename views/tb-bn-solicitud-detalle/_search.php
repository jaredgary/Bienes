<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDetalleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-solicitud-detalle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoDetalle') ?>

    <?= $form->field($model, 'CodigoSolicitud') ?>

    <?= $form->field($model, 'CodigoEquipo') ?>

    <?= $form->field($model, 'FechaSistema') ?>

    <?= $form->field($model, 'SistemaUsuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
