<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEdificios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-edificios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NombreEdificio')->textInput() ?>

    <?= $form->field($model, 'DireccionEdificio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
