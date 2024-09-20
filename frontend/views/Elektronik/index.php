<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Landing';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="Elektronik-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'description',
            'price',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
