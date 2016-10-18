<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaDescargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-acta-descargo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'Inspector')->textInput() ?>

    <?= $form->field($model, 'Observaciones')->textInput() ?>

    <?= $form->field($model, 'SistemaUsuario')->textInput() ?>

    <?= $form->field($model, 'FechaSistema')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
