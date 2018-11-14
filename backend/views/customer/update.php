<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Custumer */

$this->title = 'Update Custumer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Custumers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="custumer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
