<?php


use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Televisi';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-landing">
    <div class="container">
        <h1>Produk TV Unggulan Kami</h1>
        <br>
        <div class="row">
            <div class="col-md-4">
                <?= Html::img('@web/images/Mi TV 4.png', ['class' => 'img-fluid', 'alt' => 'Image 1']) ?>
                <br><br>
                <p>Produk ini mempunyai resolusi 1920×1080 FHD dengan sistem operasi Android 9.0 yang intuitif.
                    Dibekali memori 8 Gb dan 1 Gb RAM, televisi tersebut sudah cukup untuk memenuhi kebutuhan
                    menikmati konten terkini di aplikasi nonton film seperti Netflix dan Viu.</p>
                <br>
                <p>harga: Rp3,2—4,3 juta</p>
            </div>
            <div class="col-md-4">
                <?= Html::img('@web/images/Samsung AU7002.png', ['class' => 'img-fluid', 'alt' => 'Image 2']) ?>
                <br><br>
                <p> fitur unggulan lain dari Samsung AU7002 adalah motion Xcelerator, Q-symphony sound, dan multiple voice assistant.</p>
                <br><br>
                <p>harga: Rp6,9—7,5 juta</p>
            </div>
            <div class="col-md-4">
                <?= Html::img('@web/images/Chiq L43G7P.png', ['class' => 'img-fluid', 'alt' => 'Image 3']) ?>
                <p>Rekomendasi smart TV 43 inch ini sudah dilengkapi dengan sistem operasi Android 11 yang mudah dioperasikan.
                    Tak hanya itu, produk tersebut juga mempunyai sistem suara yang sudah dioptimalkan dengan maksimal.
                    Ini membuat momen menonton film jadi lebih mengasyikan.</p>
                <br><br>
                <p>harga: Rp2,8—3,1 juta</p>
            </div>

        </div>

        <div class="text-center mt-4">
            <?= Html::a('Tambah Produk', Url::to(['/Elektronik/index']), ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
