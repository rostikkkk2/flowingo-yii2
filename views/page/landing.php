<?php
use yii\helpers\Html;
$this -> registerCssFile('@web/css/landing.css', ['depends' => 'app\assets\AppAsset']);
?>

<main class="mt-25">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <?= Html::img('@web/src/basic-pic/slid.jpg', ['class'=>'wd-100']);?>
            </div>
            <div class="item">
              <?= Html::img('@web/src/basic-pic/slid.jpg', ['class'=>'wd-100']);?>
            </div>
            <div class="item">
              <?= Html::img('@web/src/basic-pic/slid.jpg', ['class'=>'wd-100']);?>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">TOP</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="row">

          <a href="?r=page/catalog">
            <?php foreach ($top_goods as $top_good):?>
              <input type="hidden" name="id" value="">
              <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12 goods">
                <div class="row img-height">
                  <div class="col-lg-12 text-center">
                    <p>
                      <?= Html::img($top_good -> photo_url, ['class'=>'width-img']);?>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <p><?=$top_good -> title?></p>
                    <p><?=$top_good -> price?> грн</p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <button type="button" name="button" class="buy">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">NEW</p>
      </div>
    </div>
    <div class="row products">
      <div class="col-lg-12">
        <div class="row">
          <?php foreach ($new_goods as $new_good):?>
            <a href="/goods/show/">
              <input type="hidden" name="id" value="">
              <div class="col-lg-2 col-md-6 col-sm-4 goods">
                <div class="row img-height">
                  <div class="col-lg-12 text-center">
                    <p>
                      <?= Html::img($new_good -> photo_url, ['class'=>'width-img']);?>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <p><?=$new_good -> title?></p>
                    <p><?=$new_good -> price?> грн</p>
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
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">Новости</p>
      </div>
    </div>
    <div class="row">
      <?php foreach ($all_news as $all_new):?>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <div class="row align-news">
            <div class="col-lg-1">
              <span>
                <?= Html::img($all_new -> photo, ['class'=>'news']);?>
              </span>
            </div>
            <div class="col-lg-8">
              <ul class="list-unstyled news-inf">
                <li class="news-h1"><strong><?=$all_new -> short_description?></strong></li>
                <li class="news-data"><?=$all_new -> datetime?></li>
                <li class=""><?=$all_new -> full_text?></li>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="col-lg-3">
        <img class="pull-right mt-10" src="http://flowingo.com/app/assets/src/social-net/vk.png" alt="VK_share">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">О нас</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>Lorem ipsum operator/dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</main>
