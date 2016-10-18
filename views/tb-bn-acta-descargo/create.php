<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaDescargo */

$this->title = 'Create Tb Bn Acta Descargo';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acta Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acta-descargo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
