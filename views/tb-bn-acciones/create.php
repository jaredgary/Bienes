<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnAcciones */

$this->title = 'Create Tb Bn Acciones';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
