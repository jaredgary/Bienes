<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDescargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-solicitud-descargo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FechaSolicitud')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'MotivoSolicitud')->textInput() ?>

    <?= $form->field($model, 'Estado')->textInput() ?>

    <?= $form->field($model, 'SistemaFecha')->textInput() ?>

    <?= $form->field($model, 'SistemaUsuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
