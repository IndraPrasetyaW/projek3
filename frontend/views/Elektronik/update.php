<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Elektronik $model */

$this->title = 'Update Elektronik: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Elektroniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="elektronik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
