<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaAsignacion */

$this->title = 'Create Tb Bn Acta Asignacion';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acta Asignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acta-asignacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
