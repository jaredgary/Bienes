<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaAsignacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-detalle-acta-asignacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoDetalleActaAsignacion') ?>

    <?= $form->field($model, 'CodigoActaAsignacion') ?>

    <?= $form->field($model, 'CodigoEquipo') ?>

    <?= $form->field($model, 'CodigoDepartamento') ?>

    <?= $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Piso') ?>

    <?php // echo $form->field($model, 'CodigoEdificio') ?>

    <?php // echo $form->field($model, 'CodigoEstadoEquipo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
