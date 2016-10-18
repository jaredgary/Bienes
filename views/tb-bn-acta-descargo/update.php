<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaDescargo */

$this->title = 'Update Tb Bn Acta Descargo: ' . $model->CodigoActaDescargo;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acta Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoActaDescargo, 'url' => ['view', 'id' => $model->CodigoActaDescargo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-acta-descargo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
