<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaDescargoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-detalle-acta-descargo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoDetalleActaDescargo') ?>

    <?= $form->field($model, 'CodigoActaDescargo') ?>

    <?= $form->field($model, 'CodigoDetalleActaAsignacion') ?>

    <?= $form->field($model, 'CodigoEquipo') ?>

    <?= $form->field($model, 'CodigoActaAsignacion') ?>

    <?php // echo $form->field($model, 'CodigoEstadoEquipo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
