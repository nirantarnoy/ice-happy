<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Custumergroup */

$this->title = 'Create Custumergroup';
$this->params['breadcrumbs'][] = ['label' => 'Custumergroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custumergroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
