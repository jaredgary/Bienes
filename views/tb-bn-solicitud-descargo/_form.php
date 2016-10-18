<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDescargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-solicitud-descargo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FechaSolicitud')->widget(
        \dosamigos\datepicker\DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
    ]);?>

    <?= $form->field($model, 'MotivoSolicitud')->textInput() ?>

    <?= $form->field($model, 'Estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
