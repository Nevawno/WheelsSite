<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<?php //print_r($selects); var_dump($query);?>

<div class="container">
    <div class="row"></div>
        <div class="col-lg-3 sidebar-filters">
            <div>
                <div class="filters-block">
                    <form action="/" method="post">
                    <p class="nazvanie">Модель <i class="fa fa-arrow-down arrow-my" id="arrow-my1" aria-hidden="true"></i></p>
                    <div class="dd-content filter1 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($models)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodels">
                            <?php foreach($models as $model):?> 
                            <div class="facet-filter-body facet-filter-bodyRaz">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $model->name;?>" name="<?= $model->name;?>" class="mychecked" value="<?= $model->name;?>">
                                    <label for="<?= $model->name; ?>" class="labels-l"><?= $model->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-f hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">Бренды <i class="fa fa-arrow-down arrow-my" id="arrow-my2" aria-hidden="true"></i></p>
                    <div class="dd-content filter2 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($brands)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsDva">
                            <?php foreach($brands as $brand):?>   
                            <div class="facet-filter-body facet-filter-bodyDva">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $brand->name;?>" name="<?= $brand->name;?>" class="mychecked" value="<?= $brand->name;?>">
                                    <label for="<?= $brand->name; ?>" class="labels-lDva"><?= $brand->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-t hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">Сезонность <i class="fa fa-arrow-down arrow-my" id="arrow-my3" aria-hidden="true"></i></p>
                    <div class="dd-content filter3 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($seasons)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsTree">
                            <?php foreach($seasons as $season):?>
                            <div class="facet-filter-body facet-filter-bodyTree">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $season->name;?>" name="<?= $season->name;?>" class="mychecked" value="<?= $season->name;?>">
                                    <label for="<?= $season->name; ?>" class="labels-lTree"><?= $season->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-tr hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">ШИРИНА ШИНЫ, ММ <i class="fa fa-arrow-down arrow-my"  id="arrow-my4" aria-hidden="true"></i></p>
                    <div class="dd-content filter4 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($widthShinus)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsChit">
                            <?php foreach($widthShinus as $widthShinu):?>
                            <div class="facet-filter-body facet-filter-bodyChit">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $widthShinu->shirina;?>" name="<?= $widthShinu->shirina;?>" class="mychecked" value="<?= $widthShinu->shirina;?>">
                                    <label for="<?= $widthShinu->shirina; ?>" class="labels-lChit"><?= $widthShinu->shirina; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-fo hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">ПРОФИЛЬ ШИНЫ, [%] <i class="fa fa-arrow-down arrow-my" id="arrow-my5" aria-hidden="true"></i></p>
                    <div class="dd-content filter5 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($profileShinus)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsPyat">
                            <?php foreach($profileShinus as $profileShinu):?>
                            <div class="facet-filter-body facet-filter-bodyFiv">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $profileShinu->name;?>" name="<?= $profileShinu->name;?>" class="mychecked" value="<?= $profileShinu->name;?>">
                                    <label for="<?= $profileShinu->name; ?>" class="labels-lPyat"><?= $profileShinu->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-fiv hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">ДИАМЕТР КОЛЕСНОГО <br> ДИСКА [ДЮЙМ] <i class="fa fa-arrow-down arrow-my" id="arrow-my6" aria-hidden="true"></i></p>
                    <div class="dd-content filter6 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($radiuses)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsWest">
                            <?php foreach($radiuses as $radius):?>
                            <div class="facet-filter-body facet-filter-bodySix">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $radius->name; ?>" name="<?= $radius->name; ?>" class="mychecked" value="<?= $radius->name; ?>">
                                    <label for="<?= $radius->name; ?>" class="labels-lWest"><?= $radius->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-s hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">ТИП ОШИПОВКИ <i class="fa fa-arrow-down arrow-my"  id="arrow-my7" aria-hidden="true"></i></p>
                    <div class="dd-content filter7 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($typeShipovs)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsSem">
                            <?php foreach($typeShipovs as $typeShipov):?>
                            <div class="facet-filter-body facet-filter-bodySv">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $typeShipov->name;?>" name="<?= $typeShipov->name;?>" class="mychecked" value="<?= $typeShipov->name;?>">
                                    <label for="<?= $typeShipov->name; ?>" class="labels-lSem"><?= $typeShipov->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-sv hiden">Больше</button>
                            <?php endif;?>
                        </div>
                    </div>
                    <p class="nazvanie">НАЛИЧИЕ ШИПОВ <i class="fa fa-arrow-down arrow-my"  id="arrow-my8" aria-hidden="true"></i></p>
                    <div class="dd-content filter8 hiden">
                        <div class="facet-filter">
                            <?php if (!empty($nalShipovs)):?>
                            <input type="text" placeholder="Поиск" autocomplete="on" id="searchmodelsVosem">
                            <?php foreach($nalShipovs as $nalShipov):?>
                            <div class="facet-filter-body facet-filter-bodyEg">
                                <div class="checkbox">
                                    <input type="checkbox" id="<?= $nalShipov->name;?>" name="<?= $nalShipov->name;?>" class="mychecked" value="<?= $nalShipov->name;?>">
                                    <label for="<?= $nalShipov->name; ?>" class="labels-lVosem"><?= $nalShipov->name; ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-warning btn-nore-eg hiden">Больше</button>
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
<?php $this->registerJsFile('@web/js/index.js');?>