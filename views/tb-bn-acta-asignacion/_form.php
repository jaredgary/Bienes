<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaAsignacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-acta-asignacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoInspector')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
