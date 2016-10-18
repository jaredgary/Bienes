<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnTiposDocumentos */

$this->title = 'Update Tb Bn Tipos Documentos: ' . $model->CodigoTipoDoc;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Tipos Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoTipoDoc, 'url' => ['view', 'id' => $model->CodigoTipoDoc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-tipos-documentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
