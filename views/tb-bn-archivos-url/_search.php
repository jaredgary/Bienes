<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnArchivosUrlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-archivos-url-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Codigo') ?>

    <?= $form->field($model, 'CodigoSolicitud') ?>

    <?= $form->field($model, 'codigoTipoSolicitud') ?>

    <?= $form->field($model, 'Ruta') ?>

    <?= $form->field($model, 'NombreDocumento') ?>

    <?php // echo $form->field($model, 'Formato') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
