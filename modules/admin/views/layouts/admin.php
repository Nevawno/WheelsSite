<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => 'Панель админка',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'На главную', 'url' => ['/site/index'], 'label' => 'Выход',  'url' => '/site/logout'],
        ],
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <div class="row">
            <div class="dropdown col-lg-3">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Шины
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?=Url::to('/admin/wheels/index')?>">Список шин</a></li>
                <li><a href="<?=Url::to('/admin/wheels/create')?>">Добавить шину</a></li>
            </ul>
            </div>
            <div class="dropdown col-lg-3">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Диски
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?=Url::to('/admin/diski/index')?>">Список дисков</a></li>
                <li><a href="<?=Url::to('/admin/diski/create')?>">Добавить диск</a></li>
            </ul>
            </div>
            <div class="dropdown col-lg-3">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Категории шин
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="<?=Url::to('/admin/models/index')?>">Модель</a></li>
                    <li><a href="<?=Url::to('/admin/brands/index')?>">Брэнды</a></li>
                    <li><a href="<?=Url::to('/admin/seasons/index')?>">Сезонность</a></li>
                    <li><a href="<?=Url::to('/admin/widthsh/index')?>">ШИРИНА ШИНЫ, ММ</a></li>
                    <li><a href="<?=Url::to('/admin/profilesh/index')?>">ПРОФИЛЬ ШИНЫ, [%]</a></li>
                    <li><a href="<?=Url::to('/admin/radiussh/index')?>">ДИАМЕТР КОЛЕСНОГО ДИСКА [ДЮЙМ]</a></li>
                    <li><a href="<?=Url::to('/admin/tipsh/index')?>">ТИП ОШИПОВКИ</a></li>
                    <li><a href="<?=Url::to('/admin/nalshipu/index')?>">НАЛИЧИЕ ШИПОВ</a></li>
                </ul>
            </div>
            <div class="dropdown col-lg-3">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Категории дисков
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="<?=Url::to('/admin/typeds/index')?>">Тип диска</a></li>
                    <li><a href="<?=Url::to('/admin/brandss/index')?>">Бренд</a></li>
                    <li><a href="<?=Url::to('/admin/diametrds/index')?>">Диаметр диска</a></li>
                    <li><a href="<?=Url::to('/admin/pcdds/index')?>">PCD диска</a></li>
                    <li><a href="<?=Url::to('/admin/etds/index')?>">ET диска</a></li>
                    <li><a href="<?=Url::to('/admin/diads/index')?>">DIA диска</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container my-wrapper">

        <?= Alert::widget() ?>

        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
