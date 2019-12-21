<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>


<?php //print_r($selects); var_dump($query);?>
<div class="container">
        <div class="col-lg-3 sidebar-filters">
            <div>
                <div class="filters-block">
                    <form action="/" method="post">
                    <p class="nazvanie">Тип диска <i class="fa fa-arrow-down arrow-my" id="arrow-my1" aria-hidden="true"></i></p>
                    <div class="dd-content filter1 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($type_diska)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodels">
                            <?php foreach($type_diska as $type_disk):?> 
                            <div class="facet-filter-body facet-filter-bodyRaz">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $type_disk->name;?>" name="<?= $type_disk->name;?>" class="mychecked" value="<?= $type_disk->name;?>">
                                    <label for="<?= $type_disk->name; ?>" class="labels-l"><?= $type_disk->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-f hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">Бренд <i class="fa fa-arrow-down arrow-my" id="arrow-my2" aria-hidden="true"></i></p>
                    <div class="dd-content filter2 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($brand_diska)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsDva">
                            <?php foreach($brand_diska as $brand_disk):?>   
                            <div class="facet-filter-body facet-filter-bodyDva">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $brand_disk->name;?>" name="<?= $brand_disk->name;?>" class="mychecked" value="<?= $brand_disk->name;?>">
                                    <label for="<?= $brand_disk->name; ?>" class="labels-lDva"><?= $brand_disk->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-t hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">Диаметр диска <i class="fa fa-arrow-down arrow-my" id="arrow-my3" aria-hidden="true"></i></p>
                    <div class="dd-content filter3 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($diametr_diska)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsTree">
                            <?php foreach($diametr_diska as $diametr_disk):?>
                            <div class="facet-filter-body facet-filter-bodyTree">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $diametr_disk->name;?>" name="<?= $diametr_disk->name;?>" class="mychecked" value="<?= $diametr_disk->name;?>">
                                    <label for="<?= $diametr_disk->name; ?>" class="labels-lTree"><?= $diametr_disk->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-tr hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">PCD диска<i class="fa fa-arrow-down arrow-my"  id="arrow-my4" aria-hidden="true"></i></p>
                    <div class="dd-content filter4 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($pcd_diska)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsChit">
                            <?php foreach($pcd_diska as $pcd_disk):?>
                            <div class="facet-filter-body">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $pcd_disk->name;?>" name="<?= $pcd_disk->name;?>" class="mychecked" value="<?= $pcd_disk->name;?>">
                                    <label for="<?= $pcd_disk->name; ?>" class="labels-lChit"><?= $pcd_disk->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">DIA диска <i class="fa fa-arrow-down arrow-my" id="arrow-my5" aria-hidden="true"></i></p>
                    <div class="dd-content filter5 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($dia_diska)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsPyat">
                            <?php foreach($dia_diska as $dia_disk):?>
                            <div class="facet-filter-body facet-filter-bodyChit">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $dia_disk->name;?>" name="<?= $dia_disk->name;?>" class="mychecked" value="<?= $dia_disk->name;?>">
                                    <label for="<?= $dia_disk->name; ?>" class="labels-lPyat"><?= $dia_disk->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-fo hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">ET диска <i class="fa fa-arrow-down arrow-my" id="arrow-my6" aria-hidden="true"></i></p>
                    <div class="dd-content filter6 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($et_diska)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsWest">
                            <?php foreach($et_diska as $et_disk):?>
                            <div class="facet-filter-body facet-filter-bodySix">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $et_disk->name;?>" name="<?= $et_disk->name;?>" class="mychecked" value="<?= $et_disk->name;?>">
                                    <label for="<?= $et_disk->name; ?>" class="labels-lWest"><?= $et_disk->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-s hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-success search-button-btn']);?>
                </form>
            </div>
        </div>
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
<?php $this->registerJsFile('@web/js/index_disk.js');?>