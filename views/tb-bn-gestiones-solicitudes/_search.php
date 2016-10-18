<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnGestionesSolicitudesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-gestiones-solicitudes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoGestion') ?>

    <?= $form->field($model, 'CodigoSolicitud') ?>

    <?= $form->field($model, 'CodigoEstado') ?>

    <?= $form->field($model, 'Observaciones') ?>

    <?= $form->field($model, 'SistemaUsuario') ?>

    <?php // echo $form->field($model, 'FechaSistema') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
