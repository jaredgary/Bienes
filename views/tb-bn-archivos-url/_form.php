<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TbBnSolicitudDescargo;
use app\models\TbBnTiposSolicitudes;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnArchivosUrl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bn-archivos-url-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodigoSolicitud')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(TbBnSolicitudDescargo::find()->all(),'CodigoSolicitud', 'CodigoSolicitud'),
        'language' => 'en',
        'options' => ['placeholder' => 'Seleccione el código de la solicitud'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'codigoTipoSolicitud')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(TbBnTiposSolicitudes::find()->all(),'codigoTipoSolicitud', 'TipoSolicitud'),
        'language' => 'en',
        'options' => ['placeholder' => 'Seleccione el tipo de solicitud solicitud'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'Ruta')->textInput() ?>

    <?= $form->field($model, 'NombreDocumento')->textInput() ?>

    <?= $form->field($model, 'Formato')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
