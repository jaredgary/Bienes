<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaAsignacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-detalle-acta-asignacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoActaAsignacion')->textInput() ?>

    <?= $form->field($model, 'CodigoEquipo')->textInput() ?>

    <?= $form->field($model, 'CodigoDepartamento')->textInput() ?>

    <?= $form->field($model, 'Telefono')->textInput() ?>

    <?= $form->field($model, 'Piso')->textInput() ?>

    <?= $form->field($model, 'CodigoEdificio')->textInput() ?>

    <?= $form->field($model, 'CodigoEstadoEquipo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
