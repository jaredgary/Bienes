<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEquipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-equipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'NumeroInventario')->textInput() ?>

    <?= $form->field($model, 'CodigoCategoria')->textInput() ?>

    <?= $form->field($model, 'DescripcionEquipo')->textInput() ?>

    <?= $form->field($model, 'Marca')->textInput() ?>

    <?= $form->field($model, 'SerieEquipo')->textInput() ?>

    <?= $form->field($model, 'Color')->textInput() ?>

    <?= $form->field($model, 'CodigoDepartamento')->textInput() ?>

    <?= $form->field($model, 'Telefono')->textInput() ?>

    <?= $form->field($model, 'Piso')->textInput() ?>

    <?= $form->field($model, 'CodigoEdificio')->textInput() ?>

    <?= $form->field($model, 'CodigoTipoDoc')->textInput() ?>

    <?= $form->field($model, 'NumeroDocumento')->textInput() ?>

    <?= $form->field($model, 'FechaDocumento')->textInput() ?>

    <?= $form->field($model, 'CostoUnitario')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'CodigoEstadoEquipo')->textInput() ?>

    <?= $form->field($model, 'Observaciones')->textInput() ?>

    <?= $form->field($model, 'SistemaFecha')->textInput() ?>

    <?= $form->field($model, 'SistemaUsuario')->textInput() ?>

    <?= $form->field($model, 'CodigoEstadoAsignacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
