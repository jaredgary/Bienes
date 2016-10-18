<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoasignacion */

$this->title = 'Create Tb Bn Estadoasignacion';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estadoasignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-estadoasignacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
