<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Custumer */

$this->title = 'Create Custumer';
$this->params['breadcrumbs'][] = ['label' => 'Custumers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custumer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
