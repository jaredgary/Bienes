<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEquiposSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-equipos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoEquipo') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'NumeroInventario') ?>

    <?= $form->field($model, 'CodigoCategoria') ?>

    <?= $form->field($model, 'DescripcionEquipo') ?>

    <?php // echo $form->field($model, 'Marca') ?>

    <?php // echo $form->field($model, 'SerieEquipo') ?>

    <?php // echo $form->field($model, 'Color') ?>

    <?php // echo $form->field($model, 'CodigoDepartamento') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Piso') ?>

    <?php // echo $form->field($model, 'CodigoEdificio') ?>

    <?php // echo $form->field($model, 'CodigoTipoDoc') ?>

    <?php // echo $form->field($model, 'NumeroDocumento') ?>

    <?php // echo $form->field($model, 'FechaDocumento') ?>

    <?php // echo $form->field($model, 'CostoUnitario') ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'CodigoEstadoEquipo') ?>

    <?php // echo $form->field($model, 'Observaciones') ?>

    <?php // echo $form->field($model, 'SistemaFecha') ?>

    <?php // echo $form->field($model, 'SistemaUsuario') ?>

    <?php // echo $form->field($model, 'CodigoEstadoAsignacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
