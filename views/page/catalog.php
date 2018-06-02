<?php
use yii\helpers\Html;
$this -> registerCssFile('@web/css/catalog.css', ['depends' => 'app\assets\AppAsset']);
?>

<main class="mt-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-2">
            <ul class="list-unstyled pd-20 roll">
              <?php foreach ($list_categorys as $list_category): ?>
                <li>
                  <span>
                    <a href="#"><?=$list_category -> title?></a>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-ld-12">
                <p class="pull-right sort">
                  <span>Упорядочить:</span>
                  <a href="#">по цене</a>
                  <a href="#">по возрастанию</a>
                </p>
              </div>
              <div class="row products mt-40">
                <?php foreach ($all_goods as $all_good):?>
                  <a href="index.php?r=/page/goods/">
                    <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12 goods">
                      <div class="row img-height">
                        <div class="col-lg-12 text-center">
                          <p>
                            <?= Html::img($all_good -> photo_url, ['class'=>'width-img']);?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p><?=$all_good -> title?></p>
                          <p><?=$all_good -> price?> грн</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <button type="button" name="button" class="buy">
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
