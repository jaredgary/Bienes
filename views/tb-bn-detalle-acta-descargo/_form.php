<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaDescargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-detalle-acta-descargo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoActaDescargo')->textInput() ?>

    <?= $form->field($model, 'CodigoDetalleActaAsignacion')->textInput() ?>

    <?= $form->field($model, 'CodigoEquipo')->textInput() ?>

    <?= $form->field($model, 'CodigoActaAsignacion')->textInput() ?>

    <?= $form->field($model, 'CodigoEstadoEquipo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
