<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TbBnSolicitudDescargo;
use app\models\TbBnTiposSolicitudes;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnArchivosUrl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-archivos-url-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoSolicitud')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnSolicitudDescargo::find()->all(),'CodigoSolicitud', 'CodigoSolicitud'),
        ['prompt' => 'Seleccione el código de la solicitud']
    ) ?>

    <?= $form->field($model, 'codigoTipoSolicitud')->dropDownList(
        \yii\helpers\ArrayHelper::map(TbBnTiposSolicitudes::find()->all(),'codigoTipoSolicitud', 'TipoSolicitud'),
        ['prompt' => 'Seleccione el tipo de solicitud solicitud']
    ) ?>

    <?= $form->field($model, 'Ruta')->textInput() ?>

    <?= $form->field($model, 'NombreDocumento')->textInput() ?>

    <?= $form->field($model, 'Formato')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
