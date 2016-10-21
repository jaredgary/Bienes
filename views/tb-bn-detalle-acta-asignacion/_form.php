<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TbBnEquipos;
use app\models\TbBnEdificios;
use app\models\TbBnEstadoEquipo;
use app\models\TbBnActaAsignacion;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaAsignacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-detalle-acta-asignacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoActaAsignacion')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnActaAsignacion::find()->all(),'CodigoActaAsignacion', 'CodigoActaAsignacion'),
        ['prompt' => 'Seleccione el acta de asignacion']
    ) ?>

    <?= $form->field($model, 'CodigoEquipo')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnEquipos::find()->all(),'CodigoEquipo', 'DescripcionEquipo'),
        ['prompt' => 'Seleccione el equipo']
    ) ?>

    <?= $form->field($model, 'CodigoDepartamento')->textInput() ?>

    <?= $form->field($model, 'Telefono')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '9999-9999',
    ]) ?>

    <?= $form->field($model, 'Piso')->textInput() ?>

    <?= $form->field($model, 'CodigoEdificio')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnEdificios::find()->all(),'CodigoEdificio', 'NombreEdificio'),
        ['prompt' => 'Seleccione el edificio']
    ) ?>

    <?= $form->field($model, 'CodigoEstadoEquipo')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnEstadoEquipo::find()->all(),'CodigoEstadoEquipo', 'EstadoEquipo'),
        ['prompt' => 'Seleccione el estado del equipo']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
