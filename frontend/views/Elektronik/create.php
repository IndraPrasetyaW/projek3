<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Elektronik $model */

$this->title = 'Create Elektronik';
$this->params['breadcrumbs'][] = ['label' => 'Elektroniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="elektronik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
