<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnGestionesSolicitudes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-gestiones-solicitudes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoSolicitud')->textInput() ?>

    <?= $form->field($model, 'CodigoEstado')->textInput() ?>

    <?= $form->field($model, 'Observaciones')->textInput() ?>

    <?= $form->field($model, 'SistemaUsuario')->textInput() ?>

    <?= $form->field($model, 'FechaSistema')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
