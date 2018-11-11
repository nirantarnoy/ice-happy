<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Warehouse */

$this->title = 'Create Warehouse';
$this->params['breadcrumbs'][] = ['label' => 'Wharehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wharehouse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
