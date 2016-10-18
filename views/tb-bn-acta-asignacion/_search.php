<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaAsignacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-acta-asignacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CodigoActaAsignacion') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'SistemaUsuario') ?>

    <?= $form->field($model, 'FechaSistema') ?>

    <?= $form->field($model, 'CodigoInspector') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
