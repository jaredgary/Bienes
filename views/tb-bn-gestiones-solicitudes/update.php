<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnGestionesSolicitudes */

$this->title = 'Update Tb Bn Gestiones Solicitudes: ' . $model->CodigoGestion;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Gestiones Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoGestion, 'url' => ['view', 'id' => $model->CodigoGestion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-gestiones-solicitudes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
