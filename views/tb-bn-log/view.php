<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnLog */

$this->title = $model->codigoLog;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-log-view">

    <h1><?= Html::encode($this->title) ?></h1>
  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigoLog',
            'codigoAC',
            'id',
            'descripcion',
            'SistemaUsuario',
            'fecha',
        ],
    ]) ?>

</div>
