<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnArchivosUrl */

$this->title = 'Update Tb Bn Archivos Url: ' . $model->Codigo;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Archivos Urls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo, 'url' => ['view', 'id' => $model->Codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-archivos-url-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
