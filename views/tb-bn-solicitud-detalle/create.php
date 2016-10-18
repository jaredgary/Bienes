<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDetalle */

$this->title = 'Create Tb Bn Solicitud Detalle';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Solicitud Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-solicitud-detalle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
