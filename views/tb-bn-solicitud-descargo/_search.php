<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDescargoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-solicitud-descargo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoSolicitud') ?>

    <?= $form->field($model, 'FechaSolicitud') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'MotivoSolicitud') ?>

    <?= $form->field($model, 'Estado') ?>

    <?php // echo $form->field($model, 'SistemaFecha') ?>

    <?php // echo $form->field($model, 'SistemaUsuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
