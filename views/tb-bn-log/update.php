<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnLog */

$this->title = 'Update Tb Bn Log: ' . $model->codigoLog;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigoLog, 'url' => ['view', 'id' => $model->codigoLog]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
