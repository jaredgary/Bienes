<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEdificios */

$this->title = 'Update Tb Bn Edificios: ' . $model->CodigoEdificio;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Edificios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoEdificio, 'url' => ['view', 'id' => $model->CodigoEdificio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-edificios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
