<?php use yii\helpers\Html;?>
<?php $main = $product->getImage(); $gallery = $product->getImages();?>
<div class="page-title">
    <h1><?= $product->name_wheel;?></h1>
</div>
<div class="row">
    <div class="col-xl-5 col-lg-6 col-md-7">
        <div class="inner-image-w">
        <?php if ($main->getUrl() !== '/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.png'):?>
        <div class="slider-for">
        <?php foreach($gallery as $gal): ?>

            <img class="img-fluid image-inner-w" src="<?= $gal->getUrl();?>">

        <?php endforeach;?>
        </div>
        <div class="slider-nav">
            <?php foreach($gallery as $gal): ?>

                <img src="<?= $gal->getUrl();?>">

            <?php endforeach;?>
        </div>
        <?php else:?>
            <?= Html::img('/images/no-image.png', ['class' => 'img-fluid image-inner-w']); ?>
        <?php endif;?>
        </div>
    </div>
    <div class="col-xl-4 col-lg-3 col-md-4">
        <div class="inner-short">
            <p><span class="inner-info">Бренд: </span><span class="inner-bold"><?= $product->brand; ?></span></p>
            <p><span class="inner-info">Количество: </span><span class="inner-bold"><?= $product->total_count; ?></span></p>
            <p><span class="inner-info">Цена: </span><span class="inner-bold"><?= $product->price; ?> грн</span></p>
            <a class="btn btn-success" href="<?=$product->link_wheel;?>" target="_blank">Купить</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3">
        <div class="inner-short">
            <p class="garant-p"> <span class="border-b"> <span class="inner-bold garant">Даем гарантию на <br> зборку и балансировку !!!</span> </span></p>
        </div>
    </div>
</div>

<div class="row my-rows">
    
    <div class="titles col-xl-12">
        <div class="product_info">
            <h2 class="title-info-inner">ИНФОРМАЦИЯ О ТОВАРЕ: <?=$product->name_wheel;?></h2>
        </div>
    </div>
    <div class="product-table col-xl-12">
        <div class="row product-row">
            <div class="col-lg-6 col-md-12">
                <h3 class="title-info-tab">Характеристики</h3>
                <table class="product-table-info">
                    <tbody>
                        <?= wheelsNotNull($product->country, 'Страна');?>
                        <?= wheelsNotNull($product->max_speed, 'Максимальная скорокть км/час');?>
                        <?= wheelsNotNull($product->size_shinu, 'Размер шины');?>
                        <?= wheelsNotNull($product->max_load, 'Максимальная нагрузка');?>
                        <?= wheelsNotNull($product->model, 'Модель');?>
                        <?= wheelsNotNull($product->design_shinu, 'Констукция шины');?>
                        <?= wheelsNotNull($product->index_load, 'Индекс нагрузки');?>
                        <?php if ($product->recovery == 1) { $product->recovery = 'да'; } else { $product->recovery = 'нет'; }?>
                        <?= wheelsNotNull($product->recovery, 'Допускается восстановление');?>
                        <?= wheelsNotNull($product->tire_shinu, 'Внешний шум шин [дБ(A)]:');?>
                        <?= wheelsNotNull($product->run_flat, 'RunFlat/SSR/XL');?>
                        <?= wheelsNotNull($product->class_clutch, 'Класс сцепления шины с мокрым дорожным покрытием:');?>
                        <?= wheelsNotNull($product->nal_shipu, 'Наличие шипов');?>
                        <?= wheelsNotNull($product->season, 'Сезонность');?>
                        <?= wheelsNotNull($product->type_shipov, 'Тип шипов');?>
                        <?= wheelsNotNull($product->width_shinu, 'Ширина шины, мм:');?>
                        <?= wheelsNotNull($product->year_release, 'Год выпуска');?>
                        <?= wheelsNotNull($product->simmetria, 'Рисунок протектора (симетрия)');?>
                        <?= wheelsNotNull($product->profile_shinu, 'Профиль шины[%]');?>
                        <?= wheelsNotNull($product->radius_shinu, 'Радиус шины');?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-lg-6 col-md-12">dasdas</div> -->
        </div>
    </div>

</div>


<?php $this->registerJsFile('@web/js/index_slick.js');?>