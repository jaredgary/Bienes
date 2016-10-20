<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TbBnSolicitudDescargo;
use app\models\TbBnEstadoSolicitud;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnGestionesSolicitudes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-gestiones-solicitudes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoSolicitud')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnSolicitudDescargo::find()->all(),'CodigoSolicitud', 'CodigoSolicitud'),
        ['prompt' => 'Seleccione el código de la solicitud']
    ) ?>

    <?= $form->field($model, 'CodigoEstado')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnEstadoSolicitud::find()->all(),'CodigoEstado', 'Estado'),
        ['prompt' => 'Seleccione el estado de la solicitud']
    ) ?>

    <?= $form->field($model, 'Observaciones')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
