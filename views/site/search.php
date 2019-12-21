<!-- <?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<?php //print_r($selects); var_dump($query);?>
<?php if (!empty($wheels)):?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row catalogue-list">
                <?php if (!empty($wheels)):?>
                <?php foreach ($wheels as $wheel):?>
                <?php $main = $wheel->getImage();?>
                <div class="col-md-4 col-sm-6">
                    <div class="catalogue-list-item">
                        <div class="item-inner">
                            <div class="image-wrapper">
                                <a class="image" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $wheel->id]);?>">
                                    <span class="lazy-img-wrapper lazy-load-image-background opacity lazy-load-image-loaded">
                                        <?php if ($main->getUrl() !== '/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.png'):?>
                                            <?= Html::img($main->getUrl(), ["alt" => $wheel->name_wheel]); ?>
                                        <?php endif;?>
                                        <?php if($main->getUrl() == '/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.png'):?>    
                                            <?= Html::img('/images/no-image.png', ["alt" => $wheel->name_wheel]); ?>
                                        <?php endif;?>
                                    </span>
                                </a>
                            </div>
                            <div class="info-wrapper">
                                <div class="info-block-wrapper">
                                    <div class="info-block">
                                        <div class="title-wrapper">
                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $wheel->id]);?>">
                                                <div>
                                                <strong><?= $wheel->name_wheel; ?></strong>
                                                </div>
                                                &nbsp;
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <div class="price-block">
                                                <div class="price">
                                                    <span><?= $wheel->price; ?> грн</span>
                                                </div>
                                                <div class="list-item-btn">
                                                    <a href="<?= $wheel->link_wheel; ?>" target="_blank" class="btn btn-blue buy-btn">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="general-info">
                                            <div class="short-info-row">
                                                <span>В наличчии <?= $wheel->total_count; ?> шт.</span>
                                            </div>
                                            <div class="short-info-row">
                                                <span>Бренд: &nbsp;</span>
                                                <span class="bold"><?= $wheel->brand; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="full-info">
                                    <table>
                                        <tbody>
                                            <?= wheelsNotNull($wheel->country, 'Страна');?>
                                            <?= wheelsNotNull($wheel->max_speed, 'Максимальная скорокть км/час');?>
                                            <?= wheelsNotNull($wheel->size_shinu, 'Размер шины');?>
                                            <?= wheelsNotNull($wheel->max_load, 'Максимальная нагрузка');?>
                                            <?= wheelsNotNull($wheel->model, 'Модель');?>
                                            <?= wheelsNotNull($wheel->design_shinu, 'Констукция шины');?>
                                            <?= wheelsNotNull($wheel->index_load, 'Индекс нагрузки');?>
                                            <?php if ($wheel->recovery == 1){$wheel->recovery = 'да';} else {$wheel->recovery = 'нет';}?>
                                            <?= wheelsNotNull($wheel->recovery, 'Допускается восстановление');?>
                                            <?= wheelsNotNull($wheel->tire_shinu, 'Внешний шум шин [дБ(A)]:');?>
                                            <?= wheelsNotNull($wheel->run_flat, 'RunFlat/SSR/XL');?>
                                            <?= wheelsNotNull($wheel->class_clutch, 'Класс сцепления шины с мокрым дорожным покрытием:');?>
                                            <?= wheelsNotNull($wheel->nal_shipu, 'Наличие шипов');?>
                                            <?= wheelsNotNull($wheel->season, 'Сезонность');?>
                                            <?= wheelsNotNull($wheel->type_shipov, 'Тип шипов');?>
                                            <?= wheelsNotNull($wheel->width_shinu, 'Ширина шины, мм:');?>
                                            <?= wheelsNotNull($wheel->year_release, 'Год выпуска');?>
                                            <?= wheelsNotNull($wheel->simmetria, 'Рисунок протектора (симетрия)');?>
                                            <?= wheelsNotNull($wheel->profile_shinu, 'Профиль шины[%]');?>
                                            <?= wheelsNotNull($wheel->radius_shinu, 'Радиус шины');?>
                                            <?php if ($wheel->link_wheel):?>
                                            <tr>
                                            <td>Ссылка на OLX</td>
                                            <td><a href="<?= Url::to($wheel->link_wheel)?>" target="_blank">Ссылка</a></td>
                                            </tr>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <?= LinkPager::widget(['pagination' => $pagination]);?>
                <?php else:?>
                    <div class="error-emoji text-center">
                        \(o_o)/
                        <p class="error-found">Такого товара либо нет, либо вы плохо искали</p>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<?php elseif(!empty($diski)):?>
    <div class="container">
        <div class="col-lg-9 col-md-12">
            <div class="row catalogue-list">
                <?php if (!empty($diski)):?>
                <?php foreach ($diski as $disk):?>
                <?php $main = $disk->getImage();?>
                <div class="col-md-4 col-sm-6">
                    <div class="catalogue-list-item">
                        <div class="item-inner">
                            <div class="image-wrapper">
                                <a class="image" href="<?= \yii\helpers\Url::to(['disk/view', 'id' => $disk->id]);?>">
                                    <span class="lazy-img-wrapper lazy-load-image-background opacity lazy-load-image-loaded">
            
                                    <?php if ($main->getUrl() !== '/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.png'):?>
                                            <?= Html::img($main->getUrl(), ["alt" => $wheel->name_wheel]); ?>
                                    <?php endif;?>
                                    <?php if($main->getUrl() == '/images/image-by-item-and-alias?item=&dirtyAlias=placeHolder.png'):?>    
                                        <?= Html::img('/images/no-image.png', ["alt" => $wheel->name_wheel]); ?>
                                    <?php endif;?>
                                    </span>
                                </a>
                            </div>
                            <div class="info-wrapper">
                                <div class="info-block-wrapper">
                                    <div class="info-block">
                                        <div class="title-wrapper">
                                            <a href="<?= \yii\helpers\Url::to(['disk/view', 'id' => $disk->id]);?>">
                                                <div>
                                                <strong><?= $disk->name; ?></strong>
                                                </div>
                                                &nbsp;
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <div class="price-block">
                                                <div class="price">
                                                    <span><?= $disk->price; ?> грн</span>
                                                </div>
                                                <div class="list-item-btn">
                                                    <a href="<?= $disk->link; ?>" target="_blank" class="btn btn-blue buy-btn">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="general-info">
                                            <div class="short-info-row">
                                                <span>В наличчии <?= $disk->total_count; ?> шт.</span>
                                            </div>
                                            <div class="short-info-row">
                                                <span>Бренд: &nbsp;</span>
                                                <span class="bold"><?= $disk->brand; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="full-info">
                                    <table>
                                        <tbody>
                                            <?= wheelsNotNull($disk->width_diska, 'Ширина диска');?>
                                            <?= wheelsNotNull($disk->diametr_diska, 'Диаметр диска');?>
                                            <?= wheelsNotNull($disk->pcd_diska, 'PCD диска');?>
                                            <?= wheelsNotNull($disk->dia_diska, 'DIA диска');?>
                                            <?= wheelsNotNull($disk->et_diska, 'ET диска');?>
                                            <?= wheelsNotNull($disk->type_diska, 'Тип диска');?>
                                            <?php if ($disk->link):?>
                                            <tr>
                                            <td>Ссылка на OLX</td>
                                            <td><a href="<?= Url::to($disk->link)?>" target="_blank">Ссылка</a></td>
                                            </tr>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <?= LinkPager::widget(['pagination' => $pagination]);?>
                <?php else:?>
                    <div class="error-emoji text-center">
                        \(o_o)/
                        <p class="error-found">Такого товара либо нет, либо вы плохо искали</p>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<?php endif;?> -->