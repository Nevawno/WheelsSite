<?php use yii\helpers\Html;?>
<?php $main = $product->getImage(); $gallery = $product->getImages();?>
<div class="page-title">
    <h1><?= $product->name;?></h1>
</div>
<div class="row">
    <div class="col-xl-5 col-lg-5 col-md-7">
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
    <div class="col-xl-7 col-lg-7 col-sm-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="inner-short">
                    <p><span class="inner-info">Бренд: </span><span class="inner-bold"><?= $product->brand; ?></span></p>
                    <p><span class="inner-info">Количество: </span><span class="inner-bold"><?= $product->total_count; ?></span></p>
                    <p><span class="inner-info">Цена: </span><span class="inner-bold"><?= $product->price; ?> грн</span></p>
                    <a class="btn btn-success" href="<?=$product->link;?>" target="_blank">Купить</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="inner-short">
                    <p class="garant-p"> <span class="border-b"> <span class="inner-bold garant">Даем гарантию на <br> сборку и балансировку !!!</span> </span></p>
                </div>
            </div>
        </div>
        <div class="row lorem-text">
            <div class="col-lg-12">
                <p><?=$product->custom_text;?></p>
            </div>
        </div>
    </div>
</div>

<div class="row my-rows">
    
    <div class="titles col-xl-12">
        <div class="product_info">
            <h2 class="title-info-inner">ИНФОРМАЦИЯ О ТОВАРЕ: <?=$product->name;?></h2>
        </div>
    </div>
    <div class="product-table col-xl-12">
        <div class="row product-row">
            <div class="col-lg-6 col-md-12">
                <h3 class="title-info-tab">Характеристики</h3>
                <table class="product-table-info">
                    <tbody>
                        <?= wheelsNotNull($product->width_diska, 'Ширина диска');?>
                        <?= wheelsNotNull($product->diametr_diska, 'Диаметр диска');?>
                        <?= wheelsNotNull($product->pcd_diska, 'PCD диска');?>
                        <?= wheelsNotNull($product->dia_diska, 'DIA диска');?>
                        <?= wheelsNotNull($product->et_diska, 'ET диска');?>
                        <?= wheelsNotNull($product->type_diska, 'Тип диска');?>
                        <?= wheelsNotNull($product->brand, 'фирма');?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-lg-6 col-md-12">dasdas</div> -->
        </div>
    </div>

</div>
<?php $this->registerJsFile('@web/js/index_slick.js');?>