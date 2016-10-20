<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TbBnCategoriasBienes;
use app\models\TbBnEdificios;
use app\models\TbBnTiposDocumentos;
use app\models\TbBnEstadoEquipo;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEquipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-equipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->widget(
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

    <?= $form->field($model, 'NumeroInventario')->textInput() ?>

    <?= $form->field($model, 'CodigoCategoria')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnCategoriasBienes::find()->all(),'CodigoCategoria', 'Categoria'),
        ['prompt' => 'Seleccione la categoria del equipo']
    ) ?>

    <?= $form->field($model, 'DescripcionEquipo')->textInput() ?>

    <?= $form->field($model, 'Marca')->textInput() ?>

    <?= $form->field($model, 'SerieEquipo')->textInput() ?>

    <?= $form->field($model, 'Color')->textInput() ?>

    <?= $form->field($model, 'CodigoDepartamento')->textInput() ?>

    <?= $form->field($model, 'Telefono')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '9999-9999',
    ]) ?>

    <?= $form->field($model, 'Piso')->textInput() ?>

    <?= $form->field($model, 'CodigoEdificio')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnEdificios::find()->all(),'CodigoEdificio', 'NombreEdificio'),
        ['prompt' => 'Seleccione el edificio']
    ) ?>

    <?= $form->field($model, 'CodigoTipoDoc')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnTiposDocumentos::find()->all(),'CodigoTipoDoc', 'TipoDocumento'),
        ['prompt' => 'Seleccione el tipo de documento']
    ) ?>

    <?= $form->field($model, 'NumeroDocumento')->textInput() ?>

    <?= $form->field($model, 'FechaDocumento')->widget(
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

    <?= $form->field($model, 'CostoUnitario')->textInput() ?>

    <?= $form->field($model, 'CodigoEstadoEquipo')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnEstadoEquipo::find()->all(),'CodigoEstadoEquipo', 'EstadoEquipo'),
        ['prompt' => 'Seleccione el estado del equipo']
    ) ?>

    <?= $form->field($model, 'Observaciones')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
