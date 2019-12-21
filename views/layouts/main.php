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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container-fluid header-contact-block">
        <div class="container">
            <div class="row">
                <div class="colmy col-lg-4 col-sm-12 p-0">
                    <div class="phones">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <a href="tel: +380931165685">+380 (931) 165 685</a>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-12 my-search-form">
                    <form class="form-inline" method="get" action="<?=Url::to(['/site/search'])?>">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Поиск"
                            aria-label="Search" name="q">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </form>
                </div> -->
                <div class="col-lg-4 col-sm-12 p-0 colmy lexa-grop">
                    <div class="btn-group lexa-btn" role="group" aria-label="Basic example">
                        <a class="btn btn-secondary lexa" href="<?= Url::to(['site/index']);?>">Шины</a>
                        <a class="btn btn-secondary lexa" href="<?= Url::to(['site/disk']);?>">Диски</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar-inverse',
    //     ],
    // ]);
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => [
    //         ['label' => 'Home', 'url' => ['/site/index']],
    //     ],
    // ]);
    // NavBar::end();
    ?>

    <div class="container my-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <div class="page-title text-uppercase page-title-small">
            <h1>Продажа шин и дисков с Германии новые и б/у</h1>
        </div>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container footer-cont">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <p class="my-contacts">&copy; NoCompany :| <?= date('Y') ?></p>
                <p class="my-contacts">NoCompany :| В соц. сетях</p>
                <div class="social-row">
                    <a href="#" target="_blank" title="viber"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" title="telegram"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <p class="my-contacts">Контакты</p>
                <ul class="contact-list">
                    <li><a href="mailto: some@some.com"><i class="fa fa-envelope"></i>some@some.com</a></li>
                    <li><a href="tel: +380931165685"><i class="fa fa-mobile"></i>+380 (931) 165 685</a></li>
                    <li><a target="_blank" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9A%D1%80%D0%B8%D0%B2%D0%BE%D0%BD%D0%BE%D1%81%D0%B0,+41,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+14000/data=!4m2!3m1!1s0x46d548315fed42dd:0x693c8e253af20ec4?sa=X&ved=2ahUKEwjc9IzWwrjmAhUl06YKHQp7B9IQ8gEwAHoECAsQAQ"><i class="fa fa-map-marker"></i>Кривоноса 41а Чернигов</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
